@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Usuarios</h1>
        <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Agregar Usuario</a>
        <table class="table">
            <thead>
                <tr>
                    <th>RUT</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Tipo de cuenta</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->rut }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->tipo_de_cuenta }}</td>
                        <td>
                            <form action="{{ route('users.destroy', $user->rut) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('users.edit', $user->rut) }}" class="btn btn-primary btn-sm">Editar</a>
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
