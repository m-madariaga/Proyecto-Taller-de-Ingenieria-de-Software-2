@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Usuarios</h1>
    <a href="{{ route('users.create') }}" class="btn btn-sm btn-outline-success mb-2">Agregar usuario</a>
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
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-outline-primary">Editar</a>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script src='https://code.jquery.com/jquery-3.5.1.js'></script>
<script src='https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js'></script>
<script src='https://cdn.datatables.net/searchpanes/2.1.2/js/dataTables.searchPanes.min.js'></script>
<script src='https://cdn.datatables.net/select/1.6.2/js/dataTables.select.min.js'></script>
<script src='https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js'></script>
<script src='https://cdn.datatables.net/colreorder/1.6.2/js/dataTables.colReorder.min.js'></script>
<script src='https://cdn.datatables.net/fixedcolumns/4.2.2/js/dataTables.fixedColumns.min.js'></script>
<script>
    $(document).ready(function () {
        $('#users-table').DataTable({
            dom: 'lfrtip',
            scrollX: true,
            scrollCollapse: true,
            autofill: true,
            responsive: true,
            colReorder: true,
            fixedColumns: false,
            language: {
                url: '//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json'
            },

        });
    });
</script>
@endsection
