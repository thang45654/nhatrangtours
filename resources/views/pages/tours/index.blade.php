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
                        <div  class="col-lg-4 col-sm-12">
                            <div class="card card-congratulation-medal">
                                <div class="card-body">
                                    <h5>Doanh thu trong tuần này</h5>
                                    <p class="card-text font-small-3">Số tiền bán vé trong tuần</p>
                                    <h3 class="mb-75 pt-50">
                                        <a href="#"></a>
                                    </h3>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#order-modal">Thêm tour mới</button>

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
                                        <h3 class="fw-bolder"></h3>
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
                                        <h3 class="fw-bolder"></h3>
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
                                        <h3 class="fw-bolder"></h3>
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
                                        <h3 class="fw-bolder"></h3>
                                        <span>Tổng doanh thu</span>
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
                        <div class="card-body pd-0">
                            <h4 class="card-title mb-0">Danh sách đơn mua</h4>
                            <div class="row">
                                <div class="col-md-4 user_role"></div>
                                <div class="col-md-4 user_plan"></div>
                                <div class="col-md-4 user_status"></div>
                            </div>
                        </div>
                        <div class="card-datatable table-responsive pt-0">
                            <table class="user-list-table table">
                                <thead class="table-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Tên tour</th>
                                    <th>Đơn giá</th>
                                    <th>Số lượng vé đã bán</th>
                                    <th>Trạng thái</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                            @foreach($tours as $tour)
                                <tr>
                                    <td>{{ $tour->id }}</td>
                                    <td>{{ $tour->name }}</td>
                                    <td>{{ number_format($tour->price) }}</td>
                                    <td></td>
                                    <td></td>


                                    <td class="d-flex justify-center">
                                        <div class="show-button cursor-pointer"  id="btn-edit-modal" >
                                            <a href="{{ route('admin.tour.show',$tour->id) }}" style="color: #6e6b7b">
                                                <i class="icon"
                                                   data-id=""
                                                   data-feather='eye'></i>
                                            </a>
                                        </div>
                                        <div class="edit-button cursor-pointer" id="btn-edit-modal"
                                             data-bs-toggle="modal"

                                             data-id=" {{ $tour->id }}" data-bs-target="#order-modal-update">

                                            <i class="icon"
                                               data-feather='edit-2'></i>
                                        </div>

                                            <div class="delete-button cursor-pointer" data-id=" {{ $tour->id }}">

                                                <i class="mr-2 icon" data-feather='trash'></i>
                                            </div>



                                    </td>

                                </tr>
                            @endforeach

                                </tbody>
                            </table>
                        </div>
                        <div class="modal fade text-start" id="order-modal" tabindex="-1"
                             aria-labelledby="myModalLabel33" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <form action="#" id="addTours" method="post">
                                        <div class="modal-body">
                                            <div class="d-flex justify-content-center mb-3">
                                                <h2>Tạo tour du lịch mới</h2>
                                            </div>
                                            <div   class="row">


                                                <div class="col-md-12 col-sm-12  mt-1">
                                                    <label>Tên tour du lịch</label>
                                                    <div class="mb-1">
                                                        <input type="text" min="0" name="name"
                                                               placeholder="Vui lòng nhập" class="form-control"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12  mt-1">
                                                    <label>Đơn giá </label>
                                                    <div class="mb-1">
                                                        <input type="number" min="0" name="price"
                                                               placeholder="Vui lòng nhập" class="form-control"/>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-sm-12 mt-1">
                                                    <label>Chiết khấu CTV(%) </label>
                                                    <div class="mb-1">
                                                        <input type="number" name="discount_percent"
                                                               placeholder="Vui lòng nhập" class="form-control"/>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-sm-12  mt-1">
                                                    <label>Chiết khấu khách hàng(%) </label>
                                                    <div class="mb-1">
                                                        <input type="number" name="discount_percent_customer"
                                                               placeholder="Vui lòng nhập"
                                                               class="form-control"/>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-1">

                                                        <div  class="form-check form-switch form-check-primary mt-2">
                                                            <input type="checkbox" class="form-check-input" id="customSwitch10" checked="" name="status" value="1">
                                                            <label class="form-check-label" for="customSwitch10">
                                                                <span class="switch-icon-left"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
                                                                <span class="switch-icon-right"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span>
                                                                <p > Cho phép bán tour </p>
                                                            </label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer d-flex justify-content-center">
                                            <button type="button" class="btn btn-primary" id="submit-order">
                                                Submit
                                            </button>
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade text-start" id="order-modal-update" tabindex="-1"
                             aria-labelledby="myModalLabel33" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <form action="#" method="POST">
                                        <div class="modal-body">
                                            <div class="d-flex justify-content-center mb-3">
                                                <h2>Chỉnh sửa tour</h2>
                                            </div>
                                            <div   class="row">


                                                <div class="col-md-12 col-sm-12  mt-1">
                                                    <label>Tên tour du lịch</label>
                                                    <div class="mb-1">
                                                        <input type="text" name="name"
                                                               placeholder="Vui lòng nhập" class="form-control"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12  mt-1">
                                                    <label>Đơn giá </label>
                                                    <div class="mb-1">
                                                        <input type="number" min="0" name="price"
                                                               placeholder="Vui lòng nhập" class="form-control"/>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-sm-12 mt-1">
                                                    <label>Chiết khấu CTV(%) </label>
                                                    <div class="mb-1">
                                                        <input type="number" name="discount_percent"
                                                               placeholder="Vui lòng nhập" class="form-control"/>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-sm-12  mt-1">
                                                    <label>Chiết khấu khách hàng(%) </label>
                                                    <div class="mb-1">
                                                        <input type="number" name="discount_percent_customer"
                                                               placeholder="Vui lòng nhập"
                                                               class="form-control"/>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-1">

                                                        <div  class="form-check form-switch form-check-primary mt-2">
                                                            <input type="checkbox" class="form-check-input" id="customSwitch10" checked="" name="status" value="1">
                                                            <label class="form-check-label" for="customSwitch10">
                                                                <span class="switch-icon-left"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
                                                                <span class="switch-icon-right"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span>
                                                                <p > Cho phép bán tour </p>
                                                            </label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer d-flex justify-content-center">
                                            <button type="button" class="btn btn-primary" id="submit-update-tour">
                                                Submit
                                            </button>
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                    </div>
                    <!-- list and filter end -->
                </section>
                <!-- users list ends -->
            </div>
        </div>
    </div>

