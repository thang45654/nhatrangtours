@extends('layouts.app')

@section('content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- users list start -->
                <section class="app-user-list">
                    <div class="row">
                        <div class="col-lg-4 col-sm-12">
                            <div class="card card-congratulation-medal">
                                <div class="card-body">
                                    <h5>Doanh thu trong tuần này</h5>
                                    <p class="card-text font-small-3">Số tiền bán vé trong tuần</p>
                                    <h3 class="mb-75 pt-50">
                                        <a href="#">{{$total_revenue}}</a>
                                    </h3>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#order-modal">Thêm đơn hàng mới</button>

                                    <img src="../../../app-assets/images/illustration/badge.svg"
                                         class="congratulation-medal" alt="medal pic"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="card">
                                <div style="height: 181px"
                                     class="card-body align-items-center justify-content-center d-flex flex-column">

                                    <div class="avatar bg-light-danger p-50 mb-1">
                                        <span class="avatar-content">
{{--                                            <i data-feather="user" class="font-medium-4"></i>--}}
                                            <i data-feather='shopping-bag' class="font-medium-4"></i>
                                        </span>
                                    </div>

                                    <div class="d-flex flex-column justify-content-center text-center">
                                        <h3 class="fw-bolder">{{$total_tours}}</h3>
                                        <span>tour du lịch</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="card">
                                <div style="height: 181px"
                                     class="card-body align-items-center justify-content-center d-flex flex-column">

                                    <div class="avatar bg-light-warning p-50 mb-1">
                                        <span class="avatar-content">
{{--                                            <i data-feather="user" class="font-medium-4"></i>--}}
                                            <i data-feather='message-square' class="font-medium-4"></i>
                                        </span>
                                    </div>

                                    <div class="d-flex flex-column justify-content-center text-center">
                                        <h3 class="fw-bolder">{{$total_partners}}</h3>
                                        <span>Cộng tác viên</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="card">
                                <div style="height: 181px"
                                     class="card-body align-items-center justify-content-center d-flex flex-column">

                                    <div class="avatar bg-light-info p-50 mb-1">
                                        <span class="avatar-content">
{{--                                            <i data-feather="user" class="font-medium-4"></i>--}}
                                            <i data-feather='eye' class="font-medium-4"></i>
                                        </span>
                                    </div>

                                    <div class="d-flex flex-column justify-content-center text-center">
                                        <h3 class="fw-bolder">{{$total_tickets}}</h3>
                                        <span>Vé đã bán</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="card">
                                <div style="height: 181px"
                                     class="card-body align-items-center justify-content-center d-flex flex-column">

                                    <div class="avatar bg-light-primary p-50 mb-1">
                                        <span class="avatar-content">
{{--                                            <i data-feather="user" class="font-medium-4"></i>--}}
                                            <i data-feather='heart' class="font-medium-4"></i>
                                        </span>
                                    </div>

                                    <div class="d-flex flex-column justify-content-center text-center">
                                        <h3 class="fw-bolder">{{$total_revenue}}</h3>
                                        <span>Tổng doanh thu</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- list and filter start -->
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
                                            <div class="show-button cursor-pointer" id="btn-edit-modal" >
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
                        {{--THÊM--}}
                        <div class="modal fade text-start" id="order-modal" tabindex="-1"
                             aria-labelledby="myModalLabel33" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <form action="#">
                                        <div class="modal-body">
                                            <div class="d-flex justify-content-center mb-3">
                                                <h2>Tạo đơn hàng mới</h2>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12">
                                                    <label>Tên khách hàng: </label>
                                                    <div class="mb-1">
                                                        <input type="text" name="customer_name"
                                                               placeholder="Vui lòng nhập" class="form-control"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <label>Thông tin liên hệ: </label>
                                                    <div class="mb-1">
                                                        <input type="text" name="customer_info"
                                                               placeholder="Email hoặc SĐT" class="form-control"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12">
                                                    <label>Chọn tour: </label>
                                                    <div class="mb-1">
                                                        <select name="tour_id" id="tours" class="form-control">
                                                            <option value="" disabled>Vui lòng chọn</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12">
                                                    <label>Số lượng vé: </label>
                                                    <div class="mb-1">
                                                        <input type="number" min="0" name="quatity"
                                                               placeholder="Vui lòng nhập" class="form-control"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <label>Chọn thời gian đi: </label>
                                                    <div class="mb-1">
                                                        <input type="text" name="time_start"
                                                               placeholder="Chọn thời gian" class="form-control"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <label>Mã giới thiệu: </label>
                                                    <div class="mb-1">
                                                        <input type="text" name="referral_code"
                                                               placeholder="Nhập mã giới thiệu"
                                                               class="form-control"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 form-group">
                                                    <label>Ghi chú: </label>
                                                    <div class="mb-1">
                                                        <textarea name="note" id="" cols="10" rows="5"
                                                                  class="form-control"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 form-group">
                                                    <label><b id="total-price">Thành tiền: 0 VNĐ</b> </label>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer d-flex justify-content-center">
                                            <button type="button" class="btn btn-primary" id="submit-order">Xác nhận và
                                                xuất vé
                                            </button>
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Hủy bỏ
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        {{--SỬA--}}
                        <div class="modal fade text-start" id="order-modal-update" tabindex="-1"
                             aria-labelledby="myModalLabel33" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <form action="#">
                                        <div class="modal-body">
                                            <div class="d-flex justify-content-center mb-3">
                                                <h2>Chỉnh sửa đơn hàng</h2>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12">
                                                    <label>Tên khách hàng: </label>
                                                    <div class="mb-1">
                                                        <input type="text" name="customer_name"
                                                               placeholder="Vui lòng nhập" class="form-control"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <label>Thông tin liên hệ: </label>
                                                    <div class="mb-1">
                                                        <input type="text" name="customer_info"
                                                               placeholder="Email hoặc SĐT" class="form-control"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12">
                                                    <label>Chọn tour: </label>
                                                    <div class="mb-1">
                                                        <select name="tour_id" id="tours" class="form-control">
                                                            <option value="" disabled>Vui lòng chọn</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12">
                                                    <label>Số lượng vé: </label>
                                                    <div class="mb-1">
                                                        <input type="number" min="0" name="quatity"
                                                               placeholder="Vui lòng nhập" class="form-control"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <label>Chọn thời gian đi: </label>
                                                    <div class="mb-1">
                                                        <input type="text" name="time_start"
                                                               placeholder="Chọn thời gian" class="form-control"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <label>Mã giới thiệu: </label>
                                                    <div class="mb-1">
                                                        <input type="text" name="referral_code"
                                                               placeholder="Nhập mã giới thiệu"
                                                               class="form-control"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 form-group">
                                                    <label>Ghi chú: </label>
                                                    <div class="mb-1">
                                                        <textarea name="note" id="" cols="10" rows="5"
                                                                  class="form-control"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 form-group">
                                                    <label><b id="total-price">Thành tiền: 0 VNĐ</b> </label>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer d-flex justify-content-center">
                                            <button type="button" class="btn btn-primary" id="submit-order">Xác nhận và
                                                xuất vé
                                            </button>
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Hủy bỏ
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                    </div>
                    <!-- list and filter end -->
                </section>
                <!-- users list ends -->
            </div>
        </div>
    </div>



@endsection

@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <style>
        .icon {
            width: 1.4rem;
            height: 1.4rem;
            margin-right: .5rem;
        }

        .modal-header {
            background-color: #fff !important;
            padding: 0 1.4rem;
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
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="/app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>


    <script>
        $(document).ready(function () {// đợi web load xong thì thực hiện == window.onload
            const modal = $('#order-modal'),
                basicPickr = modal.find('input[name=time_start]'),
                modalUpdate = $('#order-modal-update');// khai báo biến để tiền dùng về sau
            let totalPrice = 0, selectedTour = null, discount_minus = false;
            basicPickr.flatpickr({
                enableTime: true,
                dateFormat: "d-m-Y H:i",
            })// setup bộ chọn thời gian có chọn giờ
            var dtUserTable = $('.user-list-table');// khai báo và sử dụng datatable
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
                    '>',// tạo template cho datatable
                language: {
                    sLengthMenu: 'Show _MENU_',// hiển thị bộ chọn giới hạn bản ghi trên 1 trang--- _MENU_ sẽ được hiểu là bộ chọn select
                    search: 'Tìm kiếm',// việt hóa
                    paginate: {
                        // remove previous & next text from pagination
                        previous: '&nbsp;',// kí hiệu nút trang trước
                        next: '&nbsp;'// ký hiệu nút trang tiếp theo
                    }
                },
                // Buttons with Dropdown
                buttons: [// style cho nút bấm thêm đơn hàng
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
            //???
            $("div.table-title").html('<b>Custom tool bar! Text/images etc.</b>');// thay đổi nội dung tiêu đề bảng

            let isValidCode = 0;
            // hỏi lại khi nào thì kích hoạt sự kiện input
            modal.find('input[name="referral_code"]').on('input', delay(function () {
                hideValidation(modal, 'input');
                const referral_code = $(this).val();
                checkPartner({referral_code}).then(resp => {
                    const {data, code, message} = resp.data;
                    if (code === 400) {
                        isValidCode = 0;
                        modal.find('input[name="referral_code"]').addClass('is-invalid').parent().append('<div class="invalid-feedback">' +
                            '<strong>' + message + '</strong>' +
                            '</div>');
                        return -1;
                    }
                    isValidCode = 1;
                    modal.find('input[name="referral_code"]').addClass('is-valid').parent().append('<div class="valid-feedback">' +
                        '<strong>' + message + '</strong>' +
                        '</div>');

                    totalPrice -= (totalPrice * selectedTour.discount_percent_customer / 100);
                    modal.find('#total-price').text(`Thành tiền: ${formatNumber(totalPrice)} VNĐ`);
                    return -1;
                })
            }))
            modal.on('show.bs.modal', function () {
                // gọi api
                getTours().then(data => {
                    const tours = data.data.data;
                    // hiển thị dữ liệu
                    tours.forEach((tour) => {
                        modal.find('select[name="tour_id"]').empty();
                        modal.find('select[name="tour_id"]').append(`<option value="">Chọn Tour</option><option value="${tour.id}">${tour.name}</option>`)
                    })

                    modal.find('input[name="quatity"]').on('input', function () {
                        const tickets = $(this).val();

                        selectedTour = tours.filter(tour => tour.id === parseInt(modal.find('select[name="tour_id"]').val()))

                        if (selectedTour.length) {
                            selectedTour = selectedTour[0];
                            totalPrice = parseInt(tickets) * selectedTour.price - (parseInt(tickets) * selectedTour.price * (isValidCode ? selectedTour.discount_percent_customer : 0));

                            modal.find('#total-price').text(`Thành tiền: ${formatNumber(totalPrice)} VNĐ`);
                        }
                    })
                })

            })
            // thêm đơn hàng hoặc cập nhật đơn hàng > xem lại code
            modal.find('#submit-order').on('click', function () {
                const data = getDataInForm(modal, 'input', 'select', 'textarea');
                storeOrder(data).then(resp => {
                    let {data, code, message} = resp.data;
                    if (code === ERROR) {
                        $.each(data, function (index, val) {
                            modal.find('input[name=' + index + '],select[name=' + index + ']')
                                .addClass('is-invalid').parent().append('<div class="invalid-feedback">' +
                                '<strong>' + val[0] + '</strong>' +
                                '</div>');
                        });
                        return -1;
                    }

                    if (code === SUCCESS) {
                        modal.modal('hide');
                        successAlert(message);
                        location.reload();
                        return -1;
                    }
                })
            })
            // hiển thị thông tin dfdown hàng vừa bấm chỉnh sửa
            modalUpdate.on('show.bs.modal', function (e) {
                const order_id = $(e.relatedTarget).data('id');
                getTours().then(data => {
                    const tours = data.data.data;
                    tours.forEach((tour) => {
                        modalUpdate.find('select[name="tour_id"]').empty();
                        modalUpdate.find('select[name="tour_id"]').append(`<option value="">Chọn Tour</option><option value="${tour.id}">${tour.name}</option>`)
                    })

                    modalUpdate.find('input[name="quatity"]').on('input', function () {

                        const tickets = $(this).val();

                        const selectedTour = tours.filter(tour => tour.id === modalUpdate.find('select[name="tour_id"]').val())

                        if (selectedTour.length) {
                            const totalPrice = parseInt(tickets) * selectedTour.price - (parseInt(tickets) * selectedTour.price * (isValidCode ? selectedTour.discount_percent_customer : 0));
                            console.log(totalPrice);

                            modalUpdate.find('#total-price').text(formatNumber(totalPrice));
                        }
                    })
                })

                getOrder({order_id}).then(res => {
                    const {code, data, message} = res.data;
                    if (code === SUCCESS) {
                        fillFormData(modalUpdate, data, 'input', 'select', 'textarea');
                    }
                })
            })
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