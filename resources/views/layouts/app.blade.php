<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

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

        .navbar[ id="nav_header"] {
            background-color: #1a2341;

        }

        .navbar[ id="nav_header"] .navbar-brand {
            color: #f2f3f7;
            font-family: 'Montserrat', sans-serif;
        }

        .aside {
            background-color: #1A2341;
            color: #f2f3f7;
        }
    </style>
</head>

<body>

    @yield('content')

</body>

</html>
