@extends('layouts.app')

@section('content')

{{--    <div class="row match-height">--}}
{{--        <!-- Medal Card -->--}}
{{--        <div class="col-xl-4 col-md-6 col-12">--}}
{{--            <div class="card card-congratulation-medal">--}}
{{--                <div class="card-body">--}}
{{--                    <h5> Doanh thu trogn tuần này🎉 </h5>--}}
{{--                    <p class="card-text font-small-3">Số tiền bán vé trong tuần</p>--}}
{{--                    <h3 class="mb-75 mt-2 pt-50">--}}
{{--                        <a href="#">500.000.000</a>--}}
{{--                    </h3>--}}
{{--                    <button type="button" class="btn btn-primary">Tạo đơn hàng mới </button>--}}
{{--                    <img src="../../../app-assets/images/illustration/badge.svg" class="congratulation-medal"--}}
{{--                         alt="Medal Pic"/>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!--/ Medal Card -->--}}

        <!-- Statistics Card -->
{{--        <div class="col-xl-8 col-md-6 col-12">--}}
{{--            <div class="card card-statistics">--}}
{{--                <div class="card-header">--}}
{{--                    <h4 class="card-title">Thống kê trong tháng</h4>--}}
{{--                    <div class="d-flex align-items-center">--}}
{{--                        <p class="card-text font-small-2 me-25 mb-0">Tháng 4/2022</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card-body statistics-body">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-xl-3 col-sm-6 col-12">--}}
{{--                            <div class="d-flex flex-row">--}}
{{--                                <div class="avatar bg-light-success me-2">--}}
{{--                                    <div class="avatar-content">--}}
{{--                                        <i data-feather="dollar-sign" class="avatar-icon"></i>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="my-auto">--}}
{{--                                    <h4 class="fw-bolder mb-0">$9745</h4>--}}
{{--                                    <p class="card-text font-small-3 mb-0">Doanh thu</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">--}}
{{--                            <div class="d-flex flex-row">--}}
{{--                                <div class="avatar bg-light-primary me-2">--}}
{{--                                    <div class="avatar-content">--}}
{{--                                        <i data-feather="trending-up" class="avatar-icon"></i>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="my-auto">--}}
{{--                                    <h4 class="fw-bolder mb-0">230k</h4>--}}
{{--                                    <p class="card-text font-small-3 mb-0">Tổng số vé</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">--}}
{{--                            <div class="d-flex flex-row">--}}
{{--                                <div class="avatar bg-light-danger me-2">--}}
{{--                                    <div class="avatar-content">--}}
{{--                                        <i data-feather="box" class="avatar-icon"></i>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="my-auto">--}}
{{--                                    <h4 class="fw-bolder mb-0">1.423k</h4>--}}
{{--                                    <p class="card-text font-small-3 mb-0">Tổng số vé</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">--}}
{{--                            <div class="d-flex flex-row">--}}
{{--                                <div class="avatar bg-light-info me-2">--}}
{{--                                    <div class="avatar-content">--}}
{{--                                        <i data-feather="user" class="avatar-icon"></i>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="my-auto">--}}
{{--                                    <h4 class="fw-bolder mb-0">8.549k</h4>--}}
{{--                                    <p class="card-text font-small-3 mb-0">Cộng tác viên</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!--/ Statistics Card -->
{{--    </div>--}}
{{--    <div class="card">--}}
{{--        <div class="d-flex justify-content-between align-items-center header-actions mx-2 row mt-75">--}}
{{--            <div class="col-sm-12 col-lg-4 d-flex justify-content-center justify-content-lg-start">--}}
{{--                <h5>Danh sách đơn mua tour</h5>--}}
{{--            </div>--}}
{{--            <div class="col-sm-12 col-lg-8 ps-xl-75 ps-0">--}}
{{--                <div class="dt-action-buttons d-flex align-items-center justify-content-center justify-content-lg-end flex-lg-nowrap flex-wrap">--}}
{{--                    <div class="me-1 mb-2">--}}
{{--                        <div id="DataTables_Table_0_filter" class="dataTables_filter">--}}
{{--                            Search--}}
{{--                            <label>--}}
{{--                                <input type="search" class="form-control" placeholder="Search"--}}
{{--                                       aria-controls="DataTables_Table_0">--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="dt-buttons d-inline-flex mt-40 mb-2" style="margin-top: -3px">--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="card-datatable table-responsive pt-0">--}}
{{--            <table class="user-list-table table">--}}
{{--                <thead class="table-light">--}}
{{--                <tr>--}}
{{--                    <th>ID--}}
{{--                        <div class="d-inline-flex flex-column">--}}
{{--                            <i style="color: gray" data-feather="chevron-up"></i>--}}
{{--                            <i style="color: gray" data-feather="chevron-down"></i>--}}
{{--                        </div>--}}
{{--                    </th>--}}
{{--                    <th>THỜI GIAN--}}
{{--                        <div class="d-inline-flex flex-column">--}}
{{--                            <i style="color: gray" data-feather="chevron-up"></i>--}}
{{--                            <i style="color: gray" data-feather="chevron-down"></i>--}}
{{--                        </div>--}}
{{--                    </th>--}}
{{--                    <th>TÊN TOUR--}}
{{--                        <div class="d-inline-flex flex-column">--}}
{{--                            <i style="color: gray" data-feather="chevron-up"></i>--}}
{{--                            <i style="color: gray" data-feather="chevron-down"></i>--}}
{{--                        </div>--}}
{{--                    </th>--}}
{{--                    <th>KHÁCH HÀNG--}}
{{--                        <div class="d-inline-flex flex-column">--}}
{{--                            <i style="color: gray" data-feather="chevron-up"></i>--}}
{{--                            <i style="color: gray" data-feather="chevron-down"></i>--}}
{{--                        </div>--}}
{{--                    </th>--}}
{{--                    <th>SỐ LƯỢNG VÉ--}}
{{--                        <div class="d-inline-flex flex-column">--}}
{{--                            <i style="color: gray" data-feather="chevron-up"></i>--}}
{{--                            <i style="color: gray" data-feather="chevron-down"></i>--}}
{{--                        </div>--}}
{{--                    </th>--}}
{{--                    <th>TỔNG TIỀN--}}
{{--                        <div class="d-inline-flex flex-column">--}}
{{--                            <i style="color: gray" data-feather="chevron-up"></i>--}}
{{--                            <i style="color: gray" data-feather="chevron-down"></i>--}}
{{--                        </div>--}}
{{--                    </th>--}}
{{--                    <th>CTV GIỚI THIỆU--}}
{{--                        <div class="d-inline-flex flex-column">--}}
{{--                            <i style="color: gray" data-feather="chevron-up"></i>--}}
{{--                            <i style="color: gray" data-feather="chevron-down"></i>--}}
{{--                        </div>--}}
{{--                    </th>--}}
{{--                </tr>--}}
{{--                <tbody>--}}

{{--                <tr>--}}
{{--                    <td style="color: #7367F0">#91967</td>--}}
{{--                    <td></td>--}}
{{--                    <td></td>--}}
{{--                    <td></td>--}}
{{--                    <td></td>--}}
{{--                    <td>--}}

{{--                    </td>--}}
{{--                </tr>--}}

{{--                </tbody>--}}
{{--                </thead>--}}
{{--            </table>--}}

{{--        </div>--}}

{{--        --}}{{--                        @include('pages.partners.create')--}}
{{--        --}}{{--                        @include('pages.partners.edit')--}}
{{--    </div>--}}

<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- users list start -->
            <section id="dashboard-ecommerce">
                <div class="row match-height">
                    <!-- Medal Card -->
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="card card-congratulation-medal">
                            <div class="card-body">
                                <h5> Doanh thu trogn tuần này🎉 </h5>
                                <p class="card-text font-small-3">Số tiền bán vé trong tuần</p>
                                <h3 class="mb-75 mt-2 pt-50">
                                    <a href="#">500.000.000</a>
                                </h3>
                                <button type="button" class="btn btn-primary">Tạo đơn hàng mới </button>
                                <img src="../../../app-assets/images/illustration/badge.svg" class="congratulation-medal"
                                     alt="Medal Pic"/>
                            </div>
                        </div>
                    </div>
                    <!--/ Medal Card -->

                    <!-- Statistics Card -->
                    <div class="col-xl-8 col-md-6 col-12">
                        <div class="card card-statistics">
                            <div class="card-header">
                                <h4 class="card-title">Thống kê trong tháng</h4>
                                <div class="d-flex align-items-center">
                                    <p class="card-text font-small-2 me-25 mb-0">Tháng 4/2022</p>
                                </div>
                            </div>
                            <div class="card-body statistics-body">
                                <div class="row">
                                    <div class="col-xl-3 col-sm-6 col-12">
                                        <div class="d-flex flex-row">
                                            <div class="avatar bg-light-success me-2">
                                                <div class="avatar-content">
                                                    <i data-feather="dollar-sign" class="avatar-icon"></i>
                                                </div>
                                            </div>
                                            <div class="my-auto">
                                                <h4 class="fw-bolder mb-0">$9745</h4>
                                                <p class="card-text font-small-3 mb-0">Doanh thu</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                        <div class="d-flex flex-row">
                                            <div class="avatar bg-light-primary me-2">
                                                <div class="avatar-content">
                                                    <i data-feather="trending-up" class="avatar-icon"></i>
                                                </div>
                                            </div>
                                            <div class="my-auto">
                                                <h4 class="fw-bolder mb-0">230k</h4>
                                                <p class="card-text font-small-3 mb-0">Tổng số vé</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                                        <div class="d-flex flex-row">
                                            <div class="avatar bg-light-danger me-2">
                                                <div class="avatar-content">
                                                    <i data-feather="box" class="avatar-icon"></i>
                                                </div>
                                            </div>
                                            <div class="my-auto">
                                                <h4 class="fw-bolder mb-0">1.423k</h4>
                                                <p class="card-text font-small-3 mb-0">Tổng số vé</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                        <div class="d-flex flex-row">
                                            <div class="avatar bg-light-info me-2">
                                                <div class="avatar-content">
                                                    <i data-feather="user" class="avatar-icon"></i>
                                                </div>
                                            </div>
                                            <div class="my-auto">
                                                <h4 class="fw-bolder mb-0">8.549k</h4>
                                                <p class="card-text font-small-3 mb-0">Cộng tác viên</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Statistics Card -->
                </div>

                <div class="card-datatable table-responsive pt-0">
                    <table class="user-list-table table">
                        <thead class="table-light">
                        <tr>
                            <th>ID
                                <div class="d-inline-flex flex-column">
                                    <i style="color: gray" data-feather="chevron-up"></i>
                                    <i style="color: gray" data-feather="chevron-down"></i>
                                </div>
                            </th>
                            <th>THỜI GIAN
                                <div class="d-inline-flex flex-column">
                                    <i style="color: gray" data-feather="chevron-up"></i>
                                    <i style="color: gray" data-feather="chevron-down"></i>
                                </div>
                            </th>
                            <th>TÊN TOUR
                                <div class="d-inline-flex flex-column">
                                    <i style="color: gray" data-feather="chevron-up"></i>
                                    <i style="color: gray" data-feather="chevron-down"></i>
                                </div>
                            </th>
                            <th>KHÁCH HÀNG
                                <div class="d-inline-flex flex-column">
                                    <i style="color: gray" data-feather="chevron-up"></i>
                                    <i style="color: gray" data-feather="chevron-down"></i>
                                </div>
                            </th>
                            <th>SỐ LƯỢNG VÉ
                                <div class="d-inline-flex flex-column">
                                    <i style="color: gray" data-feather="chevron-up"></i>
                                    <i style="color: gray" data-feather="chevron-down"></i>
                                </div>
                            </th>
                            <th>TỔNG TIỀN
                                <div class="d-inline-flex flex-column">
                                    <i style="color: gray" data-feather="chevron-up"></i>
                                    <i style="color: gray" data-feather="chevron-down"></i>
                                </div>
                            </th>
                            <th>CTV GIỚI THIỆU
                                <div class="d-inline-flex flex-column">
                                    <i style="color: gray" data-feather="chevron-up"></i>
                                    <i style="color: gray" data-feather="chevron-down"></i>
                                </div>
                            </th>
                        </tr>
                        <tbody>

                        <tr>
                            <td style="color: #7367F0">#91967</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>

                            </td>
                        </tr>

                        </tbody>
                        </thead>
                    </table>

                </div>


            </section>
            <!-- users list ends -->
        </div>
    </div>
</div>
@endsection

