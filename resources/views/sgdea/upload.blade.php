@extends('layouts.app')

@section('content')
<div class="container-fluid p-0">
    <!-- Navbar con categorías -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">SGDEA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCategories" aria-controls="navbarCategories" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCategories">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">
                            <i class="fas fa-home me-1"></i> Inicio
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#historia-clinica" data-bs-toggle="tab">
                            Historias Clínicas <span class="badge bg-light text-primary">24</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#facturas" data-bs-toggle="tab">
                            Facturas <span class="badge bg-light text-primary">18</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#actas" data-bs-toggle="tab">
                            Actas <span class="badge bg-light text-primary">12</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#eventos-adversos" data-bs-toggle="tab">
                            Eventos Adversos <span class="badge bg-light text-primary">7</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#reparaciones" data-bs-toggle="tab">
                            Reparaciones <span class="badge bg-light text-primary">15</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#guias" data-bs-toggle="tab">
                            Guías <span class="badge bg-light text-primary">9</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#planes" data-bs-toggle="tab">
                            Planes de Acción <span class="badge bg-light text-primary">11</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#otros" data-bs-toggle="tab">
                            Otros <span class="badge bg-light text-primary">5</span>
                        </a>
                    </li>
                </ul>
                <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#uploadModal">
                    <i class="fas fa-upload me-2"></i>Subir Documento
                </button>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <!-- Filtros -->
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-light">
                        <h5 class="mb-0">Filtros</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="dateRange" class="form-label">Rango de Fechas</label>
                            <input type="text" class="form-control" id="dateRange" placeholder="Seleccionar fechas">
                        </div>
                        <div class="mb-3">
                            <label for="searchInput" class="form-label">Buscar</label>
                            <input type="text" class="form-control" id="searchInput" placeholder="Buscar documentos...">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Estado</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="estado1" checked>
                                <label class="form-check-label" for="estado1">Activo</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="estado2">
                                <label class="form-check-label" for="estado2">Archivado</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="estado3">
                                <label class="form-check-label" for="estado3">Pendiente de revisión</label>
                            </div>
                        </div>
                        <button class="btn btn-primary w-100">Aplicar Filtros</button>
                    </div>
                </div>
            </div>
            
            <div class="col-md-9">
                <!-- Contenido principal -->
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-white d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Documentos</h5>
                        <div class="btn-group">
                            <button class="btn btn-outline-secondary btn-sm">
                                <i class="fas fa-th-large"></i>
                            </button>
                            <button class="btn btn-outline-secondary btn-sm">
                                <i class="fas fa-list"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <!-- Pestaña de Historias Clínicas -->
                            <div class="tab-pane fade show active" id="historia-clinica">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h4>Historias Clínicas</h4>
                                </div>
                                
                                <!-- Tabla de documentos -->
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nombre del Documento</th>
                                                <th scope="col">Paciente</th>
                                                <th scope="col">Fecha</th>
                                                <th scope="col">Tamaño</th>
                                                <th scope="col">Estado</th>
                                                <th scope="col">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Historia Clínica #12345</td>
                                                <td>Juan Pérez</td>
                                                <td>15/04/2023</td>
                                                <td>2.4 MB</td>
                                                <td><span class="badge bg-success">Activo</span></td>
                                                <td>
                                                    <div class="btn-group btn-group-sm">
                                                        <button class="btn btn-outline-primary"><i class="fas fa-eye"></i></button>
                                                        <button class="btn btn-outline-secondary"><i class="fas fa-download"></i></button>
                                                        <button class="btn btn-outline-danger"><i class="fas fa-trash"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Historia Clínica #12346</td>
                                                <td>María López</td>
                                                <td>18/04/2023</td>
                                                <td>1.8 MB</td>
                                                <td><span class="badge bg-success">Activo</span></td>
                                                <td>
                                                    <div class="btn-group btn-group-sm">
                                                        <button class="btn btn-outline-primary"><i class="fas fa-eye"></i></button>
                                                        <button class="btn btn-outline-secondary"><i class="fas fa-download"></i></button>
                                                        <button class="btn btn-outline-danger"><i class="fas fa-trash"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Historia Clínica #12347</td>
                                                <td>Carlos Rodríguez</td>
                                                <td>20/04/2023</td>
                                                <td>3.2 MB</td>
                                                <td><span class="badge bg-warning">Pendiente</span></td>
                                                <td>
                                                    <div class="btn-group btn-group-sm">
                                                        <button class="btn btn-outline-primary"><i class="fas fa-eye"></i></button>
                                                        <button class="btn btn-outline-secondary"><i class="fas fa-download"></i></button>
                                                        <button class="btn btn-outline-danger"><i class="fas fa-trash"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                
                                <!-- Paginación -->
                                <nav aria-label="Page navigation" class="mt-4">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Anterior</a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Siguiente</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            
                            <!-- Otras pestañas (similares a la anterior) -->
                            <div class="tab-pane fade" id="facturas">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h4>Facturas</h4>
                                </div>
                                <p>Contenido de facturas...</p>
                            </div>
                            <div class="tab-pane fade" id="actas">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h4>Actas</h4>
                                </div>
                                <p>Contenido de actas...</p>
                            </div>
                            <div class="tab-pane fade" id="eventos-adversos">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h4>Eventos Adversos</h4>
                                </div>
                                <p>Contenido de eventos adversos...</p>
                            </div>
                            <div class="tab-pane fade" id="reparaciones">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h4>Reparaciones de Equipos</h4>
                                </div>
                                <p>Contenido de reparaciones...</p>
                            </div>
                            <div class="tab-pane fade" id="guias">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h4>Guías</h4>
                                </div>
                                <p>Contenido de guías...</p>
                            </div>
                            <div class="tab-pane fade" id="planes">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h4>Planes de Acción</h4>
                                </div>
                                <p>Contenido de planes de acción...</p>
                            </div>
                            <div class="tab-pane fade" id="otros">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h4>Otros Documentos</h4>
                                </div>
                                <p>Contenido de otros documentos...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal para subir documentos -->
