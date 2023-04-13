@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Usuarios</h1>
    <a href="{{ route('users.create') }}" class="btn btn-success mb-2">Agregar usuario</a>
    <table id="users-table" class="display" width="100%">
        <thead>
            <tr>
                <th>Run</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Tipo de cuenta</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->run }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        {{ $user->getTipoDeCuenta($user->tipo_de_cuenta)}}
                    </td>
                    <td>
                        <a href="{{ route('users.edit', $user->rut) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('users.destroy', $user->rut) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
