<div class="modal fade text-start" id="order-modal" tabindex="-1"
     aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <div class="d-flex justify-content-center mb-3">
                        <h2>Tạo đơn hàng mới</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <label>Tên khách hàng: </label>
                            <div class="mb-1">
                                <input type="text" name="customer_name"
                                       placeholder="Vui lòng nhập" class="form-control"/>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label>Thông tin liên hệ: </label>
                            <div class="mb-1">
                                <input type="text" name="customer_info"
                                       placeholder="Email hoặc SĐT" class="form-control"/>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <label>Chọn tour: </label>
                            <div class="mb-1">
                                <select name="tour_id" id="tours" class="form-control">
                                    <option value="" disabled>Vui lòng chọn</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <label>Số lượng vé: </label>
                            <div class="mb-1">
                                <input type="number" min="0" name="quatity"
                                       placeholder="Vui lòng nhập" class="form-control"/>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label>Chọn thời gian đi: </label>
                            <div class="mb-1">
                                <input type="text" name="time_start"
                                       placeholder="Chọn thời gian" class="form-control"/>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label>Mã giới thiệu: </label>
                            <div class="mb-1">
                                <input type="text" name="referral_code"
                                       placeholder="Nhập mã giới thiệu"
                                       class="form-control"/>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 form-group">
                            <label>Ghi chú: </label>
                            <div class="mb-1">
                                                        <textarea name="note" id="" cols="10" rows="5"
                                                                  class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 form-group">
                            <label><b id="total-price">Thành tiền: 0 VNĐ</b> </label>

                        </div>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="button" class="btn btn-primary" id="submit-order">Xác nhận và
                        xuất vé
                    </button>
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Hủy bỏ
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <style>
        .modal-header {
            background-color: #fff !important;
            padding: 0 1.4rem;
        }
    </style>
@endpush

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="/app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>

    <script>
        $(document).ready(function () {
            const modal = $('#order-modal'),
                basicPickr = modal.find('input[name=time_start]');

            let totalPrice = 0, selectedTour = null, discount_minus = false;
            basicPickr.flatpickr({
                enableTime: true,
                dateFormat: "d-m-Y H:i",
            })

            let isValidCode = 0;
            modal.find('input[name="referral_code"]').on('input', delay(function () {
                hideValidation(modal, 'input');
                const referral_code = $(this).val();
                checkPartner({referral_code}).then(resp => {
                    const {data, code, message} = resp.data;
                    if (code === 400) {
                        isValidCode = 0;
                        modal.find('input[name="referral_code"]').addClass('is-invalid').parent().append('<div class="invalid-feedback">' +
                            '<strong>' + message + '</strong>' +
                            '</div>');
                        return -1;
                    }
                    isValidCode = 1;
                    modal.find('input[name="referral_code"]').addClass('is-valid').parent().append('<div class="valid-feedback">' +
                        '<strong>' + message + '</strong>' +
                        '</div>');

                    totalPrice -= (totalPrice * selectedTour.discount_percent_customer / 100);
                    modal.find('#total-price').text(`Thành tiền: ${formatNumber(totalPrice)} VNĐ`);
                    return -1;
                })
            }))
            modal.on('show.bs.modal', function () {
                getTours().then(data => {
                    const tours = data.data.data;
                    tours.forEach((tour) => {
                        modal.find('select[name="tour_id"]').empty();
                        modal.find('select[name="tour_id"]').append(`<option value="">Chọn Tour</option><option value="${tour.id}">${tour.name}</option>`)
                    })

                    modal.find('input[name="quatity"]').on('input', function () {
                        const tickets = $(this).val();

                        selectedTour = tours.filter(tour => tour.id === parseInt(modal.find('select[name="tour_id"]').val()))

                        if (selectedTour.length) {
                            selectedTour = selectedTour[0];
                            totalPrice = parseInt(tickets) * selectedTour.price - (parseInt(tickets) * selectedTour.price * (isValidCode ? selectedTour.discount_percent_customer : 0));

                            modal.find('#total-price').text(`Thành tiền: ${formatNumber(totalPrice)} VNĐ`);
                        }
                    })
                })

            })
            modal.find('#submit-order').on('click', function () {
                const data = getDataInForm(modal, 'input', 'select', 'textarea');
                storeOrder(data).then(resp => {
                    let {data, code, message} = resp.data;
                    if (code === ERROR) {
                        $.each(data, function (index, val) {
                            modal.find('input[name=' + index + '],select[name=' + index + ']')
                                .addClass('is-invalid').parent().append('<div class="invalid-feedback">' +
                                '<strong>' + val[0] + '</strong>' +
                                '</div>');
                        });
                        return -1;
                    }

                    if (code === SUCCESS) {
                        modal.modal('hide');
                        successAlert(message);
                        location.reload();
                        return -1;
                    }
                })
            })
        })
    </script>
@endpush
