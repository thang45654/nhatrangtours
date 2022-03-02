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
                                        <td>{{$order->total_price }}</td>
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