<div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="uploadModalLabel">Subir Nuevo Documento</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="documentType" class="form-label">Tipo de Documento</label>
                        <select class="form-select" id="documentType" required>
                            <option value="" selected disabled>Seleccionar tipo de documento</option>
                            <option value="historia-clinica">Historia Clínica</option>
                            <option value="factura">Factura</option>
                            <option value="acta">Acta</option>
                            <option value="evento-adverso">Evento Adverso</option>
                            <option value="reparacion">Reparación de Equipo</option>
                            <option value="guia">Guía</option>
                            <option value="plan">Plan de Acción</option>
                            <option value="otro">Otro</option>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label for="documentTitle" class="form-label">Título del Documento</label>
                        <input type="text" class="form-control" id="documentTitle" placeholder="Ej: Historia Clínica #12345" required>
                    </div>
                    
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="patientName" class="form-label">Nombre del Paciente</label>
                            <input type="text" class="form-control" id="patientName" placeholder="Nombre del paciente">
                        </div>
                        <div class="col-md-6">
                            <label for="documentDate" class="form-label">Fecha del Documento</label>
                            <input type="date" class="form-control" id="documentDate" required>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="documentDescription" class="form-label">Descripción</label>
                        <textarea class="form-control" id="documentDescription" rows="3" placeholder="Breve descripción del documento"></textarea>
                    </div>
                    
                    <div class="mb-3">
                        <label for="documentTags" class="form-label">Etiquetas</label>
                        <input type="text" class="form-control" id="documentTags" placeholder="Separar etiquetas con comas">
                        <div class="form-text">Ej: urgencia, cardiología, pediatría</div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="documentFile" class="form-label">Archivo</label>
                        <input class="form-control" type="file" id="documentFile" required>
                        <div class="form-text">Formatos permitidos: PDF, DOC, DOCX, XLS, XLSX, JPG, PNG (máx. 10MB)</div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="documentAccess" class="form-label">Nivel de Acceso</label>
                        <select class="form-select" id="documentAccess">
                            <option value="public">Público</option>
                            <option value="private" selected>Privado</option>
                            <option value="restricted">Restringido</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Subir Documento</button>
            </div>
        </div>
    </div>
</div>

<style>
    .navbar {
        box-shadow: 0 2px 4px rgba(0,0,0,.1);
    }
    
    .navbar .nav-link {
        padding: 0.5rem 1rem;
        position: relative;
    }
    
    .navbar .nav-link.active {
        font-weight: 600;
    }
    
    .navbar .nav-link.active:after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 3px;
        background-color: #fff;
    }
    
    .table th {
        font-weight: 600;
    }
    
    .badge {
        font-weight: 500;
    }
    
    @media (max-width: 768px) {
        .col-md-3 {
            margin-bottom: 20px;
        }
    }
</style>

<script>
    // Inicializar el selector de fechas
    document.addEventListener('DOMContentLoaded', function() {
        // Aquí iría la inicialización de componentes como datepicker, etc.
    });
</script>
@endsection 