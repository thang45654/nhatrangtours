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
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#order-modal">
                        Thêm đơn hàng mới
                    </button>

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

    @include('partials.orders.datatable', ['orders' => $orders])

    <!-- Modal to add new user Ends-->
    </div>

@include('partials.modals.orders.create')
@include('partials.modals.orders.edit')
<!-- list and filter end -->
</section>

@push('css')
@endpush

@push('js')

@endpush