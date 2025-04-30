<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nosotros - Duarte Developers Company</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .about-section {
            padding-top: 100px;
            padding-bottom: 80px;
        }
        .mission-vision-card {
            border-radius: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
        }
        .mission-vision-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        .icon-container {
            width: 80px;
            height: 80px;
            background: rgba(13, 110, 253, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
        }
        .navbar-custom {
            background-color: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
        }
        .btn-custom {
            border-radius: 50px;
            padding: 10px 25px;
        }
        .page-header {
            background: linear-gradient(135deg, #0d6efd 0%, #0dcaf0 100%);
            color: white;
            padding: 60px 0;
            margin-bottom: 50px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="{{ url('/') }}">Duarte Developers Company</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/nosotros') }}" class="nav-link active">Nosotros</a>
                    </li>
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item">
                                <a href="{{ url('/home') }}" class="nav-link">Volver</a>
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

    <!-- Page Header -->
    <header class="page-header">
        <div class="container">
            <h1 class="display-4 fw-bold">Sobre Nosotros</h1>
            <p class="lead">Conozca más sobre Duarte Developers Company y nuestro compromiso con la innovación tecnológica en el sector salud.</p>
        </div>
    </header>

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <div class="row g-5">
                <!-- Misión -->
                <div class="col-lg-6">
                    <div class="card mission-vision-card border-0 shadow-sm">
                        <div class="card-body p-5">
                            <div class="icon-container">
                                <i class="fas fa-bullseye fa-2x text-primary"></i>
                            </div>
                            <h2 class="text-center mb-4">Nuestra Misión</h2>

                            <p class="text-muted">
                                En Duarte Developers Company nos dedicamos a desarrollar soluciones tecnológicas innovadoras que optimicen el almacenamiento, la búsqueda y el acceso seguro a la información en las instituciones prestadoras de servicios de salud. A través de herramientas como SGDEA, contribuimos a preservar la integridad de los datos clínicos, facilitando su disponibilidad para pacientes, entidades prestadoras de salud (EPS) y entes reguladores, cumpliendo con las normativas vigentes y fortaleciendo la eficiencia del sistema de salud.
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Visión -->
                <div class="col-lg-6">
                    <div class="card mission-vision-card border-0 shadow-sm">
                        <div class="card-body p-5">
                            <div class="icon-container">
                                <i class="fas fa-eye fa-2x text-primary"></i>
                            </div>
                            <h2 class="text-center mb-4">Nuestra Visión</h2>
                            <p class="text-muted">
                                Para el año 2030, Duarte Developers Company será reconocida a nivel nacional como una empresa líder en el desarrollo de plataformas tecnológicas que transformen la gestión documental en el sector salud, garantizando seguridad, accesibilidad y cumplimiento normativo mediante soluciones confiables, sostenibles e innovadoras.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Valores -->
            <div class="row mt-5 pt-5">
                <div class="col-12 text-center mb-5">
                    <h2 class="fw-bold">Nuestros Valores</h2>
                    <p class="lead text-muted">Los principios que guían nuestro trabajo diario</p>
                </div>
                
                <div class="col-md-3 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="icon-container">
                                <i class="fas fa-lightbulb fa-2x text-primary"></i>
                            </div>
                            <h4 class="h5 mb-3">Innovación</h4>
                            <p class="text-muted small">Buscamos constantemente nuevas formas de mejorar y evolucionar.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="icon-container">
                                <i class="fas fa-shield-alt fa-2x text-primary"></i>
                            </div>
                            <h4 class="h5 mb-3">Seguridad</h4>
                            <p class="text-muted small">Protegemos la información con los más altos estándares de seguridad.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="icon-container">
                                <i class="fas fa-handshake fa-2x text-primary"></i>
                            </div>
                            <h4 class="h5 mb-3">Compromiso</h4>
                            <p class="text-muted small">Nos dedicamos a cumplir con las necesidades de nuestros clientes.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="icon-container">
                                <i class="fas fa-chart-line fa-2x text-primary"></i>
                            </div>
                            <h4 class="h5 mb-3">Excelencia</h4>
                            <p class="text-muted small">Buscamos la máxima calidad en cada proyecto que desarrollamos.</p>
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