function delay(fn, ms) {
    let timer = 0
    return function (...args) {
        clearTimeout(timer)
        timer = setTimeout(fn.bind(this, ...args), ms || 300)
    }
}

const getDataInForm = (form, ...fields) => {
    if (!form) {
        return {};
    }
    let dataRequest = {};
    fields.forEach(field => {
        const fieldArray = form.find(field);
        fieldArray.each(function (index, item) {
            let name = item.getAttribute('name');
            dataRequest = {...dataRequest, [name]: item.value}
        })
    })
    return dataRequest;
}

//fill data of form
const fillFormData = (form, data = {}, ...fields) => {
    if (!form) {
        return {};
    }
    fields.forEach(field => {
        const fieldArray = form.find(field);
        fieldArray.each(function (index, item) {
            let name = item.getAttribute('name');
            if (Object.keys(data).includes(name)) {
                item.value = data[name];
            }
        })
    })
    return true;
}

const showErrorInForm = (data = {}, form = 'create-form') => {
    form.find('.invalid-feedback').remove();
    form.find('.is-invalid').removeClass('is-invalid');

    $.each(data, function (index, val) {
        form.find('input[name=' + index + '],select[name=' + index + '],textarea[name=' + index + ']')
            .addClass('is-invalid')
            .parent().append('<div class="invalid-feedback">' +
            '<strong>' + val[0] + '</strong>' +
            '</div>');
    })
    return false;
}

const modalError = message => {
    swal("Thất bại!", message, "error");
}

const modalSuccess = message => {
    swal("Thành công!", message, "success");
}

const strtoi = number => {
    return parseInt(number) || number;
}

const formatNumber = (numbers = 0) => {
    if (typeof (numbers) instanceof Array) {
        for (let [i, money] in numbers.entries()) {
            money = parseInt(money)
            numbers[i] = new Intl.NumberFormat().format(money)
        }
        return numbers
    }
    return new Intl.NumberFormat().format(numbers);
}

const hideValidation = (modal, ...args) => {
    modal.find(args.join(',')).removeClass('is-invalid').removeClass('is-valid').parent().children('.invalid-feedback .valid-feedback').remove();
}

const confirmAlert = (message) => {
    return Swal.fire({
        title: message,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Có',
        cancelButtonText: 'Hủy bỏ',
        customClass: {
            confirmButton: 'btn btn-primary',
            cancelButton: 'btn btn-outline-danger ms-1'
        },
        buttonsStyling: false
    })
}

const successAlert = (message) => {
    Swal.fire({
        icon: 'success',
        title: 'Thành công',
        text: message,
        customClass: {
            confirmButton: 'btn btn-success'
        }
    });
}

const errorAlert = (message) => {
    Swal.fire({
        icon: 'error',
        title: 'Thất bại',
        text: message,
        customClass: {
            confirmButton: 'btn btn-danger'
        }
    });
}