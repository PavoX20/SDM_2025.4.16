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

                <div class="d-flex align-items-center gap-2">
                    <button id="modoToggle" class="btn btn-outline-light btn-sm">Modo Oscuro</button>

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

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Modo oscuro -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const toggle = document.getElementById("modoToggle");
            const body = document.body;

            if (localStorage.getItem("modo") === "oscuro") {
                body.classList.add("modo-oscuro");
                toggle.textContent = "Modo Claro";
            }

            toggle.addEventListener("click", () => {
                body.classList.toggle("modo-oscuro");
                const oscuro = body.classList.contains("modo-oscuro");
                toggle.textContent = oscuro ? "Modo Claro" : "Modo Oscuro";
                localStorage.setItem("modo", oscuro ? "oscuro" : "claro");
            });
        });
    </script>

    <style>
        body {
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .modo-oscuro {
            background-color: #121212;
            color: #f1f1f1;
        }

        .modo-oscuro header.bg-dark {
            background-color: #1e1e1e !important;
        }

        .modo-oscuro .nav-link {
            color: #ddd !important;
        }

        .modo-oscuro .btn-outline-light {
            color: #ddd !important;
            border-color: #555;
        }

        .modo-oscuro .btn-outline-light:hover {
            background-color: #333;
        }

        .modo-oscuro .bg-light {
            background-color: #222 !important;
            color: #eee;
        }
    </style>
</body>

</html>
