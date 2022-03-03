
<div class="card">
    <div class="card-body pd-0">
        <h4 class="card-title mb-0">Danh sách Tours</h4>
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

            </tr>
            </thead>
            <tbody>

        @if(isset($toursSale))
            @foreach($toursSale as $sale)
            <tr>
                <td>{{ $sale->id }} </td>
                <td>{{ $sale->tour->name }}</td>
                <td>{{ number_format($sale->tour->price) }}</td>
                <td>{{ $sale->quatity }}</td>
                <td> <div class="btn btn-secondary">{{ $sale->status }}</div></td>

            </tr>

            @endforeach
        @endif
            </tbody>
        </table>
    </div>


</div>

@push('css')
<style>
    .icon {
        width: 1.4rem;
        height: 1.4rem;
        margin-right: .5rem;
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
<script>
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

            ],

        });
</script>

@endpush