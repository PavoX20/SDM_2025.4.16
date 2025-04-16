<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Productos</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <header class="bg-dark text-white p-3 mb-4">
        <div class="container">
            <nav class="nav justify-content-between align-items-center">
                <div>
                    <a class="nav-link text-white d-inline" href="{{ route('productos.Bienvenido') }}">Inicio</a>

                    @auth
                        <a class="nav-link text-white d-inline" href="{{ route('productos.index') }}">Ver productos</a>
                    @endauth
                </div>

                <div>
                    @guest
                        <a class="nav-link text-white d-inline" href="{{ route('register') }}">Registrarse</a>
                        <a class="nav-link text-white d-inline" href="{{ route('login') }}">Iniciar Sesión</a>
                    @endguest

                    @auth
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-link text-white" style="text-decoration: none;">Cerrar Sesión</button>
                        </form>
                    @endauth
                </div>
            </nav>
        </div>
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer class="bg-light text-center py-4 mt-5">
        <p class="mb-0">&copy; 2025 Mi Tienda</p>
        <p class="mb-0">Todos los derechos reservados</p>
    </footer>

    <!-- Bootstrap 5 JS Bundle (opcional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
