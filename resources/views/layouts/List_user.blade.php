@yield('content')
<script src='https://code.jquery.com/jquery-3.5.1.js'></script>
<script src='https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js'></script>
<script src='https://cdn.datatables.net/searchpanes/2.1.2/js/dataTables.searchPanes.min.js'></script>
<script src='https://cdn.datatables.net/select/1.6.2/js/dataTables.select.min.js'></script>
<script src='https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js'></script>
<script src='https://cdn.datatables.net/colreorder/1.6.2/js/dataTables.colReorder.min.js'></script>
<script src='https://cdn.datatables.net/fixedcolumns/4.2.2/js/dataTables.fixedColumns.min.js'></script>
<script>
    $(document).ready(function () {
        $('#users-table').DataTable({
            dom: 'lfrtip',
            scrollX: true,
            scrollCollapse: true,
            autofill: true,
            responsive: true,
            colReorder: true,
            fixedColumns: false,
            language: {
                url: '//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json'
            },

        });
    });
</script>