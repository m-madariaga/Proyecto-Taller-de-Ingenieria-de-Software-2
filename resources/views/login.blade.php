@extends('layouts.app')
@section('content')
    <div class="loginup-form">
        <form action="">
            @csrf
            <h2>¡Bienvenido!</h2>

            <div class="row mb-3">
                <label for="insert-email"
                    class="col-md-4 col-form-label text-md-end">{{ __('Ingrese Correo') }}</label>

                <div class="col-md-6">
                    <input id="insert-email" type="email" class="form-control" name="insert-email"
                        required autocomplete="email">
                </div>
            </div>

            <div class="row mb-3">
                <label for="insert-password"
                    class="col-md-4 col-form-label text-md-end">{{ __('Ingrese Contraseña') }}</label>

                <div class="col-md-6">
                    <input id="insert-password" type="password" class="form-control" name="insert-password"
                        required autocomplete="password">
                </div>
            </div>

            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Iniciar Sesión') }}
                    </button>
                </div>
            </div>
        </form>
        <div class="text-center"><a id="forgot user" href="">¿Olvidó su nombre de usuario o contraseña?</a></div>
    </div>
@endsection
