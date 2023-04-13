<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <title>Personal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    {{-- data table --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">

    {{-- nav bar --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Raleway">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="{{ URL::to('assets/css/nav.css') }}">

    {{-- Style CSS --}}
    <link rel="stylesheet" href="{{ URL::to('assets/css/style.css') }}">

    <style>
        body {
            background-color: #0069A5;
            font-family: 'Montserrat', sans-serif;
        }

        .signup-form h2,
        .reset-form h2 {
            color: #1a2341;
            text-align: center;
            margin-bottom: 10%;
        }


        .signup-form,
        .reset-form {
            border-radius: 3px;
            margin-bottom: 15px;
            background-color: #f2f3f7;
            box-shadow: 0px 2prgb(184, 184, 184)gba(0, 0, 0, 0.3);
            padding: 20px;
            width: 700px;
            margin: 0 auto;
            font-size: 15px;
        }

        .loginup-form button[id="button-login"],
        .signup-form button[id="button-save"] {
            background-color: #0069A5;
            color: #f2f3f7;
            font-size: 16px;
            min-width: 140px;
            outline: none !important;
        }


        .loginup-form button[id="button-save"] {
            background-color: #0069A5;
            color: #f2f3f7;
            font-size: 16px;
            min-width: 140px;
            outline: none !important;
        }

        .text-center[id="havent_register"] {
            color: #f2f3f7;

        }

        .text-center a[id="link_register"] {
            color: #f2f3f7;
            text-decoration: underline;
        }

        .form-group,
        .signup-form {
            margin-bottom: 20px;
        }

        .text-center a[id="forgot_user"] {
            color: #0b0b0b;
        }

        .signup-form .form-select[id="rol_register"] {
            margin-top: 20px;
            margin-bottom: 15px;

        }

        .navbar[ id="nav_header"]{
            background-color:  #1a2341;
           
        }

        .navbar[ id="nav_header"] .navbar-brand{
            color: #f2f3f7;
            font-family: 'Montserrat', sans-serif;
        }
        .aside{
            background-color:  #1A2341;
            color: #f2f3f7;
        }
 
     
    </style>


</head>

<body>
    {{-- nav bar header --}}
    @include('header')
    {{-- menu sidebar left --}}
    <div class="container-fluid">
        @include('form_sidebar')
        <div class="row min-vh-100 flex-column flex-md-row">
            {{-- content layout --}}
            @yield('content')

        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                responsive: {
                    details: {
                        display: $.fn.dataTable.Responsive.display.modal({
                            header: function(row) {
                                var data = row.data();
                                return 'Details for ' + data[0] + ' ' + data[1];
                            }
                        }),
                        renderer: $.fn.dataTable.Responsive.renderer.tableAll({
                            tableClass: 'table'
                        })
                    }
                }
            });
        });
    </script>

</body>

</html>
