@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Agregar Rol</h1>
        <form action="{{ route('roles.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="role_type">Tipo de rol</label>
                <select class="form-control" id="role_type" name="role_type">
                    <option value="1">Admin</option>
                    <option value="2">Analista</option>
                    <option value="3">Trabajador</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
    </div>
@endsection