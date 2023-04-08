@extends('layouts.app')
@section('content')
    <div class="loginup-form">
        <form action="">
            @csrf
            <h2>¡Bienvenido!</h2>

            <div class="form-group">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" autocomplete="email" placeholder="Ingrese Correo">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <div class="form-group">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" autocomplete="new-password" placeholder="Ingrese Contraseña">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <button id="button-login" type="submit" class="btn-lg btn-block">Inicio Sesión</button>
            </div>
        </form>
        <div class="text-center"><a id="forgot user" href="">¿Olvidó su nombre de usuario o contraseña?</a></div>
    </div>
@endsection
