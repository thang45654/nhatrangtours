<div class="modal modal-slide-in new-user-modal" id="editScore">
    <div class="modal-dialog">
        <form class="add-new-user modal-content pt-0" action="" method="POST">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
            <div class="modal-header mb-1">
                <h5 class="modal-title" id="exampleModalLabel" >Sửa cộng tác viên</h5>
            </div>
            <div class="modal-body flex-grow-1">
                <div class="mb-1">
                    <label class="form-label" for="basic-icon-default-fullname">Họ và tên*</label>
                    <input type="text" class="form-control dt-full-name" id="basic-icon-default-fullname"
                           placeholder="Vui lòng nhập" name="name"/>
                </div>
                <div class="mb-1">
                    <label class="form-label" for="basic-icon-default-fullname">Email*</label>
                    <input type="text" class="form-control dt-full-name" id="basic-icon-default-fullname"
                           placeholder="Vui lòng nhập" name="email"/>

                </div>

                <div class="mb-1">
                    <a href="#" id="changePassword">Đổi mật khẩu</a>
                </div>
                <div class="row" id="formShowInputPassword" style="display: none;">
                    <div class="col-md-6 ">
                        <div class="mb-1">
                            <label class="form-label" for="basic-icon-default-fullname">Mật khẩu*</label>
                            <input type="password" class="form-control dt-full-name" id="basic-icon-default-fullname"
                                   placeholder="Vui lòng nhập" name="password"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label class="form-label" for="basic-icon-default-fullname">Nhập lại mật khẩu*</label>
                            <input type="password" class="form-control dt-full-name" id="basic-icon-default-fullname"
                                   placeholder="Vui lòng nhập" name="confirm_password"/>
                        </div>
                    </div>
                </div>
                <div class="mb-1">
                    <label class="form-label" for="basic-icon-default-uname">Số điện thoại*</label>
                    <input type="text" id="basic-icon-default-uname" class="form-control dt-uname"
                           placeholder="Vui lòng nhập" name="phone"/>
                </div>
                <div class="mb-1">
                    <label class="form-label" for="basic-icon-default-email">Nghề nghiệp*</label>
                    <input type="text" id="basic-icon-default-email" class="form-control dt-email"
                           placeholder="Vui lòng nhập" name="job"/>
                </div>
                <div class="mb-1">
                    <label class="form-label" for="basic-icon-default-contact">Ngày sinh*</label>
                    <input type="date" id="basic-icon-default-contact" class="form-control dt-contact"
                           placeholder="dd/mm/yy" name="date_of_birth"/>
                </div>
                <div class="mb-1">
                    <label class="form-label" for="basic-icon-default-company">Số CMND/CCCD*</label>
                    <input type="text" id="basic-icon-default-company" class="form-control dt-contact"
                           placeholder="Vui lòng nhập" name="identity_card"/>
                </div>
                <div class="mb-1">
                    <label class="form-label" for="basic-icon-default-company">Khu vực hoạt động</label>
                    <input type="text" id="basic-icon-default-company" class="form-control dt-contact"
                           placeholder="Vui lòng nhập" name="active_area"/>
                </div>
                <div class="mb-1">
                    <label class="form-label" for="basic-icon-default-company">Nơi ở hiện tại</label>
                    <input type="text" id="basic-icon-default-company" class="form-control dt-contact"
                           placeholder="Vui lòng nhập" name="address"/>
                </div>
                <div class="mb-1">
                    <label class="form-label" for="user-role">Phương thức thanh toán</label>
                    <select id="payMethodEdit" name="payment" class="select2 form-select">
                        <option value="">---Vui lòng nhập----</option>
                        <option value="1">Chuyển khoản</option>
                        <option value="2">Tien mat</option>
                    </select>
                </div>
                <div class="mb-1" id="bankInfoEdit" style="display: none">
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
                <button type="button" class="btn btn-primary me-1 data-submit" id="formEditSubmit">Xác nhận</button>
                <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Hủy bỏ</button>
            </div>
        </form>
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
    $("#payMethodEdit").change(function () {
        const val = $(this).val();
        if (val == 1) {
            $("#bankInfoEdit").show();
        } else {
            $("#bankInfoEdit").hide();
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
        let id = null;
        let modal = $('#editScore');
        modal.on('show.bs.modal', function (e) {
            id = $(e.relatedTarget).data('id');

            fetch('{{ route('admin.partners.edit','') }}?id=' + id).then(res => res.json()).then(data => {
                const {
                    name,
                    email,
                    phone,
                    address,
                    job,
                    identity_card,
                    active_area,
                    payment,
                    bank,
                    account_number,
                    date_of_birth,

                } = data.data;
                modal.find('input[name="name"]').val(name);
                modal.find('input[name="email"]').val(email);
                modal.find('input[name="phone"]').val(phone);
                modal.find('input[name="address"]').val(address);
                modal.find('input[name="active_area"]').val(active_area);
                modal.find('input[name="identity_card"]').val(identity_card);
                modal.find('input[name="job"]').val(job);
                modal.find('select[name="payment"]').val(payment);
                modal.find('input[name="bank"]').val(bank);
                modal.find('input[name="account_number"]').val(account_number);
                modal.find('input[name="date_of_birth"]').val(date_of_birth)
                if(data.data.payment == 1){
                        $("#bankInfoEdit").show();
                }
            })
        });
        $('#formEditSubmit').click(function (e) {
            e.preventDefault();
            // xoa border
            modal.find('.is-invalid').removeClass('is-invalid');
            modal.find('.invalid-feedback').remove();
              axios.post( "{{ route('admin.partners.update','') }}/" + id, {
                  name : modal.find('input[name=name ]').val(),
                  email: modal.find('input[name=email]').val(),
                  phone: modal.find('input[name=phone]').val(),
                  address: modal.find('input[name=address]').val(),
                  password: modal.find('input[name=password]').val(),
                  confirm_password: modal.find('input[name=confirm_password]').val(),
                  account_number: modal.find('input[name=account_number]').val(),
                  bank: modal.find('input[name=bank]').val(),
                  date_of_birth : modal.find('input[name=date_of_birth]').val(),
                  active_area : modal.find('input[name=active_area]').val(),
                  identity_card :  modal.find('input[name=identity_card]').val(),
                  job: modal.find('input[name=job]').val(),
                  payment : modal.find('select[name=payment]').val(),
              }).then(function (response){
                console.log(response);
                alert(response.data);
                  location.reload();
        }).catch(function (error){
            $.each(error.response.data.errors, function (index, value) {
                modal.find('input[name=' + index + '], select[name='+index+']').addClass('is-invalid')
                  .parent().append('<div class="invalid-feedback text-danger">' + value[0] + '</div>');
            });
        });
    });
});
</script>