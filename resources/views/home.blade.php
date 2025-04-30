@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="hero-section py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h1 class="display-4 fw-bold mb-4">Sistema de Gestión Documental Electrónico de Archivo</h1>
                <p class="lead mb-4">
                    Optimice la gestión de sus documentos con nuestra plataforma integral que permite almacenar, organizar, buscar y compartir información de manera segura y eficiente.
                </p>
                <div class="d-flex gap-3">
                    <a href="#features" class="btn btn-light btn-lg">Explorar características</a>
                    <a href="#process" class="btn btn-outline-light btn-lg">Ver proceso</a>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('assets/FONDO.png') }}" class="img-fluid" alt="Imagen Login">
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section id="features" class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Características Principales</h2>
            <p class="lead text-muted">Todo lo que necesita para una gestión documental eficiente</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="icon-circle mb-4">
                            <i class="fas fa-folder-open fa-2x text-primary"></i>
                        </div>
                        <h3 class="h4 mb-3">Organización Documental</h3>
                        <p class="text-muted">Clasificación y categorización avanzada de documentos con metadatos personalizables.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="icon-circle mb-4">
                            <i class="fas fa-search fa-2x text-primary"></i>
                        </div>
                        <h3 class="h4 mb-3">Búsqueda Avanzada</h3>
                        <p class="text-muted">Encuentre documentos rápidamente con búsqueda por texto completo, filtros y etiquetas.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="icon-circle mb-4">
                            <i class="fas fa-shield-alt fa-2x text-primary"></i>
                        </div>
                        <h3 class="h4 mb-3">Seguridad y Control</h3>
                        <p class="text-muted">Acceso basado en roles, auditoría de actividades y protección de datos sensibles.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="icon-circle mb-4">
                            <i class="fas fa-sync-alt fa-2x text-primary"></i>
                        </div>
                        <h3 class="h4 mb-3">Flujos de Trabajo</h3>
                        <p class="text-muted">Automatice procesos de aprobación, revisión y distribución de documentos.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="icon-circle mb-4">
                            <i class="fas fa-history fa-2x text-primary"></i>
                        </div>
                        <h3 class="h4 mb-3">Control de Versiones</h3>
                        <p class="text-muted">Mantenga un historial completo de cambios y versiones de sus documentos.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="icon-circle mb-4">
                            <i class="fas fa-chart-line fa-2x text-primary"></i>
                        </div>
                        <h3 class="h4 mb-3">Análisis y Reportes</h3>
                        <p class="text-muted">Obtenga insights sobre el uso del sistema con reportes personalizables.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section id="process" class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Proceso de Implementación</h2>
            <p class="lead text-muted">Pasos sencillos para comenzar a usar SGDEA</p>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="process-step">
                    <h4 class="mb-3">1. Registro y Configuración</h4>
                    <p class="text-muted">Cree su cuenta y configure las preferencias iniciales del sistema según las necesidades de su organización.</p>
                </div>
                <div class="process-step">
                    <h4 class="mb-3">2. Carga de Documentos</h4>
                    <p class="text-muted">Importe sus documentos existentes o comience a cargar nuevos archivos al sistema.</p>
                </div>
                <div class="process-step">
                    <h4 class="mb-3">3. Organización y Clasificación</h4>
                    <p class="text-muted">Estructure sus documentos en carpetas y aplique etiquetas para facilitar su localización.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="process-step">
                    <h4 class="mb-3">4. Configuración de Permisos</h4>
                    <p class="text-muted">Defina roles y permisos para controlar quién puede acceder y modificar cada documento.</p>
                </div>
                <div class="process-step">
                    <h4 class="mb-3">5. Implementación de Flujos de Trabajo</h4>
                    <p class="text-muted">Configure procesos automatizados para la aprobación y distribución de documentos.</p>
                </div>
                <div class="process-step">
                    <h4 class="mb-3">6. Capacitación y Uso</h4>
                    <p class="text-muted">Capacite a su equipo y comience a utilizar el sistema para mejorar la gestión documental.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Lo que dicen nuestros usuarios</h2>
            <p class="lead text-muted">Experiencias de organizaciones que han implementado SGDEA</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="icon-circle" style="width: 50px; height: 50px; margin-right: 15px;">
                                <i class="fas fa-hospital fa-lg text-primary"></i>
                            </div>
                            <div>
                                <h5 class="mb-0">Hospital San Vicente</h5>
                                <p class="text-muted small mb-0">Sector Salud</p>
                            </div>
                        </div>
                        <p class="mb-0">"SGDEA ha transformado nuestra gestión documental. Ahora podemos encontrar cualquier expediente en segundos y hemos reducido el espacio físico de almacenamiento en un 70%."</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="icon-circle" style="width: 50px; height: 50px; margin-right: 15px;">
                                <i class="fas fa-building fa-lg text-primary"></i>
                            </div>
                            <div>
                                <h5 class="mb-0">Clínica Los Andes</h5>
                                <p class="text-muted small mb-0">Sector Salud</p>
                            </div>
                        </div>
                        <p class="mb-0">"La implementación de SGDEA nos ha permitido cumplir con todas las normativas de protección de datos y ha mejorado significativamente la eficiencia de nuestros procesos administrativos."</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="icon-circle" style="width: 50px; height: 50px; margin-right: 15px;">
                                <i class="fas fa-clinic-medical fa-lg text-primary"></i>
                            </div>
                            <div>
                                <h5 class="mb-0">EPS Salud Total</h5>
                                <p class="text-muted small mb-0">Sector Salud</p>
                            </div>
                        </div>
                        <p class="mb-0">"Con SGDEA hemos logrado centralizar toda nuestra documentación y mejorar la colaboración entre departamentos. El soporte técnico es excelente y siempre están disponibles para ayudarnos."</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-primary text-white">
    <div class="container text-center">
        <h2 class="fw-bold mb-4">¿Listo para transformar su gestión documental?</h2>
        <p class="lead mb-4">Únase a las organizaciones que ya están optimizando sus procesos con SGDEA</p>
        <div class="d-flex gap-3 justify-content-center">
            <a href="#" class="btn btn-light btn-lg">Comenzar ahora</a>
            <a href="#features" class="btn btn-outline-light btn-lg">Más información</a>
        </div>
    </div>
</section>

<style>
    .hero-section {
        background: linear-gradient(135deg, #0d6efd 0%, #0dcaf0 100%);
    }
    .icon-circle {
        width: 80px;
        height: 80px;
        background: rgba(13, 110, 253, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
    }
    .process-step {
        position: relative;
        padding-left: 30px;
        margin-bottom: 20px;
    }
    .process-step:before {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 2px;
        background: #0d6efd;
    }
    .process-step:after {
        content: "";
        position: absolute;
        left: -8px;
        top: 0;
        height: 18px;
        width: 18px;
        border-radius: 50%;
        background: #0d6efd;
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
@endsection
