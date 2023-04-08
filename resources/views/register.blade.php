@extends('layouts.app')
@section('content')
<img src="..xampp\htdocs\xampp\Trabajos\Proyecto-Taller-de-Ingenieria-de-Software-2\public\images" title="Logo" alt="Logo">
    <div class="signup-form">
        <form action="">
            @csrf
            <h2>Registrar</h2>

            <div class="form-group ">
                <label class="form-label">RUN</label>
                <input id="run_register" type="int" class="form-control @error('run_register') is-invalid @enderror" name="run_register"
                    value="{{ old('run_register') }}" autocomplete="run_register" placeholder="Ingrese RUN">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div> 


            <div class="form-group ">
                <label class="form-label">Nombre</label>
                <input id="name_register" type="name" class="form-control @error('name_register') is-invalid @enderror" name="name_register"
                    value="{{ old('name_register') }}" autocomplete="name_register" placeholder="Ingrese Nombre">
                @error('name_register')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label class="form-label">Apellidos</label>
                <input id="lastname_register" type="lastname" class="form-control @error('lastname_register') is-invalid @enderror" name="lastname_register"
                    value="{{ old('lastname_register') }}" autocomplete="lastname_register" placeholder="Ingrese Apellido">
                @error('lastname_register')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            

            <div class="form-group">
                <label class="form-label">Email</label>
                <input id="email_register" type="email" class="form-control @error('email_register') is-invalid @enderror" name="email_register"
                    value="{{ old('email_register') }}" autocomplete="email_register" placeholder="Ingrese Correo">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
          

            <select class="form-select" name="rol_register" id="rol_register" value="{{old('rol_register')}}">
                <option selected disabled>---Rol Seleccionado---</option>
                <option value="1">Administrador</option>
                <option value="2">Analista</option>
                <option value="3">Trabajador</option>
            </select>

            <div class="form-group">
                <button id="button-save" type="submit" class="btn-lg btn-block">Guardar</button>
            </div>
        </form>
       
    </div>
@endsection
