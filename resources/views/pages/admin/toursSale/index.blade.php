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

            @include('pages.admin.toursSale.datatable',["toursSale"=>$toursSale])
                    <!-- list and filter start -->
{{--                    <div class="card">--}}
{{--                        <div class="card-body pd-0">--}}
{{--                            <h4 class="card-title mb-0">Danh sách Tours</h4>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-4 user_role"></div>--}}
{{--                                <div class="col-md-4 user_plan"></div>--}}
{{--                                <div class="col-md-4 user_status"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="card-datatable table-responsive pt-0">--}}
{{--                            <table class="user-list-table table">--}}
{{--                                <thead class="table-light">--}}
{{--                                <tr>--}}
{{--                                    <th>ID</th>--}}
{{--                                    <th>Tên tour</th>--}}
{{--                                    <th>Đơn giá</th>--}}
{{--                                    <th>Số lượng vé đã bán</th>--}}
{{--                                    <th>Trạng thái</th>--}}

{{--                                </tr>--}}
{{--                                </thead>--}}
{{--                                <tbody>--}}

{{--                            @if(isset($toursSale))--}}
{{--                                @foreach($toursSale as $sale)--}}
{{--                                <tr>--}}
{{--                                    <td>{{ $sale->id }} </td>--}}
{{--                                    <td>{{ $sale->tour->name }}</td>--}}
{{--                                    <td>{{ number_format($sale->tour->price) }}</td>--}}
{{--                                    <td>{{ $sale->quatity }}</td>--}}
{{--                                    <td>{{ $sale->status }}</td>--}}

{{--                                </tr>--}}

{{--                                @endforeach--}}
{{--                            @endif--}}
{{--                                </tbody>--}}
{{--                            </table>--}}
{{--                        </div>--}}

{{--                        <!-- Modal to add new user Ends-->--}}
{{--                    </div>--}}
                    <!-- list and filter end -->
                </section>
                <!-- users list ends -->
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