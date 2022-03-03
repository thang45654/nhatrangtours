@extends('layouts.app')

@section('page_name')
    {{$page_name}}
@endsection
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
                        <div class="col-lg-4 col-sm-6">
                            <div class="card card-congratulation-medal mb-0">
                                <div class="card-body ">
                                    <h5>Số cộng tác viên hiện tại</h5>
                                    <p class="card-text font-small-3">Tổng số ctv đã tạo</p>
                                    <h3 class="mb-75 pt-50">
                                        <a href="#">{{ $total_partners}} ctv</a>
                                    </h3>

                                    <button type="button" class="btn btn-primary" href=""> Tạo CTV mới</button>
                                    <img src="../../../app-assets/images/illustration/badge.svg"
                                         class="congratulation-medal" alt="Medal Pic"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="card  mb-0 h-100">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <div class="avatar bg-light-danger p-50 mb-1">
                                        <div class="avatar-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-shopping-bag font-medium-5">
                                                <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                                <path d="M16 10a4 4 0 0 1-8 0"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <h3 class="fw-bolder">{{ $total_tours}}</h3>
                                    <p class="card-text">Tour du lịch</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="card  mb-0 h-100">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <div class="avatar bg-light-warning p-50 mb-1">
                                        <div class="avatar-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-message-square font-medium-5">
                                                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <h3 class="fw-bolder">{{ $total_partners}}</h3>
                                    <p class="card-text">Cộng tác viên</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="card mb-0 h-100">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <div class="avatar bg-light-info p-50 mb-1">
                                        <div class="avatar-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-eye font-medium-5">
                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>
                                        </div>
                                    </div>
                                    <h3 class="fw-bolder">{{ $total_tickets}}</h3>
                                    <p class="card-text">Vé đã bán</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="card mb-0 h-100">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <div class="avatar bg-light-primary p-50 mb-1">
                                        <div class="avatar-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-heart font-medium-5">
                                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <h3 class="fw-bolder">{{ $total_revenue}}</h3>
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
                    @include('pages.partners.datatable', ['partners' => $partners])

                    <div class="modal modal-slide-in new-user-modal" id="addScore">
                        <div class="modal-dialog">
                            <form class="add-new-user modal-content pt-0" action="" method="POST">
                                @csrf
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×
                                </button>
                                <div class="modal-header mb-1">
                                    <h5 class="modal-title" id="exampleModalLabel">Thêm cộng tác viên</h5>
                                </div>
                                <div class="modal-body flex-grow-1">
                                    <div class="mb-1">
                                        <label class="form-label" for="basic-icon-default-fullname">Họ và tên*</label>
                                        <input type="text" class="form-control dt-full-name"
                                               id="basic-icon-default-fullname" placeholder="Vui lòng nhập"
                                               name="name"/>

                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="basic-icon-default-fullname">Email*</label>
                                        <input type="text" class="form-control dt-full-name"
                                               id="basic-icon-default-fullname" placeholder="Vui lòng nhập"
                                               name="email"/>

                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="basic-icon-default-fullname">Mật khẩu*</label>
                                        <input type="password" class="form-control dt-full-name"
                                               id="basic-icon-default-fullname" placeholder="Vui lòng nhập"
                                               name="password"/>

                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="basic-icon-default-fullname">Nhập lại mật
                                            khẩu*</label>

                                        <input type="password" class="form-control dt-full-name"
                                               id="basic-icon-default-fullname" placeholder="Vui lòng nhập"
                                               name="confirm_password"/>

                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="basic-icon-default-uname">Số điện thoại*</label>
                                        <input type="number" id="basic-icon-default-uname" class="form-control dt-uname"
                                               placeholder="Vui lòng nhập" name="phone"/>

                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="basic-icon-default-email">Nghề nghiệp*</label>
                                        <input type="text" id="basic-icon-default-email" class="form-control dt-email"
                                               placeholder="Vui lòng nhập" name="job"/>

                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="basic-icon-default-contact">Ngày sinh*</label>
                                        <input type="date" value="{{ \Carbon\Carbon::now()->format('y-m-d') }}"
                                               id="basic-icon-default-contact" class="form-control dt-contact"
                                               placeholder="dd/mm/yy" name="date_of_birth"/>

                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="basic-icon-default-company">Số CMND/CCCD*</label>
                                        <input type="number" id="basic-icon-default-company"
                                               class="form-control dt-contact" placeholder="Vui lòng nhập"
                                               name="identity_card"/>

                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="basic-icon-default-company">Khu vực hoạt
                                            động</label>
                                        <input type="text" id="basic-icon-default-company"
                                               class="form-control dt-contact" placeholder="Vui lòng nhập"
                                               name="active_area"/>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="basic-icon-default-company">Nơi ở hiện
                                            tại</label>
                                        <input type="text" id="basic-icon-default-company"
                                               class="form-control dt-contact" placeholder="Vui lòng nhập"
                                               name="address"/>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="user-role">Phương thức thanh toán</label>

                                        <select id="payMethod" name="payment" class="select2 form-select">
                                            <option value="">---Vui lòng chọn----</option>
                                            <option value="1">Chuyển khoản</option>
                                            <option value="2">Tien mat</option>
                                        </select>

                                    </div>
                                    <div class="mb-1" id="bankInfo" style="display: none">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label" for="basic-icon-default-company">Ngân
                                                    hàng</label>
                                                <input type="text" id="basic-icon-default-company"
                                                       class="form-control dt-contact" placeholder="Vui lòng nhập"
                                                       name="bank"/>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label" for="basic-icon-default-company">Số tài
                                                    khoản</label>
                                                <input type="text" id="basic-icon-default-company"
                                                       class="form-control dt-contact" placeholder="Vui lòng nhập"
                                                       name="account_number"/>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary me-1 data-submit"
                                            id="formSubmitPartner">Xác nhận
                                    </button>
                                    <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Hủy
                                        bỏ
                                    </button>
                                </div>
                            </form>
                            {{--                                </div>--}}
                        </div>
                    </div>
                @include('pages.partners.edit')
                <!-- list and filter end -->
                </section>
                <!-- users list ends -->

            </div>
        </div>
    </div>
    <script src="../../app-assets/vendors/js/jquery/jquery.min.js"></script>
    <script>
        $("#payMethod").change(function () {
            const val = $(this).val();
            if (val == 1) {
                $("#bankInfo").show();
            } else {
                $("#bankInfo").hide();
            }
        });
    </script>
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
            $(document).ready(function () {
                $('#addScore').modal('show');
            });
        </script>
    @endif
    <script>
        $(document).ready(function () {
            let modal = $('#addScore');
            $('#formSubmitPartner').click(function (e) {
                e.preventDefault();
                // xoa border
                modal.find('.is-invalid').removeClass('is-invalid');
                modal.find('.invalid-feedback').remove();

                axios.post("{{ route('admin.partners.create') }}", {
                    name: modal.find('input[name=name ]').val(),
                    email: modal.find('input[name=email]').val(),
                    phone: modal.find('input[name=phone]').val(),
                    address: modal.find('input[name=address]').val(),
                    password: modal.find('input[name=password]').val(),
                    confirm_password: modal.find('input[name=confirm_password]').val(),
                    account_number: modal.find('input[name=account_number]').val(),
                    bank: modal.find('input[name=bank]').val(),
                    date_of_birth: modal.find('input[name=date_of_birth]').val(),
                    active_area: modal.find('input[name=active_area]').val(),
                    identity_card: modal.find('input[name=identity_card]').val(),
                    job: modal.find('input[name=job]').val(),
                    payment: modal.find('select[name=payment]').val(),
                    view: 'store'
                }).then(function (response) {
                    console.log(response);
                    alert(response.data);
                    location.reload();
                }).catch(function (error) {
                    console.log(error.response.data.errors);
                    $.each(error.response.data.errors, function (index, value) {
                        modal.find('input[name=' + index + '], select[name=' + index + ']').addClass('is-invalid')
                            .parent().append('<div class="invalid-feedback text-danger">' + value[0] + '</div>');
                    });

                });
            });
        });
    </script>
@endsection



