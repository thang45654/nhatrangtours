<div class="card">
    <div class="card-body pd-0">
        <h5 class="card-title mb-0">Danh sách cộng tác viên</h5>
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
                <th>TÊN CTV</th>
                <th>SĐT LIÊN HỆ</th>
                <th>NGHỀ NGHIỆP</th>
                <th>TỔNG QUAN HOA HỒNG</th>
                <th>SỐ TIỀN CHƯA THANH TOÁN</th>
                <th>HÀNH ĐỘNG</th>
            </tr>
            </thead>
            <tbody>
            @if(isset($partners))
                @foreach($partners as $partner)
                    <tr>
                        <td>{{$partner->name}}</td>
                        <td>{{$partner->phone}}</td>
                        <td>{{$partner->job}}</td>
                        <td>100.000.000</td>
                        <td>20.000.000</td>
                        <td>
                            {{--                                                <button type="button"  data-bs-toggle="modal" data-bs-target="#editScore" data-id="{{ $partner->id }}">--}}
                            {{--                                                   edit </button>--}}

                            <i  id="edit-partner" tabindex="0" data-bs-toggle="modal" data-bs-target="#editScore" data-id="{{ $partner->id }}" style="width: 20px;color:blue; height: 20px;" data-feather='edit-2'></i>
                            <a href="{{ route('admin.partners.show', $partner->id) }}" style="margin-left: 10px" > <i style="width: 20px; height: 20px;" data-feather='eye'></i> </a>
                            <a href="{{ route('admin.partners.delete', $partner->id) }}" onclick="return window.confirm('Bạn có chắc chắn xóa không?');" data-id="{{ $partner->id }}" id="edit-partner" style="margin-left: 10px" > <i style="width: 20px; height: 20px;" data-feather='trash-2'></i> </a>
                        </td>
                    </tr>
                @endforeach
            @endif
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
                search: 'Search',
                paginate: {
                    // remove previous & next text from pagination
                    previous: '&nbsp;',
                    next: '&nbsp;'
                }
            },
            // Buttons with Dropdown
            buttons: [
                {
                    text: 'Thêm cộng tác viên',
                    className: 'add-new btn btn-primary',
                    attr: {
                        'data-bs-toggle': 'modal',
                        'data-bs-target': '#addScore'
                    },
                },
            ],
            // For responsive popup
        });
    </script>

@endpush
