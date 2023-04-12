@extends('layouts.app')
@section('content')
    <div class="signup-form">
        <form action="">
            @csrf
            <h2>Registrar</h2>

            <div class="row mb-3">
                <label for="run_register" class="col-md-4 col-form-label text-md-end">{{ __('Ingrese RUN') }}</label>

                <div class="col-md-6">
                    <input id="run_register" type="number" class="form-control" name="run_register" required
                        autocomplete="run_register">
                </div>
            </div>

            <div class="row mb-3">
                <label for="name_register" class="col-md-4 col-form-label text-md-end">{{ __('Ingrese Nombre') }}</label>

                <div class="col-md-6">
                    <input id="name_register" type="name" class="form-control" name="name_register" required
                        autocomplete="name_register">
                </div>
            </div>

            <div class="row mb-3">
                <label for="lastname_register"
                    class="col-md-4 col-form-label text-md-end">{{ __('Ingrese Apellido') }}</label>

                <div class="col-md-6">
                    <input id="lastname_register" type="name" class="form-control" name="lastname_register" required
                        autocomplete="lastname_register">
                </div>
            </div>

            <div class="row mb-3">
                <label for="email_register" class="col-md-4 col-form-label text-md-end">{{ __('Ingrese Correo') }}</label>

                <div class="col-md-6">
                    <input id="email_register" type="email" class="form-control" name="email_register" required
                        autocomplete="email_register">
                </div>
            </div>

            <div class="row mb-3">
                <label for="password_register"
                    class="col-md-4 col-form-label text-md-end">{{ __('Ingrese Contraseña') }}</label>

                <div class="col-md-6">
                    <input id="password_register" type="name" class="form-control" name="password_register" required
                        autocomplete="password_register">
                </div>
            </div>

            <div class="row mb-3 ">
                <div class="col-2"></div>

                <div class="col-8 md-6">
                    <select class="form-select" name="rol_register" id="rol_register" value="{{ old('rol_register') }}">
                        <option selected disabled>--- Rol Seleccionado ---</option>
                        <option value="1">Administrador</option>
                        <option value="2">Analista</option>
                        <option value="3">Trabajador</option>
                    </select>
                </div>
                <div class="col-2"></div>
            </div>

            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Guardar') }}
                    </button>
                </div>
            </div>
        </form>

    </div>
@endsection
