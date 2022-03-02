<div class="card">
    <div class="card-body pd-0">
        <h4 class="card-title mb-0">Danh sách đơn mua</h4>
        <div class="row">
            <div class="col-md-4 user_role"></div>
            <div class="col-md-4 user_plan"></div>
            <div class="col-md-4 user_status"></div>
        </div>
    </div>
    <div class="card-datatable table-responsive pt-0">
        <table class="user-list-table table">
            <thead class="table-light">
            <tr>
                <th>ID</th>
                <th>Thời gian</th>
                <th>Tour du lịch</th>
                <th>Khách hàng</th>
                <th>Số lượng vé</th>
                <th>Tổng tiền</th>
                <th>Hành động</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $index => $order)
                <tr>
                    <td>{{$index + 1}}</td>
                    <td>{{$order->time_start_travel}}</td>
                    <td>{{@$order->tour->name ?? 'Không có'}}</td>
                    <td>{{@$order->customer->name ?? 'Không có'}}</td>
                    <td>{{$order->quatity}}</td>
                    <td>{{$order->total_price}}</td>
                    <td class="d-flex justify-center">
                        <div class="show-button cursor-pointer" id="btn-edit-modal">
                            <a href="{{route('admin.orders.show', $order->id)}}" style="color: #6e6b7b">
                                <i class="icon"
                                   data-id="{{ $order->id }}"
                                   data-feather='eye'></i>
                            </a>
                        </div>
                        <div class="edit-button cursor-pointer" id="btn-edit-modal"
                             data-bs-toggle="modal" data-bs-target="#order-modal-update"
                             data-id="{{ $order->id }}">
                            <i class="icon"
                               data-feather='edit-2'></i>
                        </div>
                        <div class="delete-button cursor-pointer" data-id="{{ $order->id }}">
                            <i class="mr-2 icon" data-feather='trash'></i>
                        </div>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@push('css')
    <style>
        .icon {
            width: 1.4rem;
            height: 1.4rem;
            margin-right: .5rem;
        }

        .pd-0 {
            padding: 1.5rem 1.5rem 0 1.5rem;
        }

        .mb-0 {
            margin-bottom: 0 !important;
        }
    </style>
@endpush

@push('js')
    <script src="/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
    <script src="/app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js"></script>
    <script src="/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script>
        var dtUserTable = $('.user-list-table');
        dtUserTable.DataTable({
            paging: false,
            dom:
                '<"d-flex justify-content-between align-items-center header-actions mx-2 row mt-75"' +
                '<"col-sm-12 col-lg-4 d-flex justify-content-center justify-content-lg-start" l>' +
                '<"col-sm-12 col-lg-8 ps-xl-75 ps-0"<"dt-action-buttons d-flex align-items-center justify-content-center justify-content-lg-end flex-lg-nowrap flex-wrap"<"me-1"f>B>>' +
                '>t' +
                '<"d-flex justify-content-between mx-2 row mb-1"' +
                '<"col-sm-12 col-md-6"i>' +
                '<"col-sm-12 col-md-6"p>' +
                '>',
            language: {
                sLengthMenu: 'Show _MENU_',
                search: 'Tìm kiếm',
                paginate: {
                    // remove previous & next text from pagination
                    previous: '&nbsp;',
                    next: '&nbsp;'
                }
            },
            // Buttons with Dropdown
            buttons: [
                {
                    text: 'Thêm đơn hàng mới',
                    className: 'add-new btn btn-primary',
                    attr: {
                        'data-bs-toggle': 'modal',
                        'data-bs-target': '#order-modal'
                    },
                },
            ],
            // For responsive popup
        });
    </script>


    <script>
        //Remove order
        $(document).ready(function () {

            $('.delete-button').on('click', function (e) {
                const order_id = $(this).attr('data-id');
                confirmAlert('Bạn có muốn xóa không?').then(function (result) {
                    if (result.value) {
                        removeOrder({order_id}).then(resp => {
                            const {code, data, message} = resp.data;
                            if (code === SUCCESS) {
                                successAlert(message);
                                location.reload();
                                return -1;
                            }

                            if (code === ERROR) {
                                errorAlert(message);
                            }
                        })
                    }
                });
            })
        })

    </script>
@endpush