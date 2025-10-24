<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('titulo', 'ElectroSmart')</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    
</head>
<body>

    <header>
       
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="{{ route('inicio') }}">ElectroSmart</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarMenu">
                    <ul class="navbar-nav ms-auto">
                         <li class="nav-item"><a class="nav-link" href="{{ route('buscar') }}">Buscar</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('inicio') }}">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('catalogo') }}">Categorías</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('contacto') }}">Contacto</a></li>

                        @guest
                            {{-- OPCIONES PARA INVITADOS (Mismo aspecto que la segunda imagen) --}}
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Inicio de Sesión</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Registro</a></li>
                        @endguest

                        @auth
                            {{-- OPCIONES PARA USUARIOS AUTENTICADOS --}}
                            <li class="nav-item"><a class="nav-link" href="{{ route('profile.edit') }}">Mi Perfil</a></li>
                            <li class="nav-item">
                                <form method="POST" action="{{ route('logout') }}" class="m-0">
                                    @csrf
                                    <a class="nav-link" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                        Cerrar Sesión
                                    </a>
                                </form>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mt-4">
        @yield('contenido')
    </main>

    <footer class="text-center py-3 bg-light border-top">
        <p>© 2025 ElectroSmart</p>
    </footer>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>