@endsection



@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <style>
        .icon {
            width: 1.4rem;
            height: 1.4rem;
            margin-right: .5rem;
        }

        .modal-header {
            background-color: #fff !important;
            padding: 0 1.4rem;
        }

        .pd-0 {
            padding: 1.5rem 1.5rem 0 1.5rem;
        }

        .mb-0 {
            margin-bottom: 0 !important;
        }
    </style>
@endpush

@push('js')
    <script src="/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
    <script src="/app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js"></script>
    <script src="/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="/app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>


    <script>
        $(document).ready(function () {
            const modal = $('#order-modal'),
                basicPickr = modal.find('input[name=time_start]'),
                modalUpdate = $('#order-modal-update');
            let totalPrice = 0, selectedTour = null, discount_minus = false;
            basicPickr.flatpickr({
                enableTime: true,
                dateFormat: "d-m-Y H:i",
            })
            var dtUserTable = $('.user-list-table');
            dtUserTable.DataTable({
                paging: false,
                dom:
                    '<"d-flex justify-content-between align-items-center header-actions mx-2 row mt-75"' +
                    '<"col-sm-12 col-lg-4 d-flex justify-content-center justify-content-lg-start" l>' +
                    '<"col-sm-12 col-lg-8 ps-xl-75 ps-0"<"dt-action-buttons d-flex align-items-center justify-content-center justify-content-lg-end flex-lg-nowrap flex-wrap"<"me-1"f>B>>' +
                    '>t' +
                    '<"d-flex justify-content-between mx-2 row mb-1"' +
                    '<"col-sm-12 col-md-6"i>' +
                    '<"col-sm-12 col-md-6"p>' +
                    '>',
                language: {
                    sLengthMenu: 'Show _MENU_',
                    search: 'Tìm kiếm',
                    paginate: {
                        // remove previous & next text from pagination
                        previous: '&nbsp;',
                        next: '&nbsp;'
                    }
                },
                // Buttons with Dropdown
                buttons: [
                    {
                        text: 'Thêm  tour mới',
                        className: 'add-new btn btn-primary',
                        attr: {
                            'data-bs-toggle': 'modal',
                            'data-bs-target': '#order-modal'
                        },
                    },
                ],
                // For responsive popup
            });
            $("div.table-title").html('<b>Custom tool bar! Text/images etc.</b>');

            let isValidCode = 0;

          // them tour
            let form =  $('#submit-order');
            form.click(function (e) {

                    e.preventDefault();
                    // xoa border

                    modal.find('.is-invalid').removeClass('is-invalid');
                    modal.find('.invalid-feedback').remove();

                    axios.post( "{{ route('admin.tour.store') }}", {
                        name : modal.find("input[name=name]").val(),
                        price :  modal.find("input[name=price]").val(),
                        discount_percent :modal.find("input[name=discount_percent]").val() ,
                        discount_percent_customer:modal.find("input[name=discount_percent_customer]").val(),
                        status:modal.find("checkbox[name=status]").val()

                    }).then(function (response){
                        console.log(response);
                        // đóng modal
                        modal.hide();
                        // thông báo alert
                        Swal.fire({
                            title:"Bạn đã thêm tour thành công",
                            icon:'success'
                        }).then(function (res){

                            location.reload();
                        });
                    }).catch(function (error){

                        $.each(error.response.data.errors, function (index, value) {
                            modal.find('input[name=' + index + '], select[name='+index+']').addClass('is-invalid')
                                .parent().append('<div class="invalid-feedback text-danger">' + value[0] + '</div>');
                        });


                    });
                });

            // sửa tours

            let updateModal =  $('#order-modal-update');
            // lay dư lieu
            let id = null;
            updateModal.on('show.bs.modal', function (e){
                     id = $(e.relatedTarget).data('id');

                    fetch('{{ route('admin.get.tour') }}?id='+id,
                        {
                            headers : {
                                'Content-Type': 'application/json',
                                'Accept': 'application/json'
                            }

                        }
                    ).then(res => res.json()).then(data => {
                            const { name, price,discount_percent,discount_percent_customer, status  } = data.data;
                            console.log(data.data);
                        updateModal.find('input[name="name"]').val(name);
                        updateModal.find('input[name="price"]').val(price);
                        updateModal.find('input[name="discount_percent"]').val(discount_percent);
                        updateModal.find('input[name="discount_percent_customer"]').val(discount_percent_customer);
                        updateModal.find('checkbox[name="status"]').val(status);

                    })
            })
            $('#submit-update-tour').click(function (e) {

                e.preventDefault();
                // xoa border

                updateModal.find('.is-invalid').removeClass('is-invalid');
                updateModal.find('.invalid-feedback').remove();
                let url = "{{ route('admin.update.tour','') }}/"+id;

                axios.post( url, {
                    name : updateModal.find("input[name=name]").val(),
                    price :  updateModal.find("input[name=price]").val(),
                    discount_percent :updateModal.find("input[name=discount_percent]").val() ,
                    discount_percent_customer:updateModal.find("input[name=discount_percent_customer]").val(),
                    status:updateModal.find("checkbox[name=status]").val()

                }).then(function (response){
                    console.log(response);
                    // đóng modal
                    updateModal.hide();
                    // thông báo alert
                    Swal.fire({
                        title:"Bạn đã sửa tour thành công",
                        icon:'success'
                    }).then(function (res){

                        location.reload();
                    });


                }).catch(function (error){

                    $.each(error.response.data.errors, function (index, value) {
                        updateModal.find('input[name=' + index + '], select[name='+index+']').addClass('is-invalid')
                            .parent().append('<div class="invalid-feedback text-danger">' + value[0] + '</div>');
                    });


                });
            });




            $('.delete-button').on('click', function (e) {


                const id = $(this).attr('data-id');

            Swal.fire({
                title:"Bạn có chắc chắn muốn xóa không?",
                icon:'warning',
                confirmButtonText:"Đồng ý",
                cancelButtonText:"Hủy",
                showCancelButton: true,

            }).then(function (res){
                if(res.isConfirmed){
                    axios.get('{{ route('admin.tour.delete','') }}/'+id)
                        .then(function (response){
                            console.log(response);
                            Swal.fire({
                                title:'Bạn đã xóa thành công !',
                                icon:'success'
                            }).then(function (res){
                                location.reload();
                            })
                        }).catch(function (error){
                        console.log(error);
                    })
                }
            })


            })
        })

    </script>
@endpush