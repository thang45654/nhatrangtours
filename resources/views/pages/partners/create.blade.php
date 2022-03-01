<div class="modal modal-slide-in new-user-modal"  id="addScore">
    <div class="modal-dialog">
        <form class="add-new-user modal-content pt-0" action="{{ route('admin.partners.create') }}" method="POST">
           @csrf
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
            <div class="modal-header mb-1">
                <h5 class="modal-title" id="exampleModalLabel">Thêm cộng tác viên</h5>
            </div>
            <div class="modal-body flex-grow-1">
                <div class="mb-1">
                    <label class="form-label" for="basic-icon-default-fullname">Họ và tên*</label>
                    <input type="text" class="form-control dt-full-name" id="basic-icon-default-fullname" placeholder="Vui lòng nhập" name="name" />
               @if($errors->first('name'))
                   <div class="label text-danger">{{ $errors->first('name') }}</div>
               @endif
                </div>
                <div class="mb-1">
                    <label class="form-label" for="basic-icon-default-fullname">Email*</label>
                    <input type="text" class="form-control dt-full-name" id="basic-icon-default-fullname" placeholder="Vui lòng nhập" name="email" />
                    @if($errors->first('email'))
                        <div class="label text-danger">{{ $errors->first('email') }}</div>
                    @endif
                </div>
                <div class="mb-1">
                    <label class="form-label" for="basic-icon-default-fullname">Mật khẩu*</label>
                    <input type="password" class="form-control dt-full-name" id="basic-icon-default-fullname" placeholder="Vui lòng nhập" name="password" />
                    @if($errors->first('password'))
                        <div class="label text-danger">{{ $errors->first('password') }}</div>
                    @endif
                </div>
                <div class="mb-1">
                    <label class="form-label" for="basic-icon-default-fullname">Nhập lại mật khẩu*</label>

                    <input type="password" class="form-control dt-full-name" id="basic-icon-default-fullname" placeholder="Vui lòng nhập" name="confirm_password" />
                    @if($errors->first('confirm_password'))
                        <div class="label text-danger">{{ $errors->first('confirm_password') }}</div>
                    @endif
                </div>
                <div class="mb-1">
                    <label class="form-label" for="basic-icon-default-uname">Số điện thoại*</label>
                    <input type="text" id="basic-icon-default-uname" class="form-control dt-uname" placeholder="Vui lòng nhập" name="phone" />
                    @if($errors->first('phone'))
                        <div class="label text-danger">{{ $errors->first('phone') }}</div>
                    @endif
                </div>
                <div class="mb-1">
                    <label class="form-label" for="basic-icon-default-email">Nghề nghiệp*</label>
                    <input type="text" id="basic-icon-default-email" class="form-control dt-email" placeholder="Vui lòng nhập" name="job" />
                    @if($errors->first('job'))
                        <div class="label text-danger">{{ $errors->first('job') }}</div>
                    @endif
                </div>
                <div class="mb-1">
                    <label class="form-label" for="basic-icon-default-contact">Ngày sinh*</label>
                    <input type="date" value="{{ \Carbon\Carbon::now()->format('y-m-d') }}" id="basic-icon-default-contact" class="form-control dt-contact" placeholder="dd/mm/yy" name="date_of_birth" />
                    @if($errors->first('date_of_birth'))
                        <div class="label text-danger">{{ $errors->first('date_of_birth') }}</div>
                    @endif
                </div>
                <div class="mb-1">
                    <label class="form-label" for="basic-icon-default-company">Số CMND/CCCD*</label>
                    <input type="text" id="basic-icon-default-company" class="form-control dt-contact" placeholder="Vui lòng nhập" name="identity_card" />
                    @if($errors->first('identity_card'))
                        <div class="label text-danger">{{ $errors->first('identity_card') }}</div>
                    @endif
                </div>
                <div class="mb-1">
                    <label class="form-label" for="basic-icon-default-company">Khu vực hoạt động</label>
                    <input type="text" id="basic-icon-default-company" class="form-control dt-contact" placeholder="Vui lòng nhập" name="active_area" />
                </div>
                <div class="mb-1">
                    <label class="form-label" for="basic-icon-default-company">Nơi ở hiện tại</label>
                    <input type="text" id="basic-icon-default-company" class="form-control dt-contact" placeholder="Vui lòng nhập" name="address" />
                </div>
                <div class="mb-1">
                    <label class="form-label" for="user-role">Phương thức thanh toán</label>
                    <select id="payMethod" name="payment" class="select2 form-select">
                        <option value="0">---Vui lòng chọn----</option>
                        <option value="1">Chuyển khoản</option>
                        <option value="2">Tien mat</option>
                    </select>
                </div>
                <div class="mb-1" id="bankInfo" style="display: none">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label" for="basic-icon-default-company">Ngân hàng</label>
                            <input type="text" id="basic-icon-default-company" class="form-control dt-contact" placeholder="Vui lòng nhập" name="bank" />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="basic-icon-default-company">Số tài khoản</label>
                            <input type="text" id="basic-icon-default-company" class="form-control dt-contact" placeholder="Vui lòng nhập" name="account_number" />
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary me-1 data-submit">Xác nhận</button>
                <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Hủy bỏ</button>
            </div>
        </form>
    </div>
</div>
<script src="../../app-assets/vendors/js/jquery/jquery.min.js"></script>
<script>
    $("#payMethod").change(function (){
        const val=$(this).val();
        if(val==1){
            $("#bankInfo").show();
        } else {
            $("#bankInfo").hide();
        }
    });
</script>