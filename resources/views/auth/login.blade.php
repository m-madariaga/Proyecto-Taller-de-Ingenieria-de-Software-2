@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div role="main">
                <div class="row justify-content-center"></div>
                <div class="row justify-content-center my-4">
                    <div class="col-12 col-md-12 col-lg-8">
                        <div class="card loginpanel">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-md-6 instructions">
                                        <h2>Bienvenidos</h2>
                                        <hr align="letf">
                                        <h2>A nuestro Sistema</h2>
                                    </div>
                                    <div class="col-md-6 form">
                                        <form action="{{ route('login') }}" method="post">
                                            @csrf
                                            <h2 id="user_login">Ingrese su usuario</h2>
                                            <div class="row mb-3">
                                                <label for="insert-email"
                                                    class="col-md-4 col-form-label text-md-end">{{ __('Ingrese Correo') }}</label>

                                                <div class="col-md-6">
                                                    <input id="insert-email" type="email" class="form-control"
                                                        name="insert-email" required autocomplete="email">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="insert-password"
                                                    class="col-md-4 col-form-label text-md-end">{{ __('Ingrese Contraseña') }}</label>

                                                <div class="col-md-6">
                                                    <input id="insert-password" type="password" class="form-control"
                                                        name="insert-password" required autocomplete="password">
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
                                        <div class="text-center"><a id="forgot_user" href="">¿Olvidó su nombre de
                                                usuario o contraseña?</a></div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection



</div>
