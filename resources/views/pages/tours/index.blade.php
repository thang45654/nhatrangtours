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
                        <div class="col-lg-4 col-sm-6">
                            <div class="card card-congratulation-medal">
                                <div class="card-body">
                                    <h5>số cộng tác viên hiện tại</h5>
                                    <p class="card-text font-small-3">tổng số ctv đã tạo</p>
                                    <h3 class="mb-75 pt-50">
                                        <a href="#">324 ctv</a>
                                    </h3>
                                     <button type="button" class="btn btn-primary">tạo tour mới</button>

{{--                                    <button   type="button" id="btn-add-modal" data-toggle="modal" data-target="#addscore" class="btn btn-primary me-1 waves-effect waves-float waves-light ">tạo tour mới</button>--}}
                                    <img src="../../../app-assets/images/illustration/badge.svg" class="congratulation-medal" alt="medal pic" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="card">
                                <div style="height: 173px;margin: auto" class="card-body  align-items-center justify-content-between">

                                    <div class="avatar bg-light-primary p-50 " >
                                        <span class="avatar-content " >
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
                                <div  style="height: 173px;margin: auto" class="card-body  align-items-center justify-content-between">

                                    <div class="avatar bg-light-danger p-50">
                                        <span class="avatar-content">
{{--                                            <i data-feather="user-plus" class="font-medium-4"></i>--}}

                                            <i data-feather='message-square' class="font-medium-4"></i>
                                        </span>
                                    </div>

                                    <div>
                                        <h3 class="fw-bolder mb-75" >4,567</h3>
                                        <span>cộng tác viên</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="card">
                                <div style="height: 173px;margin: auto" class="card-body  align-items-center justify-content-between">

                                    <div class="avatar bg-light-success p-50">
                                        <span class="avatar-content">
                                           <i data-feather='eye' class="font-medium-4"></i>

                                        </span>
                                    </div>

                                    <div>
                                        <h3 class="fw-bolder mb-75">19,860</h3>
                                        <span>vé đã bán</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="card">
                                <div style="height: 173px;margin: auto" class="card-body  align-items-center justify-content-between">

                                    <div class="avatar bg-light-warning p-50">
                                        <span class="avatar-content">
                                            <i data-feather='heart' class="font-medium-4"></i>
                                        </span>
                                    </div>

                                    <div>
                                        <h3 class="fw-bolder mb-75">237</h3>
                                        <span>tổng doanh thu</span>
                                    </div>
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
                        <div class="card-body border-bottom" style="display: flex">
                            <h4 style=" font-size: 16px; font-family: montserrat; color: #5e5873;font-weight: 600">danh sách tour</h4>

                            <div class="me-1 mt-1" style="margin-left: 850px;">
                                <div id="datatables_table_0_filter" class="datatables_filter">
                                    search
                                    <label>
                                        <input  type="search" class="form-control" placeholder="search" aria-controls="datatables_table_0">
                                    </label>
                                </div>
                            </div>

                            <button style="height: 35px;"  type="button" id="btn-add-modal" data-bs-toggle="modal" data-bs-target="#addscore" class="btn btn-primary me-1 waves-effect waves-float waves-light mt-1 ">thêm tour mới</button>


                        </div>

                        <div class="card-datatable table-responsive pt-0">
                            <table class="user-list-table table">
                                <thead class="table-light">
                                <tr>
                                    <th style=" font-size: 12px; font-family: montserrat; color: #5e5873">id</th>
                                    <th style="font-size: 12px; font-family: montserrat;color: #5e5873">tên tour</th>
                                    <th style="font-size: 12px; font-family: montserrat;color: #5e5873">đơn giá bán</th>
                                    <th style="font-size: 12px; font-family: montserrat;color: #5e5873">số lượng vé đã bán</th>
                                    <th style="font-size: 12px; font-family: montserrat;color: #5e5873">trạng thái</th>
                                    <th style="font-size: 12px; font-family: montserrat;color: #5e5873">hành động</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($tours as $tour)
                                    <tr>
                                        <td>{{ $tour->id }}</td>
                                        <td>{{ $tour->name }}</td>
                                        <td>{{ number_format($tour->price) }}</td>
                                        <td></td>
                                        <td><label class="btn {{ $tour->getstatus($tour->status)['class'] }}">{{ $tour->getstatus($tour->status)['name'] }}</label></td>
                                        <td>
                                                <i style="width: 20px; height: 20px;color: #0077aa" id="btn-edit-modal" data-id="{{ $tour->id }}" data-bs-toggle="modal" data-bs-target="#editscore" data-feather='edit-2' ></i>
{{--                                        <button type="submit"  id="btn-edit-modal" data-id="{{ $tour->id }}" data-bs-toggle="modal" data-bs-target="#editscore">them</button>--}}

                                            <a href="" style="margin-left: 10px" > <i style="width: 20px; height: 20px;" data-feather='eye'></i> </a>
                                            <a href="{{ route('admin.tours.delete',$tour->id) }}" style="margin-left: 10px" > <i style="width: 20px; height: 20px;" data-feather='trash-2'></i> </a>
                                        </td>


                                    </tr>
                                @endforeach
                                </tbody>

                            </table>
{{--                            {!! $tours->links() !!}--}}
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-12  modal fade" style="margin:50px auto;" id="editscore" tabindex="-5">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="card">
                    <a style="color: lightgrey" href="#" id="closemodal" >
                        <i  data-feather='x-square' data-dismiss="modal" style="width: 30px; height: 30px; margin-left: 469px; margin-top: -4px; "></i>
                    </a>
                    <div class="mt-3" style="margin:auto; ">
                        <h1>sửa tour du lịch mới</h1>
                        <p style="margin-left: 50px">add card for futcher billing</p>
                    </div>

                    <div class="card-body">
                        <form class="form form-vertical" action="" method="post" id="form-submit">
                            @csrf

                            <div class="row">
                                <div style="margin: auto" class="col-10">
                                    <div class="mb-1">
                                        <label style="font-size: 14px;" class="form-label " for="first-name-vertical">tên
                                            tour du lịch</label>
                                        <input type="text" id="first-name-vertical"
                                               class="form-control {{ $errors->first('name')? 'has-error':'' }}" name="name"
                                               placeholder="vui lòng nhập">

                                        @if( $errors->first('name'))
                                            <span class="text-danger">{{$errors-> first('name')}}</span>
                                        @endif
                                    </div>

                                </div>
                                <div style="margin: auto" class="col-10">
                                    <div class="mb-1">
                                        <label style="font-size: 14px;" class="form-label" for="email-id-vertical">đơn
                                            giá</label>
                                        <input type="number" id="email-id-vertical"
                                               class="form-control  {{ $errors->first('price')? 'has-error':'' }}"
                                               name="price" placeholder="vui lòng nhập">
                                        @if( $errors->first('price'))
                                            <span class="text-danger">{{$errors-> first('price')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-12" style="display: flex;">
                                    <div class="mb-1" style="margin-left:40px;width: 190px;height: 34px; " >
                                        <label style="font-size: 14px;" class="form-label" for="password-vertical">chiết
                                            khấu ctv (%)</label>
                                        <input type="number" id="password-vertical" class="form-control"
                                               name="discount_percent" placeholder="vui lòng nhập">
                                    </div>

                                    <div class="mb-1"  style="margin-left: 14px; width: 190px;height: 34px;">
                                        <label style="font-size: 14px;" class="form-label" for="password-vertical">chiết
                                            khấu khách hàng (%)</label>
                                        <input type="number" id="password-vertical" class="form-control"
                                               name="discount_percent_customer" placeholder="vui lòng nhập">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-1">
                                        {{--                                    <div class="form-check">--}}
                                        {{--                                        <input type="checkbox" class="form-check-input" name="status" value="1" id="customcheck3">--}}
                                        {{--                                        <label class="form-check-label" for="customcheck3">cho phép bán tour</label>--}}
                                        {{--                                    </div>--}}

                                        {{--                                    <div class="form-check form-check-primary form-switch">--}}
                                        {{--                                        <input type="checkbox" checked="" class="form-check-input" name="status"--}}
                                        {{--                                               value="1" id="customswitch3">--}}
                                        {{--                                        <label class="form-check-label" for="customcheck3">cho phép bán tour</label>--}}
                                        {{--                                    </div>--}}

                                        <div style="margin-left: 40px;" class="form-check form-switch form-check-primary mt-4">
                                            <input type="checkbox" class="form-check-input" id="customswitch10" checked="" name="status" value="1">
                                            <label class="form-check-label" for="customswitch10">
                                                <span class="switch-icon-left"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 24 24" fill="none" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
                                                <span class="switch-icon-right"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 24 24" fill="none" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span>
                                                <p style="margin-top: 5px;"> cho phép bán tour </p>
                                            </label>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-12" style="margin-left: 170px;">
                                    <button type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light" id="updateform-modal">
                                        submit
                                    </button>
                                    {{--                                <button type="reset" class="btn btn-outline-secondary waves-effect">reset</button>--}}

                                    <a href="#" data-dismiss="modal"
                                       class="btn btn-outline-secondary waves-effect">cancel</a>


                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-12  modal fade" style="margin:50px auto;" id="addscore" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="card">
                    <a style="color: lightgrey" href="#" id="closemodal" >
                        <i   data-feather='x-square' data-dismiss="modal" style="width: 30px; height: 30px; margin-left: 469px; margin-top: -4px; "></i>
                    </a>

                    <div class="mt-3" style="margin:auto; ">
                        <h1>tạo tour du lịch mới</h1>
                        <p style="margin-left: 50px">add card for futcher billing</p>
                    </div>

                    <div class="card-body">
                        <form class="form form-vertical" action="{{ route('tours.store') }}" method="post">
                            @csrf

                            <div class="row">
                                <div style="margin: auto" class="col-10">
                                    <div class="mb-1">
                                        <label style="font-size: 14px;" class="form-label " for="first-name-vertical">tên
                                            tour du lịch</label>
                                        <input type="text" id="first-name-vertical"
                                               class="form-control {{ $errors->first('name')? 'has-error':'' }}" name="name"
                                               placeholder="vui lòng nhập">

                                        @if( $errors->first('name'))
                                            <span class="text-danger">{{$errors-> first('name')}}</span>
                                        @endif
                                    </div>

                                </div>
                                <div style="margin: auto" class="col-10">
                                    <div class="mb-1">
                                        <label style="font-size: 14px;" class="form-label" for="email-id-vertical">đơn
                                            giá</label>
                                        <input type="number" id="email-id-vertical"
                                               class="form-control  {{ $errors->first('price')? 'has-error':'' }}"
                                               name="price" placeholder="vui lòng nhập">
                                        @if( $errors->first('price'))
                                            <span class="text-danger">{{$errors-> first('price')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-12" style="display: flex;">
                                    <div class="mb-1" style="margin-left:40px;width: 190px;height: 34px; " >
                                        <label style="font-size: 14px;" class="form-label" for="password-vertical">chiết
                                            khấu ctv (%)</label>
                                        <input type="number" id="password-vertical" class="form-control"
                                               name="discount_percent" placeholder="vui lòng nhập">
                                    </div>

                                    <div class="mb-1"  style="margin-left: 14px; width: 190px;height: 34px;">
                                        <label style="font-size: 14px;" class="form-label" for="password-vertical">chiết
                                            khấu khách hàng (%)</label>
                                        <input type="number" id="password-vertical" class="form-control"
                                               name="discount_percent_customer" placeholder="vui lòng nhập">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-1">
                                        {{--                                    <div class="form-check">--}}
                                        {{--                                        <input type="checkbox" class="form-check-input" name="status" value="1" id="customcheck3">--}}
                                        {{--                                        <label class="form-check-label" for="customcheck3">cho phép bán tour</label>--}}
                                        {{--                                    </div>--}}

                                        {{--                                    <div class="form-check form-check-primary form-switch">--}}
                                        {{--                                        <input type="checkbox" checked="" class="form-check-input" name="status"--}}
                                        {{--                                               value="1" id="customswitch3">--}}
                                        {{--                                        <label class="form-check-label" for="customcheck3">cho phép bán tour</label>--}}
                                        {{--                                    </div>--}}

                                        <div style="margin-left: 40px;" class="form-check form-switch form-check-primary mt-4">
                                            <input type="checkbox" class="form-check-input" id="customswitch10" checked="" name="status" value="1">
                                            <label class="form-check-label" for="customswitch10">
                                                <span class="switch-icon-left"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 24 24" fill="none" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
                                                <span class="switch-icon-right"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 24 24" fill="none" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span>
                                                <p style="margin-top: 5px;"> cho phép bán tour </p>
                                            </label>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-12" style="margin-left: 170px;">
                                    <button type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light">
                                        submit
                                    </button>
                                    {{--                                <button type="reset" class="btn btn-outline-secondary waves-effect">reset</button>--}}

                                    <a href="#" data-dismiss="modal"
                                       class="btn btn-outline-secondary waves-effect">cancel</a>


                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@push('css')
@endpush

@push('js')
    <script>


    </script>
@endpush