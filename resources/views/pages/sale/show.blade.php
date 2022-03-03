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

                <div class="row">
                    <div class="col-xl-8 col-md-6 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="d-flex justify-content-between flex-column col-xl-5 col-21">
                                        <div class="d-flex flex-column">
                                            <h3>{{$order->tour->name}}</h3>
                                            <div class="d-flex align-items-center mr-2">
                                                <div class="ml-1 d-flex justify-content-between">
                                                    <h5 class="mb-0 mr-2">
                                                        Mã đơn hàng
                                                    </h5>
                                                    <p>{{$order->id}}</p></div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="ml-1 d-flex justify-content-between">
                                                    <h5 class="mb-0 mr-2">
                                                        Đơn giá
                                                    </h5> <p>{{$order->tour->price}} VNĐ</p></div>
                                            </div>

                                        </div>
                                        <div class="d-flex align-items-center">
                                            <button class="btn btn-primary mr-2" data-bs-toggle="modal" data-bs-target="#order-modal-update" data-id="{{$order->id}}">Chỉnh sửa</button>
                                            <button class="delete-button btn btn-outline-danger">Xóa</button>
                                        </div>
                                    </div>
                                    <div class="col-xl-7 col-12">
                                        <table class="mt-2 mt-xl-0 w-100">
                                            <tr>
                                                <th>
                                                    <i data-feather='align-center'></i>
                                                    <span class="font-weight-bold">Ngày bán vé</span></th>
                                                </th>
                                                <td class="pb-50">
                                                    {{\Carbon\Carbon::parse($order->created_at)->format('d-m-Y')}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="pb-50">
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8 1.375H9.085C9.94 1.375 10.625 2.06499 10.625 2.91499V3.95"
                                                              stroke="#5E5873" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                        <path d="M1.375 3.95V2.91499C1.375 2.05999 2.065 1.375 2.915 1.375H3.975"
                                                              stroke="#5E5873" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                        <path d="M8 10.625H9.085C9.94 10.625 10.625 9.93505 10.625 9.08505V8.05005"
                                                              stroke="#5E5873" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                        <path d="M1.375 8.05005V9.08505C1.375 9.94005 2.065 10.625 2.915 10.625H3.975"
                                                              stroke="#5E5873" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                        <path d="M8.93499 8.28999C8.08999 7.86999 7.07999 7.625 5.99999 7.625C4.88499 7.625 3.84999 7.885 2.98999 8.33"
                                                              fill="#5E5873"/>
                                                        <path d="M8.93499 8.28999C8.08999 7.86999 7.07999 7.625 5.99999 7.625C4.88499 7.625 3.84999 7.885 2.98999 8.33"
                                                              stroke="#5E5873" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                        <path d="M6.00003 5.86005C6.81189 5.86005 7.47003 5.2019 7.47003 4.39005C7.47003 3.57819 6.81189 2.92004 6.00003 2.92004C5.18817 2.92004 4.53003 3.57819 4.53003 4.39005C4.53003 5.2019 5.18817 5.86005 6.00003 5.86005Z"
                                                              fill="#5E5873" stroke="#5E5873" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                    </svg>
                                                    <span class="font-weight-bold">Khách hàng</span></th>
                                                <td class="pb-50 text-capitalize">
                                                    {{@$order->customer->name . " - " . @$order->customer->customer_info}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="pb-50">
                                                    <i data-feather='compass'></i>
                                                    <span class="font-weight-bold">Số vé</span></th>
                                                <td class="pb-50 text-capitalize">
                                                    {{$order->quatity}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="pb-50">
                                                    <i data-feather='clock'></i>
                                                    <span class="font-weight-bold">Ngày khởi hành</span></th>
                                                <td class="pb-50">
                                                    {{$order->time_start_travel}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="pb-50">
                                                    <i data-feather='map-pin'></i>
                                                    <span class="font-weight-bold">CTV giới thiệu</span></th>
                                                <td class="pb-50 text-capitalize">
                                                    {{$order->partner->name}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="pb-50">
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5.7851 2.995C6.23245 2.995 6.59509 2.63235 6.59509 2.185C6.59509 1.73765 6.23245 1.375 5.7851 1.375C5.33774 1.375 4.9751 1.73765 4.9751 2.185C4.9751 2.63235 5.33774 2.995 5.7851 2.995Z"
                                                              stroke="#5E5873" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                        <path d="M2.07008 6.03995C2.28008 5.69495 2.56507 5.39995 2.92507 5.17995C3.31007 4.94495 3.75007 4.81495 4.20007 4.74495C4.93007 4.63995 5.66506 4.66495 6.40006 4.69495C6.43506 4.69495 6.46507 4.69994 6.50007 4.69994C6.69007 4.72494 6.84507 4.68495 7.01507 4.56995C7.51507 4.23995 8.08508 4.11995 8.69508 4.14995C8.83008 4.15495 8.91507 4.19994 8.95507 4.26994C9.00007 4.35994 8.94507 4.46995 8.92007 4.52495C8.82007 4.73495 8.70007 5.02495 8.55007 5.41995C8.62507 5.52495 8.73007 5.66494 8.86507 5.82494C8.91507 5.88494 9.11007 6.11494 9.28007 6.26994C9.44007 6.41494 9.76007 6.66495 10.3151 6.84495C10.3101 7.32495 10.3051 7.79995 10.3001 8.27995C10.1751 8.30995 9.99007 8.36995 9.79507 8.48995C9.40507 8.73495 9.33007 9.01995 9.03007 9.27995C8.86007 9.42995 8.57507 9.60495 8.11007 9.67495C8.02507 9.76995 7.91507 9.90995 7.82507 10.0949C7.73007 10.2999 7.69007 10.4799 7.67007 10.6099C7.23007 10.6099 6.79506 10.6099 6.35506 10.6099C6.31506 10.5399 6.27507 10.4649 6.23507 10.3849C6.20007 10.3149 6.16507 10.245 6.14007 10.175C5.63007 10.175 5.12007 10.175 4.61007 10.175C4.58007 10.23 4.55007 10.29 4.51507 10.355C4.47007 10.445 4.43507 10.5349 4.40507 10.6149C3.96507 10.6099 3.53006 10.61 3.09006 10.605C3.06506 10.57 3.02507 10.515 2.99007 10.44C2.88507 10.23 2.90506 10.0649 2.85506 9.93495C2.78006 9.74995 2.69507 9.56495 2.56507 9.40995C2.08507 8.82995 1.69006 8.15995 1.68006 7.41495C1.67506 6.94995 1.81508 6.45995 2.07008 6.03995Z"
                                                              stroke="#5E5873" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                        <path d="M4.96509 6.245H6.61009" stroke="#5E5873"
                                                              stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M7.90007 6.51498C7.90007 6.45677 7.94616 6.41998 7.99008 6.41998C8.03398 6.41998 8.08008 6.45674 8.08008 6.51498C8.08008 6.57323 8.03398 6.60999 7.99008 6.60999C7.94616 6.60999 7.90007 6.5732 7.90007 6.51498Z"
                                                              fill="black" stroke="#5E5873"/>
                                                    </svg>
                                                    <span class="font-weight-bold">Chiết khấu KH</span></th>
                                                <td class="pb-50 text-capitalize">
                                                    {{$order->tour->discount_percent_customer}}%
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="pb-50">

                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_90_15530)">
                                                            <path d="M3.49999 3C3.49999 1.61929 4.61928 0.5 5.99999 0.5C7.3807 0.5 8.49999 1.61929 8.49999 3V3.00585M3.49999 3C3.8139 2.99404 4.16635 3 4.58016 3H7.41982C7.831 3 8.18752 3 8.49999 3.00585M3.49999 3C2.64056 3.01632 2.10911 3.0833 1.69598 3.31138C1.21543 3.57668 0.835976 3.99252 0.615517 4.4942M0.615517 4.4942L2.40379 6.28248C4.07046 7.94914 4.90379 8.78248 5.93932 8.78248C6.97486 8.78248 7.80819 7.94914 9.47486 6.28247L11.2912 4.46613C11.309 4.44832 11.3287 4.43245 11.3498 4.4188V4.4188M0.615517 4.4942C0.608727 4.50965 0.602088 4.52519 0.595602 4.5408C0.34841 5.13576 0.433817 5.90441 0.604629 7.44173C0.744439 8.70001 0.814343 9.32915 1.10459 9.80394C1.36027 10.2222 1.73326 10.556 2.17718 10.764C2.68112 11 3.31413 11 4.58016 11H7.41982C8.68585 11 9.31886 11 9.8228 10.764C10.2667 10.556 10.6397 10.2222 10.8954 9.80394C11.1856 9.32915 11.2555 8.70001 11.3954 7.44173C11.5662 5.90441 11.6516 5.13576 11.4044 4.5408C11.3873 4.49957 11.3691 4.45889 11.3498 4.4188M8.49999 3.00585C9.36298 3.022 9.88992 3.08277 10.304 3.31138C10.7603 3.56327 11.1254 3.95087 11.3498 4.4188"
                                                                  stroke="#5E5873"/>
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_90_15530">
                                                                <rect width="12" height="12" fill="white"/>
                                                            </clipPath>
                                                        </defs>
                                                    </svg>

                                                    <span class="font-weight-bold">Chiết khấu CTV</span></th>
                                                <td class="pb-50 text-capitalize">
                                                    {{$order->tour->discount_percent}}%
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="card card-congratulation-medal" style="max-height: 238px !important; height: 100%">
                            <div class="card-body">
                                <h4 class="card-text">Doanh thu</h4>
                                <p class="card-text">Số tiền này bao gồm hoa hồng cho CTV</p>
                                <h1 class="mb-75 mt-2 pt-50 fs-50 text-center">
                                    <a href="#">{{$order->total_price}} VNĐ</a>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
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
@endsection

@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <style>
        .mr-2 {
            margin-right: 1rem;
        }
        .fs-50 {
            font-size: 50px;
        }
    </style>
@endpush

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="/app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
    <script>
        const modalUpdate = $('#order-modal-update');
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
    </script>
@endpush