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
                    <div class="row mb-2" >
                        <div class="col-lg-4 col-sm-6">
                            <div class="card card-congratulation-medal mb-0">
                                <div class="card-body ">
                                    <h5>Số cộng tác viên hiện tại</h5>
                                    <p class="card-text font-small-3">Tổng số ctv đã tạo</p>
                                    <h3 class="mb-75 pt-50">
                                        <a href="#">324 ctv</a>
                                    </h3>

                                    <button type="button" class="btn btn-primary" href="">CTV</button>
                                    <img src="../../../app-assets/images/illustration/badge.svg" class="congratulation-medal" alt="Medal Pic" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6" >
                            <div class="card  mb-0 h-100">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <div class="avatar bg-light-danger p-50 mb-1">
                                        <div class="avatar-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag font-medium-5"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                        </div>
                                    </div>
                                    <h3 class="fw-bolder">4124</h3>
                                    <p class="card-text">Tour du lịch</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="card  mb-0 h-100">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <div class="avatar bg-light-warning p-50 mb-1">
                                        <div class="avatar-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square font-medium-5"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                                        </div>
                                    </div>
                                    <h3 class="fw-bolder">421</h3>
                                    <p class="card-text">Cộng tác viên</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="card mb-0 h-100">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <div class="avatar bg-light-info p-50 mb-1">
                                        <div class="avatar-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye font-medium-5"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                        </div>
                                    </div>
                                    <h3 class="fw-bolder">500.000</h3>
                                    <p class="card-text">Vé đã bán</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="card mb-0 h-100">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <div class="avatar bg-light-primary p-50 mb-1">
                                        <div class="avatar-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart font-medium-5"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                        </div>
                                    </div>
                                    <h3 class="fw-bolder">500.000.000</h3>
                                    <p class="card-text">Tổng doanh thu</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- list and filter start -->
                    @if(Session::has('success'))
                        <script>
                            alert("{{ Session::get('success')}} ");
                        </script>
                    @endif
                    <div class="card">
                        <div class="d-flex justify-content-between align-items-center header-actions mx-2 row mt-75">
                            <div class="col-sm-12 col-lg-4 d-flex justify-content-center justify-content-lg-start">
                                <h5>Danh sách cộng tác viên</h5>
                            </div>
                            <div class="col-sm-12 col-lg-8 ps-xl-75 ps-0">
                                <div class="dt-action-buttons d-flex align-items-center justify-content-center justify-content-lg-end flex-lg-nowrap flex-wrap">
                                    <div class="me-1 mb-2">
                                        <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                            Search
                                            <label>
                                                <input type="search" class="form-control" placeholder="Search" aria-controls="DataTables_Table_0">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="dt-buttons d-inline-flex mt-40 mb-2" style="margin-top: -3px">
                                        <button class="dt-button add-new btn btn-primary" tabindex="0" type="button" data-bs-toggle="modal" data-bs-target="#addScore">
                                            <span>Thêm cộng tác viên</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-datatable table-responsive pt-0">
                            <table class="user-list-table table">
                                <thead class="table-light">
                                    <tr>
                                        <th>TÊN CTV
                                            <div class="d-inline-flex flex-column">
                                                <i style="color: gray" data-feather="chevron-up"></i>
                                                <i style="color: gray" data-feather="chevron-down"></i>
                                            </div> </th>
                                        <th>SĐT LIÊN HỆ
                                            <div class="d-inline-flex flex-column">
                                                <i style="color: gray" data-feather="chevron-up"></i>
                                                <i style="color: gray" data-feather="chevron-down"></i>
                                            </div></th>
                                        <th>NGHỀ NGHIỆP
                                            <div class="d-inline-flex flex-column">
                                                <i style="color: gray" data-feather="chevron-up"></i>
                                                <i style="color: gray" data-feather="chevron-down"></i>
                                            </div></th>
                                        <th>TỔNG QUAN HOA HỒNG
                                            <div class="d-inline-flex flex-column">
                                                <i style="color: gray" data-feather="chevron-up"></i>
                                                <i style="color: gray" data-feather="chevron-down"></i>
                                            </div></th>
                                        <th>SỐ TIỀN CHƯA THANH TOÁN
                                            <div class="d-inline-flex flex-column">
                                                <i style="color: gray" data-feather="chevron-up"></i>
                                                <i style="color: gray" data-feather="chevron-down"></i>
                                            </div></th>
                                        <th>HOẠT ĐỘNG
                                            <div class="d-inline-flex flex-column">
                                                <i style="color: gray" data-feather="chevron-up"></i>
                                                <i style="color: gray" data-feather="chevron-down"></i>
                                            </div></th>
                                    </tr>
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
                                </thead>
                            </table>

                        </div>
{{--                        <div class="d-flex justify-content-between mx-2 mb-1 align-items-center">--}}
{{--                            <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div>--}}
{{--                            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">--}}
{{--                                <ul class="pagination">--}}
{{--                                    <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous">--}}
{{--                                        <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">&nbsp;</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="paginate_button page-item next disabled" id="DataTables_Table_0_next">--}}
{{--                                        <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">&nbsp;</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                                {!! $partners->links() !!}--}}
{{--                            </div>--}}

{{--                        </div>--}}
                        @include('pages.partners.create')
                        @include('pages.partners.edit')
                    </div>
                    <!-- list and filter end -->
                </section>
                <!-- users list ends -->

            </div>
        </div>
    </div>
    <script src="../../app-assets/vendors/js/jquery/jquery.min.js"></script>
    {{--<script>--}}
    {{--    $("#payMethod").change(function (){--}}
    {{--        const val=$(this).val();--}}
    {{--        if(val==1){--}}
    {{--            $("#bankInfo").show();--}}
    {{--        } else {--}}
    {{--            $("#bankInfo").hide();--}}
    {{--        }--}}
    {{--    });--}}
    {{--</script>--}}
    <script>
        $(document).ready(function () {
            // click hien thi form
            $('#changePassword').click(function () {
                $('#formShowInputPassword').attr('style', 'display:block');
            });
            // click an form
            $('#changePassword').click(function () {
                $('#formShowInputPassword').removeAttr('style');
            });
        });

    </script>
    @if($errors->any())

            <script>
                    $(document).ready(function (){
                        $('#addScore').modal('show');
                    });
            </script>

    @endif

@endsection



