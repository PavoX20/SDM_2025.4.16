@extends('layouts.app')

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-6">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h2 class="text-center mb-4">Registro de Usuario</h2>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('register.post') }}">
                    @csrf

                    <div class="form-floating mb-3">
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
                        <label for="name">Nombre completo</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
                        <label for="email">Correo electrónico</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" name="password" id="password" class="form-control" required>
                        <label for="password">Contraseña</label>
                    </div>

                    <div class="form-floating mb-4">
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                        <label for="password_confirmation">Confirmar contraseña</label>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg">Registrarse</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
