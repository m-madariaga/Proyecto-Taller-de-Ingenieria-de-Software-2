<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href='https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css' rel='stylesheet'>
    <link href='https://cdn.datatables.net/searchpanes/2.1.2/css/searchPanes.dataTables.min.css' rel='stylesheet'>
    <link href='https://cdn.datatables.net/select/1.6.2/css/select.dataTables.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<../../assets/template/datatables.net-bs/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/colreorder/1.6.2/css/colReorder.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/4.2.2/css/fixedColumns.dataTables.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</head>
<body>
    <div id="app">

    </div>

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

</body>
</html>
