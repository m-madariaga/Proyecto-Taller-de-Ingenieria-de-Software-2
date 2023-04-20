@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Permisos</h1>
    <a href="{{ route('permissions.create') }}" class="btn btn-success mb-2"><i class="fa fa-plus"></i></a>
    <table id="permissions-table" class="display" width="100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <!-- <th>Tipo de rol</th>
                <th>Cantidad de usuarios</th> -->
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($permissions as $permission)
                <tr>
                    <td>{{ $permission->id }}</td>
                    <td>{{ $permission->name }}</td>
                    <td>
                        <a href="{{route('permissions.edit', $permission->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i>
                        </a>
                        <form action="{{ route('permissions.destroy', $permission->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

<script src='https://code.jquery.com/jquery-3.5.1.js'></script>
<script src='https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js'></script>
<script src='https://cdn.datatables.net/searchpanes/2.1.2/js/dataTables.searchPanes.min.js'></script>
<script src='https://cdn.datatables.net/select/1.6.2/js/dataTables.select.min.js'></script>
<script src='https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js'></script>
<script src='https://cdn.datatables.net/colreorder/1.6.2/js/dataTables.colReorder.min.js'></script>
<script src='https://cdn.datatables.net/fixedcolumns/4.2.2/js/dataTables.fixedColumns.min.js'></script>
<script>
    $(document).ready(function () {
        $('#permissions-table').DataTable({
            dom: 'lfrtip',
            scrollX: true,
            scrollCollapse: true,
            autofill: true,
            responsive: true,
            colReorder: true,
            fixedColumns: false,
            "searching": false
            language: {
                url: '//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json'
            },

        });
    });
</script>