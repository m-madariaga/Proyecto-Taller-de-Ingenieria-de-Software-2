@extends('layouts.app')

@section('content')
<div class="signup-form">
    <div class="card">
        <div class="card-header">Ingresar rol</div>

        <div class="card-body">
            <form method="POST" action="{{ route('roles.store') }}">
                @csrf

                <div class="row mb-3">
                    <label for="name" class="col-md-4 col-form-label text-md-end">Nombre</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="role_type" class="col-md-4 col-form-label text-md-end">Tipo de rol</label>

                    <div class="col-md-6">
                        <select class="form-control" id="role_type" @error('role_type') is-invalid @enderror" name="role_type">
                            <option value="1">Admin</option>
                            <option value="2">Analista</option>
                            <option value="3">Trabajador</option>
                        </select>

                        @error('role_type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            Ingresar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection