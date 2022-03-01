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
                    <div class="row mb-2">
                        <div class="col-lg-9" >
                            <div class="card card-congratulation-medal mb-0 h-100">
                                <div class="d-flex" style="font-size: 10px">
                                    <div class="col-md-4">
                                        <div class="card-body">
                                            <p class="fw-bold text-black" style="font-size: 14px">Họ tên CTV : {{$partner->name}}</p>
                                            <p class="card-text font-small-3">Thông tin liên hệ</p>

                                            <button type="button" class="btn btn-primary btn-sm">Chỉnh sửa</button>
                                            <a href="{{ route('admin.partners.delete', $partner->id) }}" onclick="return window.confirm('Bạn có chắc chắn xóa không?');"                   class="btn btn-outline-danger btn-sm">Xóa bỏ</a>
                                            <div class="d-flex mt-2">
                                                <div class="me-2 d-flex">
                                                    <div style="width: 32px;height: 32px;justify-content: center;align-items: center" class="bg-light-primary d-flex rounded-1 me-1">
                                                        <i data-feather='check'></i>
                                                    </div>
                                                    <div>
                                                        <h3 class="m-0" style="font-size: 16px">421</h3>
                                                        <p class="m-0 text-nowrap">Tổng lượng vé</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div style="width: 32px;height: 32px;justify-content: center;align-items: center" class="bg-light-primary d-flex rounded-1 me-1">
                                                        <i data-feather='check'></i>
                                                    </div>
                                                    <div>
                                                        <h3 class="m-0" style="font-size: 16px">421</h3>
                                                        <p class="m-0 text-nowrap">Tổng lượng vé</p>
                                                    </div>
                                                </div>
                                            </div>

                                            {{--                                    <button   type="button" id="btn-add-modal" data-toggle="modal" data-target="#addScore" class="btn btn-primary me-1 waves-effect waves-float waves-light ">Tạo tour mới</button>--}}
                                            {{--                                    <img src="../../../app-assets/images/illustration/badge.svg" class="congratulation-medal" alt="Medal Pic" />--}}
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card-body">
                                            <p class="m-0 fw-bold text-black"><svg width="16" height="16" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M3.43018 2.405V1.375" stroke="#5E5873" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M8.56982 2.405V1.375" stroke="#5E5873" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M9.025 1.88989H2.975C2.09 1.88989 1.375 2.60489 1.375 3.48989V9.02989C1.375 9.91489 2.09 10.6299 2.975 10.6299H9.03C9.915 10.6299 10.63 9.91489 10.63 9.02989V3.48989C10.625 2.60489 9.91 1.88989 9.025 1.88989Z" stroke="#5E5873" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M1.375 3.94995H10.625" stroke="#5E5873" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M9 6C9.27614 6 9.5 5.77614 9.5 5.5C9.5 5.22386 9.27614 5 9 5C8.72386 5 8.5 5.22386 8.5 5.5C8.5 5.77614 8.72386 6 9 6Z" fill="#5E5873"/>
                                                    <path d="M7 6C7.27614 6 7.5 5.77614 7.5 5.5C7.5 5.22386 7.27614 5 7 5C6.72386 5 6.5 5.22386 6.5 5.5C6.5 5.77614 6.72386 6 7 6Z" fill="#5E5873"/>
                                                    <path d="M5 6C5.27614 6 5.5 5.77614 5.5 5.5C5.5 5.22386 5.27614 5 5 5C4.72386 5 4.5 5.22386 4.5 5.5C4.5 5.77614 4.72386 6 5 6Z" fill="#5E5873"/>
                                                    <path d="M3 6C3.27614 6 3.5 5.77614 3.5 5.5C3.5 5.22386 3.27614 5 3 5C2.72386 5 2.5 5.22386 2.5 5.5C2.5 5.77614 2.72386 6 3 6Z" fill="#5E5873"/>
                                                    <path d="M9 7.74512C9.27614 7.74512 9.5 7.52126 9.5 7.24512C9.5 6.96897 9.27614 6.74512 9 6.74512C8.72386 6.74512 8.5 6.96897 8.5 7.24512C8.5 7.52126 8.72386 7.74512 9 7.74512Z" fill="#5E5873"/>
                                                    <path d="M7 7.74512C7.27614 7.74512 7.5 7.52126 7.5 7.24512C7.5 6.96897 7.27614 6.74512 7 6.74512C6.72386 6.74512 6.5 6.96897 6.5 7.24512C6.5 7.52126 6.72386 7.74512 7 7.74512Z" fill="#5E5873"/>
                                                    <path d="M5 7.74512C5.27614 7.74512 5.5 7.52126 5.5 7.24512C5.5 6.96897 5.27614 6.74512 5 6.74512C4.72386 6.74512 4.5 6.96897 4.5 7.24512C4.5 7.52126 4.72386 7.74512 5 7.74512Z" fill="#5E5873"/>
                                                    <path d="M3 7.74512C3.27614 7.74512 3.5 7.52126 3.5 7.24512C3.5 6.96897 3.27614 6.74512 3 6.74512C2.72386 6.74512 2.5 6.96897 2.5 7.24512C2.5 7.52126 2.72386 7.74512 3 7.74512Z" fill="#5E5873"/>
                                                    <path d="M7 9.48511C7.27614 9.48511 7.5 9.26125 7.5 8.98511C7.5 8.70897 7.27614 8.48511 7 8.48511C6.72386 8.48511 6.5 8.70897 6.5 8.98511C6.5 9.26125 6.72386 9.48511 7 9.48511Z" fill="#5E5873"/>
                                                    <path d="M5 9.48511C5.27614 9.48511 5.5 9.26125 5.5 8.98511C5.5 8.70897 5.27614 8.48511 5 8.48511C4.72386 8.48511 4.5 8.70897 4.5 8.98511C4.5 9.26125 4.72386 9.48511 5 9.48511Z" fill="#5E5873"/>
                                                    <path d="M3 9.48511C3.27614 9.48511 3.5 9.26125 3.5 8.98511C3.5 8.70897 3.27614 8.48511 3 8.48511C2.72386 8.48511 2.5 8.70897 2.5 8.98511C2.5 9.26125 2.72386 9.48511 3 9.48511Z" fill="#5E5873"/>
                                                </svg>
                                                Ngày sinh: </p>
                                            <p class="m-0 fw-bold text-black"><svg width="16" height="16" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 1.375H9.085C9.94 1.375 10.625 2.06499 10.625 2.91499V3.95" stroke="#5E5873" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M1.375 3.95V2.91499C1.375 2.05999 2.065 1.375 2.915 1.375H3.975" stroke="#5E5873" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M8 10.625H9.085C9.94 10.625 10.625 9.93505 10.625 9.08505V8.05005" stroke="#5E5873" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M1.375 8.05005V9.08505C1.375 9.94005 2.065 10.625 2.915 10.625H3.975" stroke="#5E5873" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M8.93524 8.28999C8.09024 7.86999 7.08023 7.625 6.00023 7.625C4.88523 7.625 3.85023 7.885 2.99023 8.33" fill="#5E5873"/>
                                                    <path d="M8.93524 8.28999C8.09024 7.86999 7.08023 7.625 6.00023 7.625C4.88523 7.625 3.85023 7.885 2.99023 8.33" stroke="#5E5873" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M6.00027 5.85992C6.81213 5.85992 7.47027 5.20178 7.47027 4.38992C7.47027 3.57806 6.81213 2.91992 6.00027 2.91992C5.18841 2.91992 4.53027 3.57806 4.53027 4.38992C4.53027 5.20178 5.18841 5.85992 6.00027 5.85992Z" fill="#5E5873" stroke="#5E5873" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                Số CMND/CCCD</p>
                                            <p class="m-0 fw-bold text-black"><svg width="16" height="16" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M3.49999 3C3.49999 1.61929 4.61928 0.5 5.99999 0.5C7.3807 0.5 8.49999 1.61929 8.49999 3V3.00585M3.49999 3C3.8139 2.99404 4.16635 3 4.58016 3H7.41982C7.831 3 8.18752 3 8.49999 3.00585M3.49999 3C2.64056 3.01632 2.10911 3.0833 1.69598 3.31138C1.21543 3.57668 0.835976 3.99252 0.615517 4.4942M0.615517 4.4942L2.40379 6.28248C4.07046 7.94914 4.90379 8.78248 5.93932 8.78248C6.97486 8.78248 7.80819 7.94914 9.47486 6.28247L11.2912 4.46613C11.309 4.44832 11.3287 4.43245 11.3498 4.4188V4.4188M0.615517 4.4942C0.608727 4.50965 0.602088 4.52519 0.595602 4.5408C0.34841 5.13576 0.433817 5.90441 0.604629 7.44173C0.744439 8.70001 0.814343 9.32915 1.10459 9.80394C1.36027 10.2222 1.73326 10.556 2.17718 10.764C2.68112 11 3.31413 11 4.58016 11H7.41982C8.68585 11 9.31886 11 9.8228 10.764C10.2667 10.556 10.6397 10.2222 10.8954 9.80394C11.1856 9.32915 11.2555 8.70001 11.3954 7.44173C11.5662 5.90441 11.6516 5.13576 11.4044 4.5408C11.3873 4.49957 11.3691 4.45889 11.3498 4.4188M8.49999 3.00585C9.36298 3.022 9.88992 3.08277 10.304 3.31138C10.7603 3.56327 11.1254 3.95087 11.3498 4.4188" stroke="#5E5873"/>
                                                </svg>
                                                Nghề nghệp</p>
                                            <p class="m-0 fw-bold text-black"><svg width="16" height="16" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6 10.625C8.55432 10.625 10.625 8.55432 10.625 6C10.625 3.44568 8.55432 1.375 6 1.375C3.44568 1.375 1.375 3.44568 1.375 6C1.375 8.55432 3.44568 10.625 6 10.625Z" stroke="#5E5873" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M4.49001 7.06997L5.245 5.40997C5.28 5.33497 5.335 5.27997 5.41 5.24497L7.07 4.48997C7.35 4.36497 7.635 4.64997 7.51 4.92997L6.75501 6.58997C6.72001 6.66497 6.66501 6.71997 6.59001 6.75497L4.93001 7.50997C4.65001 7.63997 4.36001 7.34997 4.49001 7.06997Z" stroke="#5E5873" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                Khu vực hoạt động</p>
                                            <p class="m-0 fw-bold text-black"><svg width="16" height="16" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5.9999 1.375C4.1549 1.375 2.6499 2.88 2.6499 4.725C2.6499 7.015 5.6499 10.385 5.7749 10.525C5.8949 10.66 6.1049 10.66 6.2249 10.525C6.3549 10.385 9.3499 7.015 9.3499 4.725C9.3499 2.88 7.8449 1.375 5.9999 1.375Z" stroke="#5E5873" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M6.18642 5.89505C6.83277 5.79217 7.27333 5.18481 7.17045 4.53846C7.06757 3.89212 6.4602 3.45156 5.81386 3.55444C5.16752 3.65732 4.72696 4.26469 4.82984 4.91103C4.93272 5.55737 5.54008 5.99793 6.18642 5.89505Z" stroke="#5E5873" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                Nơi ở hiện tại</p>
                                            <p class="m-0 fw-bold text-black"><svg width="16" height="16" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5.78461 2.995C6.23196 2.995 6.5946 2.63235 6.5946 2.185C6.5946 1.73765 6.23196 1.375 5.78461 1.375C5.33726 1.375 4.97461 1.73765 4.97461 2.185C4.97461 2.63235 5.33726 2.995 5.78461 2.995Z" stroke="#5E5873" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M2.06983 6.03995C2.27983 5.69495 2.56483 5.39995 2.92483 5.17995C3.30983 4.94495 3.74982 4.81495 4.19982 4.74495C4.92982 4.63995 5.66482 4.66495 6.39982 4.69495C6.43482 4.69495 6.46482 4.69994 6.49982 4.69994C6.68982 4.72494 6.84482 4.68495 7.01482 4.56995C7.51482 4.23995 8.08483 4.11995 8.69483 4.14995C8.82983 4.15495 8.91483 4.19994 8.95483 4.26994C8.99983 4.35994 8.94482 4.46995 8.91982 4.52495C8.81982 4.73495 8.69983 5.02495 8.54983 5.41995C8.62483 5.52495 8.72983 5.66494 8.86483 5.82494C8.91483 5.88494 9.10982 6.11494 9.27982 6.26994C9.43982 6.41494 9.75983 6.66495 10.3148 6.84495C10.3098 7.32495 10.3048 7.79995 10.2998 8.27995C10.1748 8.30995 9.98982 8.36995 9.79482 8.48995C9.40482 8.73495 9.32982 9.01995 9.02982 9.27995C8.85982 9.42995 8.57482 9.60495 8.10982 9.67495C8.02482 9.76995 7.91482 9.90995 7.82482 10.0949C7.72982 10.2999 7.68982 10.4799 7.66982 10.6099C7.22982 10.6099 6.79482 10.6099 6.35482 10.6099C6.31482 10.5399 6.27482 10.4649 6.23482 10.3849C6.19982 10.3149 6.16482 10.245 6.13982 10.175C5.62982 10.175 5.11982 10.175 4.60982 10.175C4.57982 10.23 4.54982 10.29 4.51482 10.355C4.46982 10.445 4.43482 10.5349 4.40482 10.6149C3.96482 10.6099 3.52982 10.61 3.08982 10.605C3.06482 10.57 3.02483 10.515 2.98983 10.44C2.88483 10.23 2.90482 10.0649 2.85482 9.93495C2.77982 9.74995 2.69483 9.56495 2.56483 9.40995C2.08483 8.82995 1.68982 8.15995 1.67982 7.41495C1.67482 6.94995 1.81483 6.45995 2.06983 6.03995Z" stroke="#5E5873" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M4.96484 6.24512H6.60985" stroke="#5E5873" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7.89958 6.51511C7.89958 6.45689 7.94567 6.4201 7.98959 6.4201C8.03349 6.4201 8.07959 6.45687 8.07959 6.51511C8.07959 6.57335 8.03349 6.61011 7.98959 6.61011C7.94567 6.61011 7.89958 6.57332 7.89958 6.51511Z" fill="black" stroke="#5E5873"/>
                                                </svg>
                                                Hình thức thanh toán</p>
                                            <p class="m-0 fw-bold text-black"><svg width="16" height="16" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6 10.625C8.55432 10.625 10.625 8.55432 10.625 6C10.625 3.44568 8.55432 1.375 6 1.375C3.44568 1.375 1.375 3.44568 1.375 6C1.375 8.55432 3.44568 10.625 6 10.625Z" stroke="#5E5873" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M6 6.40989L4.5 5.37988" stroke="#5E5873" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M6 6.41L8.05499 4.86499" stroke="#5E5873" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                Ngày tham gia</p>

                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="card-body">
                                            <p class="m-0">{{$partner->date_of_birth}}</p>
                                            <p class="m-0">{{$partner->identity_card}}</p>
                                            <p class="m-0">{{$partner->job}}</p>
                                            <p class="m-0">{{$partner->active_area}}</p>
                                            <p class="m-0">{{$partner->address}}</p>
                                            <p class="m-0">{{$partner->payment_type}}</p>
                                            <p class="m-0">{{$partner->created_at}}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card-body">
                                            <p class="m-0">Mã QR và mã giới thiệu</p>
                                            <svg width="120" height="100" viewBox="0 0 80 92" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="80" height="92" rx="6" fill="#008BF4"/>
                                                <path d="M72 4H8C5.79086 4 4 5.79086 4 8V72C4 74.2091 5.79086 76 8 76H72C74.2091 76 76 74.2091 76 72V8C76 5.79086 74.2091 4 72 4Z" fill="white"/>
                                                <path d="M11.9524 9H9V11.9524H11.9524V9Z" fill="black"/>
                                                <path d="M14.9048 9H11.9524V11.9524H14.9048V9Z" fill="black"/>
                                                <path d="M17.8571 9H14.9048V11.9524H17.8571V9Z" fill="black"/>
                                                <path d="M20.8095 9H17.8571V11.9524H20.8095V9Z" fill="black"/>
                                                <path d="M23.7619 9H20.8095V11.9524H23.7619V9Z" fill="black"/>
                                                <path d="M26.7143 9H23.7619V11.9524H26.7143V9Z" fill="black"/>
                                                <path d="M29.6667 9H26.7143V11.9524H29.6667V9Z" fill="black"/>
                                                <path d="M35.5714 9H32.619V11.9524H35.5714V9Z" fill="black"/>
                                                <path d="M38.5238 9H35.5714V11.9524H38.5238V9Z" fill="black"/>
                                                <path d="M41.4762 9H38.5238V11.9524H41.4762V9Z" fill="black"/>
                                                <path d="M53.2857 9H50.3333V11.9524H53.2857V9Z" fill="black"/>
                                                <path d="M56.2381 9H53.2857V11.9524H56.2381V9Z" fill="black"/>
                                                <path d="M59.1905 9H56.2381V11.9524H59.1905V9Z" fill="black"/>
                                                <path d="M62.1429 9H59.1905V11.9524H62.1429V9Z" fill="black"/>
                                                <path d="M65.0952 9H62.1429V11.9524H65.0952V9Z" fill="black"/>
                                                <path d="M68.0476 9H65.0952V11.9524H68.0476V9Z" fill="black"/>
                                                <path d="M71 9H68.0476V11.9524H71V9Z" fill="black"/>
                                                <path d="M11.9524 11.9524H9V14.9048H11.9524V11.9524Z" fill="black"/>
                                                <path d="M29.6667 11.9524H26.7143V14.9048H29.6667V11.9524Z" fill="black"/>
                                                <path d="M38.5238 11.9524H35.5714L35.5714 14.9048H38.5238V11.9524Z" fill="black"/>
                                                <path d="M44.4286 11.9524H41.4762V14.9048H44.4286V11.9524Z" fill="black"/>
                                                <path d="M47.381 11.9524H44.4286V14.9048H47.381V11.9524Z" fill="black"/>
                                                <path d="M53.2857 11.9524H50.3333V14.9048H53.2857V11.9524Z" fill="black"/>
                                                <path d="M71 11.9524H68.0476V14.9048H71V11.9524Z" fill="black"/>
                                                <path d="M11.9524 14.9048H9V17.8571H11.9524V14.9048Z" fill="black"/>
                                                <path d="M17.8571 14.9048H14.9048V17.8571H17.8571V14.9048Z" fill="black"/>
                                                <path d="M20.8095 14.9048H17.8571V17.8571H20.8095V14.9048Z" fill="black"/>
                                                <path d="M23.7619 14.9048H20.8095V17.8571H23.7619V14.9048Z" fill="black"/>
                                                <path d="M29.6667 14.9048H26.7143V17.8571H29.6667V14.9048Z" fill="black"/>
                                                <path d="M41.4762 14.9048H38.5238L38.5238 17.8571H41.4762V14.9048Z" fill="black"/>
                                                <path d="M44.4286 14.9048H41.4762V17.8571H44.4286V14.9048Z" fill="black"/>
                                                <path d="M53.2857 14.9048H50.3333V17.8571H53.2857V14.9048Z" fill="black"/>
                                                <path d="M59.1905 14.9048H56.2381V17.8571H59.1905V14.9048Z" fill="black"/>
                                                <path d="M62.1429 14.9048H59.1905V17.8571H62.1429V14.9048Z" fill="black"/>
                                                <path d="M65.0952 14.9048H62.1429V17.8571H65.0952V14.9048Z" fill="black"/>
                                                <path d="M71 14.9048H68.0476V17.8571H71V14.9048Z" fill="black"/>
                                                <path d="M11.9524 17.8571H9V20.8095H11.9524V17.8571Z" fill="black"/>
                                                <path d="M17.8571 17.8571H14.9048V20.8095H17.8571V17.8571Z" fill="black"/>
                                                <path d="M20.8095 17.8571H17.8571V20.8095H20.8095V17.8571Z" fill="black"/>
                                                <path d="M23.7619 17.8571H20.8095V20.8095H23.7619V17.8571Z" fill="black"/>
                                                <path d="M29.6667 17.8571H26.7143V20.8095H29.6667V17.8571Z" fill="black"/>
                                                <path d="M35.5714 17.8571H32.619V20.8095H35.5714V17.8571Z" fill="black"/>
                                                <path d="M38.5238 17.8571H35.5714V20.8095H38.5238L38.5238 17.8571Z" fill="black"/>
                                                <path d="M47.381 17.8571H44.4286V20.8095H47.381V17.8571Z" fill="black"/>
                                                <path d="M53.2857 17.8571H50.3333V20.8095H53.2857V17.8571Z" fill="black"/>
                                                <path d="M59.1905 17.8571H56.2381V20.8095H59.1905V17.8571Z" fill="black"/>
                                                <path d="M62.1429 17.8571H59.1905V20.8095H62.1429V17.8571Z" fill="black"/>
                                                <path d="M65.0952 17.8571H62.1429V20.8095H65.0952V17.8571Z" fill="black"/>
                                                <path d="M71 17.8571H68.0476V20.8095H71V17.8571Z" fill="black"/>
                                                <path d="M11.9524 20.8095H9V23.7619H11.9524V20.8095Z" fill="black"/>
                                                <path d="M17.8571 20.8095H14.9048V23.7619H17.8571V20.8095Z" fill="black"/>
                                                <path d="M20.8095 20.8095H17.8571V23.7619H20.8095V20.8095Z" fill="black"/>
                                                <path d="M23.7619 20.8095H20.8095V23.7619H23.7619V20.8095Z" fill="black"/>
                                                <path d="M29.6667 20.8095H26.7143V23.7619H29.6667V20.8095Z" fill="black"/>
                                                <path d="M38.5238 20.8095H35.5714L35.5714 23.7619H38.5238V20.8095Z" fill="black"/>
                                                <path d="M41.4762 20.8095H38.5238V23.7619H41.4762V20.8095Z" fill="black"/>
                                                <path d="M47.381 20.8095H44.4286V23.7619H47.381V20.8095Z" fill="black"/>
                                                <path d="M53.2857 20.8095H50.3333V23.7619H53.2857V20.8095Z" fill="black"/>
                                                <path d="M59.1905 20.8095H56.2381V23.7619H59.1905V20.8095Z" fill="black"/>
                                                <path d="M62.1429 20.8095H59.1905V23.7619H62.1429V20.8095Z" fill="black"/>
                                                <path d="M65.0952 20.8095H62.1429V23.7619H65.0952V20.8095Z" fill="black"/>
                                                <path d="M71 20.8095H68.0476V23.7619H71V20.8095Z" fill="black"/>
                                                <path d="M11.9524 23.7619H9V26.7143H11.9524V23.7619Z" fill="black"/>
                                                <path d="M29.6667 23.7619H26.7143V26.7143H29.6667V23.7619Z" fill="black"/>
                                                <path d="M35.5714 23.7619H32.619V26.7143H35.5714L35.5714 23.7619Z" fill="black"/>
                                                <path d="M44.4286 23.7619H41.4762V26.7143H44.4286V23.7619Z" fill="black"/>
                                                <path d="M47.381 23.7619H44.4286V26.7143H47.381V23.7619Z" fill="black"/>
                                                <path d="M53.2857 23.7619H50.3333V26.7143H53.2857V23.7619Z" fill="black"/>
                                                <path d="M71 23.7619H68.0476V26.7143H71V23.7619Z" fill="black"/>
                                                <path d="M11.9524 26.7143H9V29.6667H11.9524V26.7143Z" fill="black"/>
                                                <path d="M14.9048 26.7143H11.9524V29.6667H14.9048V26.7143Z" fill="black"/>
                                                <path d="M17.8571 26.7143H14.9048V29.6667H17.8571V26.7143Z" fill="black"/>
                                                <path d="M20.8095 26.7143H17.8571V29.6667H20.8095V26.7143Z" fill="black"/>
                                                <path d="M23.7619 26.7143H20.8095V29.6667H23.7619V26.7143Z" fill="black"/>
                                                <path d="M26.7143 26.7143H23.7619V29.6667H26.7143V26.7143Z" fill="black"/>
                                                <path d="M29.6667 26.7143H26.7143V29.6667H29.6667V26.7143Z" fill="black"/>
                                                <path d="M35.5714 26.7143H32.619V29.6667H35.5714V26.7143Z" fill="black"/>
                                                <path d="M41.4762 26.7143H38.5238V29.6667H41.4762V26.7143Z" fill="black"/>
                                                <path d="M47.381 26.7143H44.4286V29.6667H47.381V26.7143Z" fill="black"/>
                                                <path d="M53.2857 26.7143H50.3333V29.6667H53.2857V26.7143Z" fill="black"/>
                                                <path d="M56.2381 26.7143H53.2857V29.6667H56.2381V26.7143Z" fill="black"/>
                                                <path d="M59.1905 26.7143H56.2381V29.6667H59.1905V26.7143Z" fill="black"/>
                                                <path d="M62.1429 26.7143H59.1905V29.6667H62.1429V26.7143Z" fill="black"/>
                                                <path d="M65.0952 26.7143H62.1429V29.6667H65.0952V26.7143Z" fill="black"/>
                                                <path d="M68.0476 26.7143H65.0952V29.6667H68.0476V26.7143Z" fill="black"/>
                                                <path d="M71 26.7143H68.0476V29.6667H71V26.7143Z" fill="black"/>
                                                <path d="M38.5238 29.6667H35.5714L35.5714 32.619H38.5238L38.5238 29.6667Z" fill="black"/>
                                                <path d="M47.381 29.6667H44.4286V32.619H47.381V29.6667Z" fill="black"/>
                                                <path d="M26.7143 32.619H23.7619V35.5714H26.7143V32.619Z" fill="black"/>
                                                <path d="M29.6667 32.619H26.7143V35.5714H29.6667V32.619Z" fill="black"/>
                                                <path d="M35.5714 32.619L32.619 32.619V35.5714H35.5714L35.5714 32.619Z" fill="black"/>
                                                <path d="M38.5238 32.619H35.5714L35.5714 35.5714H38.5238V32.619Z" fill="black"/>
                                                <path d="M41.4762 32.619L38.5238 32.619V35.5714H41.4762V32.619Z" fill="black"/>
                                                <path d="M47.381 32.619H44.4286V35.5714H47.381V32.619Z" fill="black"/>
                                                <path d="M50.3333 32.619L47.381 32.619V35.5714H50.3333V32.619Z" fill="black"/>
                                                <path d="M56.2381 32.619H53.2857V35.5714H56.2381V32.619Z" fill="black"/>
                                                <path d="M62.1429 32.619H59.1905V35.5714H62.1429V32.619Z" fill="black"/>
                                                <path d="M71 32.619H68.0476V35.5714H71V32.619Z" fill="black"/>
                                                <path d="M17.8571 35.5714H14.9048V38.5238H17.8571V35.5714Z" fill="black"/>
                                                <path d="M20.8095 35.5714H17.8571V38.5238H20.8095V35.5714Z" fill="black"/>
                                                <path d="M23.7619 35.5714L20.8095 35.5714V38.5238H23.7619V35.5714Z" fill="black"/>
                                                <path d="M32.619 35.5714H29.6667V38.5238H32.619L32.619 35.5714Z" fill="black"/>
                                                <path d="M35.5714 35.5714H32.619L32.619 38.5238H35.5714V35.5714Z" fill="black"/>
                                                <path d="M38.5238 35.5714H35.5714V38.5238H38.5238V35.5714Z" fill="black"/>
                                                <path d="M41.4762 35.5714H38.5238V38.5238H41.4762V35.5714Z" fill="black"/>
                                                <path d="M44.4286 35.5714H41.4762V38.5238H44.4286V35.5714Z" fill="black"/>
                                                <path d="M47.381 35.5714H44.4286V38.5238H47.381V35.5714Z" fill="black"/>
                                                <path d="M50.3333 35.5714H47.381V38.5238H50.3333V35.5714Z" fill="black"/>
                                                <path d="M59.1905 35.5714H56.2381V38.5238H59.1905V35.5714Z" fill="black"/>
                                                <path d="M62.1429 35.5714H59.1905V38.5238H62.1429V35.5714Z" fill="black"/>
                                                <path d="M71 35.5714H68.0476V38.5238H71V35.5714Z" fill="black"/>
                                                <path d="M14.9048 38.5238L11.9524 38.5238V41.4762H14.9048V38.5238Z" fill="black"/>
                                                <path d="M17.8571 38.5238H14.9048V41.4762H17.8571V38.5238Z" fill="black"/>
                                                <path d="M29.6667 38.5238L26.7143 38.5238V41.4762H29.6667V38.5238Z" fill="black"/>
                                                <path d="M35.5714 38.5238H32.619L32.619 41.4762H35.5714V38.5238Z" fill="black"/>
                                                <path d="M41.4762 38.5238H38.5238L38.5238 41.4762H41.4762V38.5238Z" fill="black"/>
                                                <path d="M50.3333 38.5238H47.381V41.4762H50.3333V38.5238Z" fill="black"/>
                                                <path d="M59.1905 38.5238H56.2381V41.4762H59.1905V38.5238Z" fill="black"/>
                                                <path d="M62.1429 38.5238H59.1905V41.4762H62.1429V38.5238Z" fill="black"/>
                                                <path d="M71 38.5238H68.0476V41.4762H71V38.5238Z" fill="black"/>
                                                <path d="M11.9524 41.4762H9V44.4286H11.9524V41.4762Z" fill="black"/>
                                                <path d="M14.9048 41.4762H11.9524V44.4286H14.9048V41.4762Z" fill="black"/>
                                                <path d="M26.7143 41.4762H23.7619V44.4286H26.7143V41.4762Z" fill="black"/>
                                                <path d="M32.619 41.4762H29.6667V44.4286H32.619L32.619 41.4762Z" fill="black"/>
                                                <path d="M44.4286 41.4762H41.4762V44.4286H44.4286V41.4762Z" fill="black"/>
                                                <path d="M50.3333 41.4762H47.381V44.4286H50.3333V41.4762Z" fill="black"/>
                                                <path d="M56.2381 41.4762H53.2857V44.4286H56.2381V41.4762Z" fill="black"/>
                                                <path d="M59.1905 41.4762H56.2381V44.4286H59.1905V41.4762Z" fill="black"/>
                                                <path d="M11.9524 44.4286H9V47.381H11.9524V44.4286Z" fill="black"/>
                                                <path d="M14.9048 44.4286H11.9524V47.381H14.9048V44.4286Z" fill="black"/>
                                                <path d="M17.8571 44.4286H14.9048V47.381H17.8571V44.4286Z" fill="black"/>
                                                <path d="M23.7619 44.4286H20.8095V47.381H23.7619V44.4286Z" fill="black"/>
                                                <path d="M26.7143 44.4286H23.7619V47.381H26.7143V44.4286Z" fill="black"/>
                                                <path d="M29.6667 44.4286H26.7143V47.381H29.6667V44.4286Z" fill="black"/>
                                                <path d="M32.619 44.4286H29.6667V47.381H32.619V44.4286Z" fill="black"/>
                                                <path d="M41.4762 44.4286H38.5238V47.381H41.4762V44.4286Z" fill="black"/>
                                                <path d="M47.381 44.4286H44.4286V47.381H47.381V44.4286Z" fill="black"/>
                                                <path d="M56.2381 44.4286H53.2857V47.381H56.2381V44.4286Z" fill="black"/>
                                                <path d="M65.0952 44.4286H62.1429V47.381H65.0952V44.4286Z" fill="black"/>
                                                <path d="M35.5714 47.381H32.619L32.619 50.3333H35.5714V47.381Z" fill="black"/>
                                                <path d="M41.4762 47.381H38.5238V50.3333H41.4762V47.381Z" fill="black"/>
                                                <path d="M53.2857 47.381H50.3333V50.3333H53.2857V47.381Z" fill="black"/>
                                                <path d="M59.1905 47.381H56.2381V50.3333H59.1905V47.381Z" fill="black"/>
                                                <path d="M65.0952 47.381H62.1429V50.3333H65.0952V47.381Z" fill="black"/>
                                                <path d="M68.0476 47.381H65.0952V50.3333H68.0476V47.381Z" fill="black"/>
                                                <path d="M11.9524 50.3333H9V53.2857H11.9524V50.3333Z" fill="black"/>
                                                <path d="M14.9048 50.3333H11.9524V53.2857H14.9048V50.3333Z" fill="black"/>
                                                <path d="M17.8571 50.3333H14.9048V53.2857H17.8571V50.3333Z" fill="black"/>
                                                <path d="M20.8095 50.3333H17.8571V53.2857H20.8095V50.3333Z" fill="black"/>
                                                <path d="M23.7619 50.3333H20.8095V53.2857H23.7619V50.3333Z" fill="black"/>
                                                <path d="M26.7143 50.3333H23.7619V53.2857H26.7143V50.3333Z" fill="black"/>
                                                <path d="M29.6667 50.3333H26.7143V53.2857H29.6667V50.3333Z" fill="black"/>
                                                <path d="M38.5238 50.3333H35.5714L35.5714 53.2857H38.5238L38.5238 50.3333Z" fill="black"/>
                                                <path d="M44.4286 50.3333H41.4762V53.2857H44.4286V50.3333Z" fill="black"/>
                                                <path d="M53.2857 50.3333H50.3333V53.2857H53.2857V50.3333Z" fill="black"/>
                                                <path d="M71 50.3333H68.0476V53.2857H71V50.3333Z" fill="black"/>
                                                <path d="M11.9524 53.2857H9V56.2381H11.9524V53.2857Z" fill="black"/>
                                                <path d="M29.6667 53.2857H26.7143V56.2381H29.6667V53.2857Z" fill="black"/>
                                                <path d="M35.5714 53.2857H32.619V56.2381H35.5714L35.5714 53.2857Z" fill="black"/>
                                                <path d="M38.5238 53.2857H35.5714L35.5714 56.2381H38.5238V53.2857Z" fill="black"/>
                                                <path d="M44.4286 53.2857H41.4762V56.2381H44.4286V53.2857Z" fill="black"/>
                                                <path d="M47.381 53.2857H44.4286V56.2381H47.381V53.2857Z" fill="black"/>
                                                <path d="M50.3333 53.2857H47.381V56.2381H50.3333V53.2857Z" fill="black"/>
                                                <path d="M53.2857 53.2857H50.3333V56.2381H53.2857V53.2857Z" fill="black"/>
                                                <path d="M59.1905 53.2857H56.2381V56.2381H59.1905V53.2857Z" fill="black"/>
                                                <path d="M62.1429 53.2857H59.1905V56.2381H62.1429V53.2857Z" fill="black"/>
                                                <path d="M65.0952 53.2857H62.1429V56.2381H65.0952V53.2857Z" fill="black"/>
                                                <path d="M68.0476 53.2857H65.0952V56.2381H68.0476V53.2857Z" fill="black"/>
                                                <path d="M71 53.2857H68.0476V56.2381H71V53.2857Z" fill="black"/>
                                                <path d="M11.9524 56.2381H9V59.1905H11.9524V56.2381Z" fill="black"/>
                                                <path d="M17.8571 56.2381H14.9048V59.1905H17.8571V56.2381Z" fill="black"/>
                                                <path d="M20.8095 56.2381H17.8571V59.1905H20.8095V56.2381Z" fill="black"/>
                                                <path d="M23.7619 56.2381H20.8095V59.1905H23.7619V56.2381Z" fill="black"/>
                                                <path d="M29.6667 56.2381H26.7143V59.1905H29.6667V56.2381Z" fill="black"/>
                                                <path d="M38.5238 56.2381H35.5714L35.5714 59.1905H38.5238V56.2381Z" fill="black"/>
                                                <path d="M44.4286 56.2381H41.4762V59.1905H44.4286V56.2381Z" fill="black"/>
                                                <path d="M53.2857 56.2381H50.3333V59.1905H53.2857V56.2381Z" fill="black"/>
                                                <path d="M56.2381 56.2381H53.2857V59.1905H56.2381V56.2381Z" fill="black"/>
                                                <path d="M59.1905 56.2381H56.2381V59.1905H59.1905V56.2381Z" fill="black"/>
                                                <path d="M62.1429 56.2381H59.1905V59.1905H62.1429V56.2381Z" fill="black"/>
                                                <path d="M65.0952 56.2381H62.1429V59.1905H65.0952V56.2381Z" fill="black"/>
                                                <path d="M68.0476 56.2381H65.0952V59.1905H68.0476V56.2381Z" fill="black"/>
                                                <path d="M71 56.2381H68.0476V59.1905H71V56.2381Z" fill="black"/>
                                                <path d="M11.9524 59.1905H9V62.1429H11.9524V59.1905Z" fill="black"/>
                                                <path d="M17.8571 59.1905H14.9048V62.1429H17.8571V59.1905Z" fill="black"/>
                                                <path d="M20.8095 59.1905H17.8571V62.1429H20.8095V59.1905Z" fill="black"/>
                                                <path d="M23.7619 59.1905H20.8095V62.1429H23.7619V59.1905Z" fill="black"/>
                                                <path d="M29.6667 59.1905H26.7143V62.1429H29.6667V59.1905Z" fill="black"/>
                                                <path d="M38.5238 59.1905H35.5714V62.1429H38.5238V59.1905Z" fill="black"/>
                                                <path d="M44.4286 59.1905H41.4762V62.1429H44.4286V59.1905Z" fill="black"/>
                                                <path d="M50.3333 59.1905H47.381V62.1429H50.3333V59.1905Z" fill="black"/>
                                                <path d="M53.2857 59.1905H50.3333V62.1429H53.2857V59.1905Z" fill="black"/>
                                                <path d="M62.1429 59.1905H59.1905V62.1429H62.1429V59.1905Z" fill="black"/>
                                                <path d="M65.0952 59.1905H62.1429V62.1429H65.0952V59.1905Z" fill="black"/>
                                                <path d="M11.9524 62.1429H9V65.0952H11.9524V62.1429Z" fill="black"/>
                                                <path d="M17.8571 62.1429H14.9048V65.0952H17.8571V62.1429Z" fill="black"/>
                                                <path d="M20.8095 62.1429H17.8571V65.0952H20.8095V62.1429Z" fill="black"/>
                                                <path d="M23.7619 62.1429H20.8095V65.0952H23.7619V62.1429Z" fill="black"/>
                                                <path d="M29.6667 62.1429H26.7143V65.0952H29.6667V62.1429Z" fill="black"/>
                                                <path d="M41.4762 62.1429H38.5238L38.5238 65.0952H41.4762V62.1429Z" fill="black"/>
                                                <path d="M50.3333 62.1429H47.381V65.0952H50.3333V62.1429Z" fill="black"/>
                                                <path d="M53.2857 62.1429H50.3333V65.0952H53.2857V62.1429Z" fill="black"/>
                                                <path d="M62.1429 62.1429H59.1905V65.0952H62.1429V62.1429Z" fill="black"/>
                                                <path d="M11.9524 65.0952H9V68.0476H11.9524V65.0952Z" fill="black"/>
                                                <path d="M29.6667 65.0952H26.7143V68.0476H29.6667V65.0952Z" fill="black"/>
                                                <path d="M50.3333 65.0952H47.381V68.0476H50.3333V65.0952Z" fill="black"/>
                                                <path d="M53.2857 65.0952H50.3333V68.0476H53.2857V65.0952Z" fill="black"/>
                                                <path d="M59.1905 65.0952H56.2381V68.0476H59.1905V65.0952Z" fill="black"/>
                                                <path d="M62.1429 65.0952H59.1905V68.0476H62.1429V65.0952Z" fill="black"/>
                                                <path d="M71 65.0952H68.0476V68.0476H71V65.0952Z" fill="black"/>
                                                <path d="M11.9524 68.0476H9V71H11.9524V68.0476Z" fill="black"/>
                                                <path d="M14.9048 68.0476H11.9524V71H14.9048V68.0476Z" fill="black"/>
                                                <path d="M17.8571 68.0476H14.9048V71H17.8571V68.0476Z" fill="black"/>
                                                <path d="M20.8095 68.0476H17.8571V71H20.8095V68.0476Z" fill="black"/>
                                                <path d="M23.7619 68.0476H20.8095V71H23.7619V68.0476Z" fill="black"/>
                                                <path d="M26.7143 68.0476H23.7619V71H26.7143V68.0476Z" fill="black"/>
                                                <path d="M29.6667 68.0476H26.7143V71H29.6667V68.0476Z" fill="black"/>
                                                <path d="M38.5238 68.0476H35.5714V71H38.5238V68.0476Z" fill="black"/>
                                                <path d="M41.4762 68.0476H38.5238V71H41.4762V68.0476Z" fill="black"/>
                                                <path d="M47.381 68.0476H44.4286V71H47.381V68.0476Z" fill="black"/>
                                                <path d="M50.3333 68.0476H47.381V71H50.3333V68.0476Z" fill="black"/>
                                                <path d="M56.2381 68.0476H53.2857V71H56.2381V68.0476Z" fill="black"/>
                                                <path d="M62.1429 68.0476H59.1905V71H62.1429V68.0476Z" fill="black"/>
                                                <path d="M65.0952 68.0476H62.1429V71H65.0952V68.0476Z" fill="black"/>
                                                <path d="M23.736 83.712C24.2533 83.776 24.648 83.952 24.92 84.24C25.192 84.528 25.328 84.888 25.328 85.32C25.328 85.6453 25.2453 85.9413 25.08 86.208C24.9147 86.4747 24.664 86.688 24.328 86.848C23.9973 87.0027 23.592 87.08 23.112 87.08C22.712 87.08 22.3253 87.024 21.952 86.912C21.584 86.7947 21.2693 86.6347 21.008 86.432L21.456 85.624C21.6587 85.7947 21.904 85.9307 22.192 86.032C22.4853 86.128 22.7867 86.176 23.096 86.176C23.464 86.176 23.752 86.1013 23.96 85.952C24.1733 85.7973 24.28 85.5893 24.28 85.328C24.28 85.0667 24.1787 84.864 23.976 84.72C23.7787 84.5707 23.4747 84.496 23.064 84.496H22.552V83.784L23.824 82.272H21.28V81.4H25.096V82.096L23.736 83.712ZM28.9443 81.4V87H27.9043V82.272H26.7203V81.4H28.9443ZM36.0471 85.728H35.0551V87H34.0471V85.728H30.9751V85.008L33.7351 81.4H34.8471L32.2471 84.848H34.0791V83.72H35.0551V84.848H36.0471V85.728ZM40.0288 83.544C40.3968 83.544 40.7275 83.616 41.0208 83.76C41.3141 83.8987 41.5435 84.0987 41.7088 84.36C41.8741 84.6213 41.9568 84.9227 41.9568 85.264C41.9568 85.6267 41.8661 85.9467 41.6848 86.224C41.5035 86.496 41.2581 86.7067 40.9488 86.856C40.6395 87.0053 40.2928 87.08 39.9088 87.08C39.1408 87.08 38.5435 86.84 38.1168 86.36C37.6955 85.88 37.4848 85.192 37.4848 84.296C37.4848 83.6667 37.5995 83.1307 37.8288 82.688C38.0581 82.24 38.3781 81.9013 38.7888 81.672C39.2048 81.4373 39.6848 81.32 40.2288 81.32C40.5168 81.32 40.7861 81.352 41.0368 81.416C41.2928 81.4747 41.5141 81.5627 41.7008 81.68L41.3168 82.464C41.0395 82.2827 40.6848 82.192 40.2528 82.192C39.7141 82.192 39.2928 82.3573 38.9888 82.688C38.6848 83.0187 38.5328 83.496 38.5328 84.12V84.128C38.6981 83.936 38.9088 83.792 39.1648 83.696C39.4208 83.5947 39.7088 83.544 40.0288 83.544ZM39.8528 86.264C40.1781 86.264 40.4421 86.1787 40.6448 86.008C40.8475 85.832 40.9488 85.6 40.9488 85.312C40.9488 85.0187 40.8475 84.7867 40.6448 84.616C40.4421 84.4453 40.1701 84.36 39.8288 84.36C39.4928 84.36 39.2181 84.4507 39.0048 84.632C38.7968 84.8133 38.6928 85.0427 38.6928 85.32C38.6928 85.592 38.7941 85.8187 38.9968 86C39.2048 86.176 39.4901 86.264 39.8528 86.264ZM47.1324 84.056C47.4258 84.1893 47.6498 84.3707 47.8044 84.6C47.9644 84.824 48.0444 85.088 48.0444 85.392C48.0444 85.7333 47.9484 86.032 47.7564 86.288C47.5698 86.544 47.3031 86.7413 46.9564 86.88C46.6098 87.0133 46.2071 87.08 45.7484 87.08C45.2898 87.08 44.8871 87.0133 44.5404 86.88C44.1991 86.7413 43.9351 86.544 43.7484 86.288C43.5618 86.032 43.4684 85.7333 43.4684 85.392C43.4684 85.088 43.5458 84.824 43.7004 84.6C43.8551 84.3707 44.0764 84.1893 44.3644 84.056C44.1404 83.9333 43.9671 83.7733 43.8444 83.576C43.7271 83.3733 43.6684 83.1413 43.6684 82.88C43.6684 82.5653 43.7538 82.2907 43.9244 82.056C44.1004 81.8213 44.3458 81.64 44.6604 81.512C44.9751 81.384 45.3378 81.32 45.7484 81.32C46.1644 81.32 46.5298 81.384 46.8444 81.512C47.1591 81.64 47.4044 81.8213 47.5804 82.056C47.7564 82.2907 47.8444 82.5653 47.8444 82.88C47.8444 83.1413 47.7831 83.3707 47.6604 83.568C47.5378 83.7653 47.3618 83.928 47.1324 84.056ZM45.7484 82.136C45.4231 82.136 45.1644 82.2053 44.9724 82.344C44.7858 82.4827 44.6924 82.6773 44.6924 82.928C44.6924 83.168 44.7858 83.36 44.9724 83.504C45.1644 83.6427 45.4231 83.712 45.7484 83.712C46.0791 83.712 46.3404 83.6427 46.5324 83.504C46.7244 83.36 46.8204 83.168 46.8204 82.928C46.8204 82.6773 46.7218 82.4827 46.5244 82.344C46.3324 82.2053 46.0738 82.136 45.7484 82.136ZM45.7484 86.264C46.1324 86.264 46.4364 86.184 46.6604 86.024C46.8844 85.864 46.9964 85.6427 46.9964 85.36C46.9964 85.0827 46.8844 84.864 46.6604 84.704C46.4364 84.544 46.1324 84.464 45.7484 84.464C45.3644 84.464 45.0631 84.544 44.8444 84.704C44.6258 84.864 44.5164 85.0827 44.5164 85.36C44.5164 85.6427 44.6258 85.864 44.8444 86.024C45.0631 86.184 45.3644 86.264 45.7484 86.264ZM51.6552 81.4V87H50.6152V82.272H49.4312V81.4H51.6552ZM57.8221 86.12V87H53.6941V86.304L55.9181 84.192C56.1687 83.952 56.3367 83.744 56.4221 83.568C56.5127 83.3867 56.5581 83.208 56.5581 83.032C56.5581 82.7707 56.4701 82.5707 56.2941 82.432C56.1181 82.2933 55.8594 82.224 55.5181 82.224C54.9474 82.224 54.5101 82.4187 54.2061 82.808L53.4781 82.248C53.6967 81.9547 53.9901 81.728 54.3581 81.568C54.7314 81.4027 55.1474 81.32 55.6061 81.32C56.2141 81.32 56.6994 81.464 57.0621 81.752C57.4247 82.04 57.6061 82.432 57.6061 82.928C57.6061 83.232 57.5421 83.5173 57.4141 83.784C57.2861 84.0507 57.0407 84.3547 56.6781 84.696L55.1821 86.12H57.8221Z" fill="white"/>
                                            </svg>

                                            <p class="m-0">Download QR code</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card card-congratulation-medal mb-0 h-100">
                                <div class="card-body">
                                    <h5>Hoa hồng chưa thanh toán</h5>
                                    <p class="card-text font-small-3">Lần cuối thanh toán:20/12/2020</p>
                                    <h3 class="mb-75 pt-50 d-flex flex-column align-items-center">
                                        <a href="#" style="font-size: 35px"><b>10.000.000<sup>VND</sup></b></a>
                                    </h3>
                                    <button type="button" class="btn btn-primary">Xác nhận đã thanh toán dư nợ</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-9">
                            <div class="card card-congratulation-medal mb-0 h-100">
                                <div class="d-flex justify-content-between align-items-center header-actions mx-2 row mt-75"  style="font-size: 10px">
                                    <div class="col-sm-12 col-lg-4 d-flex justify-content-center justify-content-lg-start">
                                        <h5 class="fw-bold text-black">Lịch sử giới thiệu</h5>
                                    </div>
                                </div>
                                <div class="card-datatable table-responsive pt-0">
                                    <table class="user-list-table table">
                                        <thead class="table-light">
                                        <tr>
                                            <th>ID
                                                <div class="d-inline-flex flex-column">
                                                    <i style="color: gray" data-feather="chevron-up"></i>
                                                    <i style="color: gray" data-feather="chevron-down"></i>
                                                </div></th>
                                            <th>THỜI GIAN
                                                <div class="d-inline-flex flex-column">
                                                    <i style="color: gray" data-feather="chevron-up"></i>
                                                    <i style="color: gray" data-feather="chevron-down"></i>
                                                </div></th>
                                            <th>KHÁCH HÀNG
                                                <div class="d-inline-flex flex-column">
                                                    <i style="color: gray" data-feather="chevron-up"></i>
                                                    <i style="color: gray" data-feather="chevron-down"></i>
                                                </div></th>
                                            <th>SỐ LƯỢNG VÉ
                                                <div class="d-inline-flex flex-column">
                                                    <i style="color: gray" data-feather="chevron-up"></i>
                                                    <i style="color: gray" data-feather="chevron-down"></i>
                                                </div></th>
                                            <th>TỔNG TIỀN
                                                <div class="d-inline-flex flex-column">
                                                    <i style="color: gray" data-feather="chevron-up"></i>
                                                    <i style="color: gray" data-feather="chevron-down"></i>
                                                </div></th>
                                        </tr>
                                        <tbody>
                                        <tr class="fw-bold text-black" >
                                            <td>#1000</td>
                                            <td>dd/mm/yy <p class="m-0 fs-6 text-muted">hh:mm</p></td>
                                            <td >Nguyenx Ứng Khánh Linh <p class="m-0 fs-6 text-muted">khanhlinhnguyenung.com</p></td>

                                            <td>4</td>
                                            <td>520.000</td>
                                        </tr>
                                        <tr class="fw-bold text-black" >
                                            <td>#1000</td>
                                            <td>dd/mm/yy <p class="m-0 fs-6 text-muted">hh:mm</p></td>
                                            <td >Nguyenx Ứng Khánh Linh <p class="m-0 fs-6 text-muted">khanhlinhnguyenung.com</p></td>

                                            <td>4</td>
                                            <td>520.000</td>
                                        </tr>
                                        <tr class="fw-bold text-black" >
                                            <td>#1000</td>
                                            <td>dd/mm/yy <p class="m-0 fs-6 text-muted">hh:mm</p></td>
                                            <td >Nguyenx Ứng Khánh Linh <p class="m-0 fs-6 text-muted">khanhlinhnguyenung.com</p></td>

                                            <td>4</td>
                                            <td>520.000</td>
                                        </tr>
                                        <tr class="fw-bold text-black" >
                                            <td>#1000</td>
                                            <td>dd/mm/yy <p class="m-0 fs-6 text-muted">hh:mm</p></td>
                                            <td >Nguyenx Ứng Khánh Linh <p class="m-0 fs-6 text-muted">khanhlinhnguyenung.com</p></td>

                                            <td>4</td>
                                            <td>520.000</td>
                                        </tr>
                                        <tr class="fw-bold text-black" >
                                            <td>#1000</td>
                                            <td>dd/mm/yy <p class="m-0 fs-6 text-muted">hh:mm</p></td>
                                            <td >Nguyenx Ứng Khánh Linh <p class="m-0 fs-6 text-muted">khanhlinhnguyenung.com</p></td>

                                            <td>4</td>
                                            <td>520.000</td>
                                        </tr>
                                        <tr class="fw-bold text-black" >
                                            <td>#1000</td>
                                            <td>dd/mm/yy <p class="m-0 fs-6 text-muted">hh:mm</p></td>
                                            <td >Nguyenx Ứng Khánh Linh <p class="m-0 fs-6 text-muted">khanhlinhnguyenung.com</p></td>

                                            <td>4</td>
                                            <td>520.000</td>
                                        </tr>
                                        <tr class="fw-bold text-black" >
                                            <td>#1000</td>
                                            <td>dd/mm/yy <p class="m-0 fs-6 text-muted">hh:mm</p></td>
                                            <td >Nguyenx Ứng Khánh Linh <p class="m-0 fs-6 text-muted">khanhlinhnguyenung.com</p></td>

                                            <td>4</td>
                                            <td>520.000</td>
                                        </tr>
                                        <tr class="fw-bold text-black" >
                                            <td>#1000</td>
                                            <td>dd/mm/yy <p class="m-0 fs-6 text-muted">hh:mm</p></td>
                                            <td >Nguyenx Ứng Khánh Linh <p class="m-0 fs-6 text-muted">khanhlinhnguyenung.com</p></td>

                                            <td>4</td>
                                            <td>520.000</td>
                                        </tr>
                                        </tbody>
                                        </thead>
                                    </table>
                                </div>
                                <div class="d-flex justify-content-between mx-2 mb-1 align-items-center">

                                        <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div>


                                        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous">
                                                    <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">&nbsp;</a>
                                                </li>
                                                <li class="paginate_button page-item next disabled" id="DataTables_Table_0_next">
                                                    <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">&nbsp;</a>
                                                </li>
                                            </ul>
                                        </div>

                                </div>
                            </div></div>

                        <div class="col-lg-3">
                            <div class="card mb-0 h-100">
                                <div class="d-flex justify-content-between align-items-center header-actions mx-2 row mt-75">
                                    <div class="col-sm-12 d-flex justify-content-center justify-content-lg-start">
                                        <h5 class="fw-bold text-black">Lịch sử thanh toán</h5>
                                    </div>
                                </div>
                                <div class="card-datatable table-responsive pt-0">
                                    <table class="user-list-table table">
                                        <thead class="table-light">
                                        <tr>
                                            <th>THỜI GIAN
                                                <div class="d-inline-flex flex-column">
                                                    <i style="color: gray" data-feather="chevron-up"></i>
                                                    <i style="color: gray" data-feather="chevron-down"></i>
                                                </div></th>
                                            <th>SÔ TIỀN
                                                <div class="d-inline-flex flex-column">
                                                    <i style="color: gray" data-feather="chevron-up"></i>
                                                    <i style="color: gray" data-feather="chevron-down"></i>
                                                </div></th>
                                        </tr>
                                        <tbody>
                                        <tr>
                                            <td>dd/mm/yy</td>
                                            <td>10.000.000</td>
                                        </tr>
                                        <tr>
                                            <td>dd/mm/yy</td>
                                            <td>10.000.000</td>
                                        </tr>
                                        <tr>
                                            <td>dd/mm/yy</td>
                                            <td>10.000.000</td>
                                        </tr>
                                        <tr>
                                            <td>dd/mm/yy</td>
                                            <td>10.000.000</td>
                                        </tr>
                                        <tr>
                                            <td>dd/mm/yy</td>
                                            <td>10.000.000</td>
                                        </tr>
                                        </tbody>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- list and filter start -->
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
@endpush