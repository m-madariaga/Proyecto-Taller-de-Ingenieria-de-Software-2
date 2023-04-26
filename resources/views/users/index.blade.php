@extends('layouts.app')

@section('content')
<div class="container">
    @if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Exito',
                text: '{{ session('success') }}',
                timer: 3000
            });
        </script>
    @endif

    @if(session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: '{{ session('error') }}'
            });
        </script>
    @endif
    <h1>Usuarios</h1>
    <a href="{{ route('users.create') }}" class="btn btn-sm btn-outline-success mb-2"><i class="fa fa-plus"></i></a>
    <table id="users-table" class="display" width="100%">
        <thead>
            <tr>
                <th>Run</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Imagen</th>
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
                        {{ $user->role}}
                    </td>
                    <td>
                        <img src="/imagen/{{$user->image}}" width="60%">
                    </td>
                    <td>
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i></a>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger delete-user" data-id="{{ $user->id }}"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        </form>
                        <script>
                            $(document).on('click', '.delete-user', function(e) {
                                e.preventDefault();
                                var id = $(this).data('id');
                                Swal.fire({
                                    title: '¿Estás seguro?',
                                    text: "¡No podrás revertir esto!",
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonColor: '#3085d6',
                                    cancelButtonColor: '#d33',
                                    confirmButtonText: '¡Sí, bórralo!',
                                    cancelButtonText: 'Cancelar'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        $.ajax({
                                            type: 'DELETE',
                                            url: '/admin/users/' + id,
                                            data: {
                                                id: id,
                                                _token: $('meta[name="csrf-token"]').attr('content')
                                            },
                                            success: function(data) {
                                                Swal.fire({
                                                    icon: 'success',
                                                    title: 'Exito',
                                                    text: '¡Usuario eliminado correctamente!',
                                                    timer: 1000
                                                });
                                                setTimeout(function() {
                                                    location.reload();
                                                }, 1000); // delay for half a second
                                            },
                                            error: function(xhr, status, error) {
                                                console.log(xhr.responseText);
                                            }
                                        });
                                    }
                                });
                            });
                        </script>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
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
</div>
@endsection
