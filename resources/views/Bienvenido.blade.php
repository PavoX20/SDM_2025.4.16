@extends('layouts.app')

@section('content')
<div class="d-flex flex-column align-items-center justify-content-center text-center" style="min-height: 60vh;">
    <div>
        <h1 class="display-5 fw-bold mb-3">Bienvenido al CRUD de Productos</h1>
        <p class="lead mb-4 text-muted text-intro">
            Gestiona tus productos fácilmente con nuestro sistema. Inicia sesión o regístrate para comenzar.
        </p>

        @guest
            <a href="{{ route('login') }}" class="btn btn-primary btn-lg me-2">Iniciar Sesión</a>
            <a href="{{ route('register') }}" class="btn btn-outline-secondary btn-lg">Registrarse</a>
        @endguest

        @auth
            <a href="{{ route('productos.index') }}" class="btn btn-success btn-lg">Ver Productos</a>
        @endauth
    </div>
</div>

<style>
    .modo-oscuro .text-intro {
        color: #bbb !important;
    }
</style>
@endsection
