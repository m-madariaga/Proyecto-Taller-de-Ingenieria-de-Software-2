@extends('layouts.app')
@section('content')
<img src="..xampp\htdocs\xampp\Trabajos\Proyecto-Taller-de-Ingenieria-de-Software-2\public\images" title="Logo" alt="Logo">
    <div class="signup-form">
        <form action="">
            @csrf
            <h2>Registrar</h2>
            <div class="form-group col-4">
                <label class="form-label">Nombre</label>
                <input id="name_register" type="name" class="form-control @error('email') is-invalid @enderror" name="name"
                    value="{{ old('name') }}" autocomplete="email" placeholder="Ingrese Nombre">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label class="form-label">Apellido</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" autocomplete="email" placeholder="Ingrese Apellido">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            
            <div class="form-group">
                <label class="form-label">Email</label>
                <input id="email_register" type="email" class="form-control @error('email_register') is-invalid @enderror" name="email"
                    value="{{ old('emai_registerl') }}" autocomplete="email" placeholder="Ingrese Correo">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
          

            <div class="form-group">
                <button id="button-save" type="submit" class="btn-lg btn-block">Guardar</button>
            </div>
        </form>
       
    </div>
@endsection
