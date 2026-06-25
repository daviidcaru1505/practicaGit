<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Personas - Directorio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/dist/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    
    <style>
        /* Estilos personalizados para mejorar la apariencia */
        body {
            background-color: #f4f6f9; /* Fondo gris muy suave */
        }
        .card-profile {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            border: none;
            border-radius: 15px;
        }
        .card-profile:hover {
            transform: translateY(-5px); /* Efecto de elevación al pasar el mouse */
            box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
        }
        .profile-img-container {
            width: 120px;
            height: 120px;
            margin: 0 auto; /* Centrar imagen */
        }
        .profile-img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Asegura que la imagen no se deforme */
            border-radius: 50%; /* Imagen circular */
            border: 4px solid white;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm mb-5">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <i class="bi bi-people-fill me-2"></i>Director de Usuarios
            </a>
        </div>
    </nav>

    <div class="container pb-5">
        
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bold text-dark">Listado de las Consultas</h1>
            <p class="text-muted fs-5">Resultados de la búsqueda de personal</p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            
            <div class="col">
                <div class="card card-profile h-100 shadow-sm p-4 text-center">
                    <div class="profile-img-container mb-3">
                        <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=300&auto=format&fit=crop" class="profile-img" alt="Camila Restrepo">
                    </div>
                    <div class="card-body p-0">
                        <h4 class="card-title fw-bold text-primary mb-1">Camila Restrepo</h4>
                        <p class="text-muted fw-semibold mb-3">Desarrolladora Frontend</p>
                        
                        <div class="bg-light p-3 rounded-3 text-start small mb-3">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="text-muted"><i class="bi bi-card-text me-2"></i>Cédula:</span>
                                <span class="fw-medium">1.002.345.xxx</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span class="text-muted"><i class="bi bi-envelope me-2"></i>Correo:</span>
                                <span class="fw-medium text-truncate ms-2" title="camila@example.com">camila@example.com</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-0 mt-auto p-0 pt-2">
                        <button class="btn btn-outline-primary btn-sm rounded-pill px-4">
                            <i class="bi bi-eye-fill me-1"></i> Ver Perfil Completo
                        </button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card card-profile h-100 shadow-sm p-4 text-center">
                    <div class="profile-img-container mb-3">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=300&auto=format&fit=crop" class="profile-img" alt="Carlos Mendoza">
                    </div>
                    <div class="card-body p-0">
                        <h4 class="card-title fw-bold text-primary mb-1">Carlos Mendoza</h4>
                        <p class="text-muted fw-semibold mb-3">Administrador de BD</p>
                        
                        <div class="bg-light p-3 rounded-3 text-start small mb-3">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="text-muted"><i class="bi bi-card-text me-2"></i>Cédula:</span>
                                <span class="fw-medium">1.094.888.xxx</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span class="text-muted"><i class="bi bi-envelope me-2"></i>Correo:</span>
                                <span class="fw-medium text-truncate ms-2" title="carlos@example.com">carlos@example.com</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-0 mt-auto p-0 pt-2">
                        <button class="btn btn-outline-primary btn-sm rounded-pill px-4">
                            <i class="bi bi-eye-fill me-1"></i> Ver Perfil Completo
                        </button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card card-profile h-100 shadow-sm p-4 text-center">
                    <div class="profile-img-container mb-3">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=300&auto=format&fit=crop" class="profile-img" alt="Diana Cárdenas">
                    </div>
                    <div class="card-body p-0">
                        <h4 class="card-title fw-bold text-primary mb-1">Diana Cárdenas</h4>
                        <p class="text-muted fw-semibold mb-3">Analista de Sistemas</p>
                        
                        <div class="bg-light p-3 rounded-3 text-start small mb-3">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="text-muted"><i class="bi bi-card-text me-2"></i>Cédula:</span>
                                <span class="fw-medium">1.045.222.xxx</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span class="text-muted"><i class="bi bi-envelope me-2"></i>Correo:</span>
                                <span class="fw-medium text-truncate ms-2" title="diana@example.com">diana@example.com</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-0 mt-auto p-0 pt-2">
                        <button class="btn btn-outline-primary btn-sm rounded-pill px-4">
                            <i class="bi bi-eye-fill me-1"></i> Ver Perfil Completo
                        </button>
                    </div>
                </div>
            </div>

        </div> </div> <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/dist/bootstrap.bundle.min.js"></script>
</body>
</html>