@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Rol</h1>
        <form action="{{ route('roles.update', ['id'=> $role->id]) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" class="form-control" value="{{old('name', $role->name)}}" required>
            </div>
            <div class="form-group">
                <label for="role_type">Tipo de rol</label>
                <select class="form-control" id="role_type" name="role_type" >
                    <option value="1"
                    @if($role->role_type==1)
                    selected='selected'
                    @endif>Admin</option>
                    <option value="2"
                    @if($role->role_type==2)
                    selected='selected'
                    @endif>Analista</option>
                    <option value="3"
                    @if($role->role_type==3)
                        selected='selected'
                    @endif>Trabajador</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Confirmar</button>
        </form>
    </div>
@endsection