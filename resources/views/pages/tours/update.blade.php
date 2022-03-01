
<style>
    .has-error{
        border:1px solid red;
    }

</style>

<div class="col-md-4 col-12  modal fade" style="margin:50px auto;" id="editScore" tabindex="-5">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="card">
                <a style="color: lightgrey" href="#" id="closeModal" >
                    <i  data-feather='x-square' data-dismiss="modal" style="width: 30px; height: 30px; margin-left: 469px; margin-top: -4px; "></i>
                </a>
                <div class="mt-3" style="margin:auto; ">
                    <h1>Sửa tour du lịch mới</h1>
                    <p style="margin-left: 50px">Add card for futcher billing</p>
                </div>

                <div class="card-body">
                    <form class="form form-vertical" action="" method="POST" id="form-submit">
                        @csrf

                        <div class="row">
                            <div style="margin: auto" class="col-10">
                                <div class="mb-1">
                                    <label style="font-size: 14px;" class="form-label " for="first-name-vertical">Tên
                                        tour du lịch</label>
                                    <input type="text" id="first-name-vertical"
                                           class="form-control {{ $errors->first('name')? 'has-error':'' }}" name="name"
                                           placeholder="Vui lòng nhập">

                                    @if( $errors->first('name'))
                                        <span class="text-danger">{{$errors-> first('name')}}</span>
                                    @endif
                                </div>

                            </div>
                            <div style="margin: auto" class="col-10">
                                <div class="mb-1">
                                    <label style="font-size: 14px;" class="form-label" for="email-id-vertical">Đơn
                                        giá</label>
                                    <input type="number" id="email-id-vertical"
                                           class="form-control  {{ $errors->first('price')? 'has-error':'' }}"
                                           name="price" placeholder="Vui lòng nhập">
                                    @if( $errors->first('price'))
                                        <span class="text-danger">{{$errors-> first('price')}}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-12" style="display: flex;">
                                <div class="mb-1" style="margin-left:40px;width: 190px;height: 34px; " >
                                    <label style="font-size: 14px;" class="form-label" for="password-vertical">Chiết
                                        khấu CTV (%)</label>
                                    <input type="number" id="password-vertical" class="form-control"
                                           name="discount_percent" placeholder="Vui lòng nhập">
                                </div>

                                <div class="mb-1"  style="margin-left: 14px; width: 190px;height: 34px;">
                                    <label style="font-size: 14px;" class="form-label" for="password-vertical">Chiết
                                        khấu khách hàng (%)</label>
                                    <input type="number" id="password-vertical" class="form-control"
                                           name="discount_percent_customer" placeholder="Vui lòng nhập">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    {{--                                    <div class="form-check">--}}
                                    {{--                                        <input type="checkbox" class="form-check-input" name="status" value="1" id="customCheck3">--}}
                                    {{--                                        <label class="form-check-label" for="customCheck3">Cho phép bán tour</label>--}}
                                    {{--                                    </div>--}}

                                    {{--                                    <div class="form-check form-check-primary form-switch">--}}
                                    {{--                                        <input type="checkbox" checked="" class="form-check-input" name="status"--}}
                                    {{--                                               value="1" id="customSwitch3">--}}
                                    {{--                                        <label class="form-check-label" for="customCheck3">Cho phép bán tour</label>--}}
                                    {{--                                    </div>--}}

                                    <div style="margin-left: 40px;" class="form-check form-switch form-check-primary mt-4">
                                        <input type="checkbox" class="form-check-input" id="customSwitch10" checked="" name="status" value="1">
                                        <label class="form-check-label" for="customSwitch10">
                                            <span class="switch-icon-left"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
                                            <span class="switch-icon-right"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span>
                                            <p style="margin-top: 5px;"> Cho phép bán tour </p>
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <div class="col-12" style="margin-left: 170px;">
                                <button type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light" id="updateForm-modal">
                                    Submit
                                </button>
                                {{--                                <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>--}}

                                <a href="#" data-dismiss="modal"
                                   class="btn btn-outline-secondary waves-effect">Cancel</a>


                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function (){

        let self =  $('#editScore');

        self.on('show.bs.modal', function (e){

            const id = $(e.relatedTarget).data('id');
            alert(id);
            fetch('{{ route('tour.edit') }}?id='+id, {
                    headers : {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    }

                }

            ).then(res => res.json()).then(data =>{
                     const {  name, price } = data.data;
                     console.log(data.data);
                self.find('input[name="name"]').val(name);
                self.find('input[name="price"]').val(price);
            })
        })

    })
</script>


