@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- users list start -->
                <section class="app-user-list">
                    <div class="row mt-4">
                        <div class="col-lg-4 col-sm-6">
                            <div class="card card-congratulation-medal">
                                <div class="card-body">
                                    <h5 style="font-family: Montserrat;font-weight: 600; font-size: 16px;color: #5E5873">{{ $tour->name }}</h5>
                                    <p style="font-family: Montserrat;font-weight: 600; font-size: 14px;color: #6E6B7B;" class="card-text font-small-3">{{number_format($tour->price)}}</p>
                                    <h3 class="mb-75 pt-50">
                                        <a href="#"></a>
                                    </h3>
                                    <div class="d-flex">
                                        <div class="d-flex">
                                            <div class="avatar bg-light-primary p-50 ">
                                                <span class="avatar-content ">
                                            <i data-feather='briefcase' class="font-medium-4"></i>
                                                </span>
                                            </div>
                                            <div style="margin-left: 10px;">
                                                <span style=" font-family: Montserrat;font-weight: 600; font-size: 14px;color: #6E6B7B">568</span> <br>
                                                <span style=" font-family: Montserrat;font-weight: 600; font-size: 14px;color: #6E6B7B" class="card-text font-small-3">Tổng doanh thu</span>
                                            </div>


                                        </div>

                                        <div style="margin-left: 50px;" class="d-flex">
                                            <div class="avatar bg-light-primary p-50 ">
                                                <span class="avatar-content ">

                                                    <i data-feather='check' class="font-medium-4"></i>
                                                </span>
                                            </div>
                                            <div style="margin-left: 10px;">
                                                <span style=" font-family: Montserrat;font-weight: 600; font-size: 14px;color: #6E6B7B">1.23k</span> <br>
                                                <span style=" font-family: Montserrat;font-weight: 600; font-size: 14px;color: #6E6B7B" class="card-text font-small-3">Tổng vé đã bán</span>
                                            </div>


                                        </div>
                                    </div>

                                    <div class="d-flex">
                                        <div class="mt-2">
                                            <p style=" font-family: Montserrat;font-weight: 600; font-size: 14px;color: #6E6B7B" class="card-text font-small-4">Chiết khấu CTV:</p>
                                            <p style=" font-family: Montserrat;font-weight: 600; font-size: 14px;color: #6E6B7B" class="card-text font-small-4">Chiết khấu KH:</p>
                                            <p style=" font-family: Montserrat;font-weight: 600; font-size: 14px;color: #6E6B7B" class="card-text font-small-4">Trạng thái:</p>
                                        </div>
                                        <div style="margin-left: 100px;" class="mt-2">
                                            <p style=" font-family: Montserrat;font-weight: 600; font-size: 14px;color: #6E6B7B" class="card-text font-small-4">{{$tour->discount_percent}}%</p>
                                            <p style=" font-family: Montserrat;font-weight: 600; font-size: 14px;color: #6E6B7B" class="card-text font-small-4">{{$tour->discount_percent_customer}}%</p>
                                            <p style=" font-family: Montserrat;font-weight: 600; font-size: 14px;color: #6E6B7B" class="card-text font-small-4">Cho phép bán</p>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary mt-2">Chỉnh sửa</button>
                                    <button style="margin-left: 20px;" type="button"
                                            class="btn btn-outline-danger mt-2">Xóa bỏ tour
                                    </button>

                                    {{--                                    <button   type="button" id="btn-add-modal" data-toggle="modal" data-target="#addScore" class="btn btn-primary me-1 waves-effect waves-float waves-light ">Tạo tour mới</button>--}}
                                    {{--                                    <img src="../../../app-assets/images/illustration/badge.svg" class="congratulation-medal" alt="Medal Pic" />--}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-6">

                            <div style="height: 283px;" class="card">
                                <div class="card-header d-flex-column align-items-start pb-0 mt-2">
                                    {{--                                        <div class="avatar bg-light-primary p-50 m-0">--}}
                                    {{--                                            <div class="avatar-content">--}}
                                    {{--                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users font-medium-5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>--}}
                                    {{--                                            </div>--}}
                                    {{--                                        </div>--}}
                                    <h3 class=" mt-1">Doanh thu của tour</h3>
                                    <i data-feather='settings'></i>

                                </div>
                                <p style="margin-left: 18px;" class="card-text  align-items-start pb-0">2020 - Tổng số vé đã bán</p>
                                <div id="gained-chart" style="min-height: 100px;">

                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 370px; height: 100px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>

                        </div>

                    </div>

                <!-- list and filter start -->
                    <div class="card">
                        <div class="d-flex justify-content-between align-items-center header-actions mx-2 row mt-75">
                            <div class="col-sm-12 col-lg-4 d-flex justify-content-center justify-content-lg-start">
                                <h5>Lịch sử bán tour</h5>
                            </div>
                            <div class="col-sm-12 col-lg-8 ps-xl-75 ps-0">
                                <div class="dt-action-buttons d-flex align-items-center justify-content-center justify-content-lg-end flex-lg-nowrap flex-wrap">

                                    <div class="dt-buttons d-inline-flex mt-40" style="margin-top: -3px">
                                        {{--                                        <button class="dt-button add-new btn btn-primary" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-bs-toggle="modal" data-bs-target="#modals-slide-in">--}}
                                        {{--                                            <span>Thêm cộng tác viên</span>--}}
                                        {{--                                        </button>--}}
                                        <span style="padding: 10px 50px;color: #7367f0"
                                              class="card-text font-small-6"><i data-feather='bell'></i> 06/22/2020 - 06/22/2020 <i
                                                    data-feather='chevron-down'></i></span>
                                    </div>

                                    <div class="me-1">
                                        <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                            Search
                                            <label>
                                                <input type="search" class="form-control" placeholder="search"
                                                       aria-controls="DataTables_Table_0">
                                            </label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="card-datatable table-responsive pt-0">
                            <table class="user-list-table table">
                                <thead class="table-light ">
                                <tr>
                                    <th>
                                        ID

                                        {{--                                        <span class="card-text font-small-6 mt-2">ID</span>--}}
                                        {{--                                        <div class="d-inline-flex flex-column">--}}
                                        {{--                                            <i style="color: gray" data-feather="chevron-up"></i>--}}
                                        {{--                                            <i style="color: black" data-feather="chevron-down"></i>--}}
                                        {{--                                        </div>--}}

                                    </th>
                                    <th>CTV GIỚI THIỆU</th>
                                    <th>SỐ LƯỢNG VÉ</th>
                                    <th>TỔNG TIỀN</th>
                                    <th>CHIẾT KHẤU CTV</th>
                                    <th>CHIẾT KHẤU KH</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <td style="color: #7367f0">#123</td>
                                    <td>
                                        <p>dd/mm/yyy</p>
                                        <p class="card-text font-small-3" style="margin-top: -5px;">hh:mm</p>
                                    </td>
                                    <td>Lý Tuệ Bảo Linh</td>
                                    <td>520.000</td>
                                    <td>
                                        <p>200.000</p>
                                        <p class="card-text font-small-3" style="margin-top: -5px;">10%</p>
                                    </td>
                                    <td>
                                        <p>500.000</p>
                                        <p class="card-text font-small-3" style="margin-top: -5px;">10%</p>
                                    </td>


                                </tr>

                                <tr>
                                    <td style="color: #7367f0">#123</td>
                                    <td>
                                        <p>dd/mm/yyy</p>
                                        <p class="card-text font-small-3" style="margin-top: -5px;">hh:mm</p>
                                    </td>
                                    <td>Lý Tuệ Bảo Linh</td>
                                    <td>520.000</td>
                                    <td>
                                        <p>200.000</p>
                                        <p class="card-text font-small-3" style="margin-top: -5px;">10%</p>
                                    </td>
                                    <td>
                                        <p>500.000</p>
                                        <p class="card-text font-small-3" style="margin-top: -5px;">10%</p>
                                    </td>


                                </tr>
                                <tr>
                                    <td style="color: #7367f0">#123</td>
                                    <td>
                                        <p>dd/mm/yyy</p>
                                        <p class="card-text font-small-3" style="margin-top: -5px;">hh:mm</p>
                                    </td>
                                    <td>Lý Tuệ Bảo Linh</td>
                                    <td>520.000</td>
                                    <td>
                                        <p>200.000</p>
                                        <p class="card-text font-small-3" style="margin-top: -5px;">10%</p>
                                    </td>
                                    <td>
                                        <p>500.000</p>
                                        <p class="card-text font-small-3" style="margin-top: -5px;">10%</p>
                                    </td>


                                </tr>
                                {{--                                @endforeach--}}
                                </tbody>

                            </table>
                            {{--                            {!! $tours->links() !!}--}}
                        </div>


    {{--                        <script>--}}
    {{--                            // $('#show-modal').on('show.bs.modal', function (e){--}}
    {{--                            //--}}
    {{--                            // });--}}
    {{--                            $(document).ready(function () {--}}
    {{--                                $('#btn-add-modal').click(function (e){--}}
    {{--                                    $('#addScore').modal('show');--}}
    {{--                                    // $(window).on('click', function (e){--}}
    {{--                                    //     if($(e.target).is('#addScore')){--}}
    {{--                                    //         modal.hide();--}}
    {{--                                    //     }--}}
    {{--                                    // });--}}
    {{--                                });--}}

    {{--                            });--}}
    {{--                        </script>--}}


@endsection

@push('css')
@endpush

@push('js')
@endpush