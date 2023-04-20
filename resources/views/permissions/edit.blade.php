@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Permiso</h1>
        <form action="{{ route('permissions.update', ['id'=> $permission->id]) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" class="form-control" value="{{old('name', $permission->name)}}" required>
            </div>

            <button type="submit" class="btn btn-primary">Confirmar</button>
        </form>
    </div>
@endsection