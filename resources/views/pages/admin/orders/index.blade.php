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
                                        <a href="#">500.000.000</a>
                                    </h3>
                                    <button type="button" class="btn btn-primary">Thêm đơn hàng mới</button>

                                    {{--                                    <button   type="button" id="btn-add-modal" data-toggle="modal" data-target="#addscore" class="btn btn-primary me-1 waves-effect waves-float waves-light ">tạo tour mới</button>--}}
                                    <img src="../../../app-assets/images/illustration/badge.svg"
                                         class="congratulation-medal" alt="medal pic"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="card">
                                <div style="height: 181px;margin: auto"
                                     class="card-body  align-items-center justify-content-between">

                                    <div class="avatar bg-light-primary p-50 ">
                                        <span class="avatar-content ">
{{--                                            <i data-feather="user" class="font-medium-4"></i>--}}
                                            <i data-feather='shopping-bag' class="font-medium-4"></i>
                                        </span>
                                    </div>

                                    <div>
                                        <h3 class="fw-bolder mb-75">21,459</h3>
                                        <span>tour du lịch</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="card">
                                <div style="height: 181px;margin: auto"
                                     class="card-body  align-items-center justify-content-between">

                                    <div class="avatar bg-light-primary p-50 ">
                                        <span class="avatar-content ">
{{--                                            <i data-feather="user" class="font-medium-4"></i>--}}
                                            <i data-feather='shopping-bag' class="font-medium-4"></i>
                                        </span>
                                    </div>

                                    <div>
                                        <h3 class="fw-bolder mb-75">21,459</h3>
                                        <span>tour du lịch</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="card">
                                <div style="height: 181px;margin: auto"
                                     class="card-body  align-items-center justify-content-between">

                                    <div class="avatar bg-light-primary p-50 ">
                                        <span class="avatar-content ">
{{--                                            <i data-feather="user" class="font-medium-4"></i>--}}
                                            <i data-feather='shopping-bag' class="font-medium-4"></i>
                                        </span>
                                    </div>

                                    <div>
                                        <h3 class="fw-bolder mb-75">21,459</h3>
                                        <span>tour du lịch</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="card">
                            <div style="height: 181px;margin: auto"
                                 class="card-body  align-items-center justify-content-between">

                                <div class="avatar bg-light-primary p-50 ">
                                        <span class="avatar-content ">
{{--                                            <i data-feather="user" class="font-medium-4"></i>--}}
                                            <i data-feather='shopping-bag' class="font-medium-4"></i>
                                        </span>
                                </div>

                                <div>
                                    <h3 class="fw-bolder mb-75">21,459</h3>
                                    <span>tour du lịch</span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- list and filter start -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Danh sách đơn mua</h4>
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
                                @foreach($orders as $order)
                                    <tr>
                                        <td>{{$order->id}}</td>
                                        <td>{{$order->created_at}}</td>
                                        <td>{{@$order->tour->name ?? 'Không có'}}</td>
                                        <td>{{@$order->customer->name ?? 'Không có'}}</td>
                                        <td>{{$order->quantity}}</td>
                                        <td>{{$order->total_price}}</td>
                                        <td>
                                            <i style="width: 20px; height: 20px;color: #0077aa" id="btn-edit-modal"
                                               data-id="{{ $order->id }}" data-bs-toggle="modal"
                                               data-bs-target="#editscore" data-feather='edit-2'></i>
                                            {{--                                        <button type="submit"  id="btn-edit-modal" data-id="{{ $tour->id }}" data-bs-toggle="modal" data-bs-target="#editscore">them</button>--}}

                                            <a href="" style="margin-left: 10px"> <i style="width: 20px; height: 20px;"
                                                                                     data-feather='eye'></i> </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- Modal to add new user starts-->
                        <div class="modal fade text-start" id="inlineForm" tabindex="-1" aria-labelledby="myModalLabel33" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                                        <input type="text" placeholder="Vui lòng nhập" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <label>Thông tin liên hệ: </label>
                                                    <div class="mb-1">
                                                        <input type="password" placeholder="Email hoặc SĐT" class="form-control" />
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
                                                        <input type="number" min="0" name="quantity" placeholder="Vui lòng nhập" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <label>Chọn thời gian đi: </label>
                                                    <div class="mb-1">
                                                        <input type="text" name="time_start" placeholder="Chọn thời gian" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <label>Mã giới thiệu: </label>
                                                    <div class="mb-1">
                                                        <input type="referral_code" placeholder="Vui lòng nhập mã giới thiệu" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 form-group">
                                                    <label>Ghi chú: </label>
                                                    <div class="mb-1">
                                                        <textarea name="note" id="" cols="10" rows="5" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 form-group">
                                                    <label><b>Thành tiền:</b> </label>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer d-flex justify-content-center">
                                            <button type="button" class="btn btn-primary" id="submit-order">Xác nhận và xuất vé</button>
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Hủy bỏ</button>
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
    <style>
        .modal-header {
            background-color : #fff !important;
            padding: 0 1.4rem;
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
                searchPlaceholder: 'Tìm kiếm..'
            },
            // Buttons with Dropdown
            buttons: [
                {
                    text: 'Thêm đơn hàng mới',
                    className: 'add-new btn btn-primary',
                    attr: {
                        'data-bs-toggle': 'modal',
                        'data-bs-target': '#inlineForm'
                    },
                }
            ],
            // For responsive popup
            language: {
                paginate: {
                    // remove previous & next text from pagination
                    previous: '&nbsp;',
                    next: '&nbsp;'
                }
            },
        });
    </script>
@endpush