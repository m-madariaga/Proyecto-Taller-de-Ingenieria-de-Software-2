@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Agregar Usuario</h1>
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="rut">RUT:</label>
                <input type="text" name="rut" id="rut" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tipo_de_cuenta">Tipo de cuenta</label>
                <select class="form-control" id="tipo_de_cuenta" name="tipo_de_cuenta">
                    <option value="1">Admin</option>
                    <option value="2">Analista</option>
                    <option value="3">Trabajador</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
    </div>
@endsection
