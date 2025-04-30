<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Duarte Developers Company</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .hero-section {
            background: linear-gradient(135deg, #0d6efd 0%, #0dcaf0 100%);
            min-height: 100vh;
            color: white;
        }
        .feature-card {
            transition: transform 0.3s ease;
        }
        .feature-card:hover {
            transform: translateY(-10px);
        }
        .navbar-custom {
            background-color: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
        }
        .btn-custom {
            border-radius: 50px;
            padding: 10px 25px;
        }
        .icon-circle {
            width: 80px;
            height: 80px;
            background: rgba(13, 110, 253, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
        }
        .btn-group-custom {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }
        .btn-outline-light {
            border: 2px solid white;
            background: transparent;
            color: white;
            transition: all 0.3s ease;
        }
        .btn-outline-light:hover {
            background: white;
            color: #0d6efd;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="#">Duarte Developers Company</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="nav-link active">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/nosotros') }}" class="nav-link">Nosotros</a>
                    </li>
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item">
                                <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link">Iniciar Sesión</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a href="{{ route('register') }}" class="btn btn-primary btn-custom ms-2">Registrarse</a>
                                </li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section d-flex align-items-center">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h1 class="display-4 fw-bold mb-4">Bienvenido a SGDEA</h1>
                    <p class="lead mb-4">
                        Gracias a la necesidad que tienen las instituciones prestadoras de servicio de guardar información en la actualidad, surge SGDEA con el fin de innovar su metodología de almacenamiento, aplicación de búsqueda; Donde se usa como principal aliado las tecnologías informáticas.
                    </p>
                    <div class="btn-group-custom">
                        <a href="#features" class="btn btn-light btn-lg btn-custom">Conoce más</a>
                        <a href="{{ url('/nosotros') }}" class="btn btn-outline-light btn-lg btn-custom">
                            <i class="fas fa-users me-2"></i>Nosotros
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('assets/LOGO1.png') }}" class="img-fluid" alt="Imagen Login"">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm feature-card">
                        <div class="card-body text-center p-4">
                            <div class="icon-circle">
                                <i class="fas fa-shield-alt fa-2x text-primary"></i>
                            </div>
                            <h3 class="h4 mb-3">Almacenamiento Seguro</h3>
                            <p class="text-muted">Sistema robusto para el almacenamiento seguro de información institucional.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm feature-card">
                        <div class="card-body text-center p-4">
                            <div class="icon-circle">
                                <i class="fas fa-search fa-2x text-primary"></i>
                            </div>
                            <h3 class="h4 mb-3">Búsqueda Eficiente</h3>
                            <p class="text-muted">Herramientas avanzadas para la búsqueda y recuperación de información.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm feature-card">
                        <div class="card-body text-center p-4">
                            <div class="icon-circle">
                                <i class="fas fa-unlock fa-2x text-primary"></i>
                            </div>
                            <h3 class="h4 mb-3">Accesibilidad</h3>
                            <p class="text-muted">Acceso fácil y seguro para todos los usuarios autorizados del sistema.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-light py-4">
        <div class="container text-center">
            <p class="mb-0 text-muted">&copy; {{ date('Y') }} Duarte Developers Company. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
