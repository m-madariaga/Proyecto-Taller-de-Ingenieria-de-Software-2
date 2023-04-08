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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <style>
        body {
            background-color: #1a2341;
            font-family: 'Montserrat', sans-serif;
        }

        .loginup-form h2, .signup-form {
            color: #1a2341;
            text-align: center;
            margin-bottom: 10%;
        }

        .loginup-form, .signup-form {
            width: 450px;
            margin: 0 auto;
            padding: 30px 0;
            font-size: 15px;
        }

        .loginup-form form, .signup-form {
            border-radius: 3px;
            margin-bottom: 15px;
            background-color: #f2f3f7;
            box-shadow: 0px 2prgb(184, 184, 184)gba(0, 0, 0, 0.3);
            padding: 30px;
        }

        .loginup-form button[id="button-login"], .signup-form button[id="button-save"] {
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

        .loginup-form .text-center[id="havent_register"] {
            color: #f2f3f7;
            
        }

        .loginup-form .text-center a[id="link_register"] {
            color: #f2f3f7;
            text-decoration: underline;
        }
        .loginup-form .form-group, .signup-form {
            margin-bottom: 20px;
        }
        
        .loginup-form .text-center a[id="forgot user"]{
            color: #f2f3f7;
        }

        .signup-form .form-select[id="rol_register"]{
            margin-top: 30px;
            margin-bottom: 15px;

        }
        
    </style>
</head>

<body>

    <div class="pt-5 mt-5">
        @yield('content')
    </div>
</body>

</html>
