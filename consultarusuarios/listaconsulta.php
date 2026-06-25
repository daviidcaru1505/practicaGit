<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Personas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/dist/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold text-primary">Listado de las Consultas</h1>
            <p class="text-muted">Búsqueda y gestión de perfiles de usuarios</p>
        </div>

        <div class="row justify-content-center mb-5">
            <div class="col-md-8 col-lg-6">
                <form action="" method="GET" class="card p-4 shadow-sm border-0 rounded-4">
                    <div class="input-group input-group-lg">
                        <span class="input-group-text bg-white border-end-0 text-muted rounded-start-3">
                            <i class="bi bi-person-search"></i>
                        </span>
                        <input type="text" name="buscar" class="form-control border-start-0 ps-0 rounded-0" placeholder="Buscar por nombre, identificación o cargo..." required>
                        <button class="btn btn-primary px-4 rounded-end-3" type="submit">Buscar</button>
                    </div>
                </form>
            </div>
        </div>

        <hr class="my-5 text-muted opacity-25">

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            
            <div class="col">
                <div class="card h-100 shadow-sm border-0 rounded-3 text-center p-3">
                    <div class="d-flex justify-content-center pt-3">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=150&h=150&fit=crop" class="rounded-circle object-fit-cover border border-3 border-light shadow-sm" alt="Usuario 1" style="width: 110px; height: 110px;">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title fw-bold mb-1">Camila Restrepo</h5>
                        <p class="text-primary small mb-3">Desarrolladora Frontend</p>
                        <p class="card-text text-muted small">CC. 1.002.345.xxx <br> Correo: camila@example.com</p>
                    </div>
                    <div class="card-footer bg-transparent border-0 pb-3">
                        <button class="btn btn-outline-primary btn-sm rounded-pill px-3">Ver Detalle</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm border-0 rounded-3 text-center p-3">
                    <div class="d-flex justify-content-center pt-3">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=150&h=150&fit=crop" class="rounded-circle object-fit-cover border border-3 border-light shadow-sm" alt="Usuario 2" style="width: 110px; height: 110px;">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title fw-bold mb-1">Carlos Mendoza</h5>
                        <p class="text-primary small mb-3">Administrador de Base de Datos</p>
                        <p class="card-text text-muted small">CC. 1.094.888.xxx <br> Correo: carlos@example.com</p>
                    </div>
                    <div class="card-footer bg-transparent border-0 pb-3">
                        <button class="btn btn-outline-primary btn-sm rounded-pill px-3">Ver Detalle</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm border-0 rounded-3 text-center p-3">
                    <div class="d-flex justify-content-center pt-3">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=150&h=150&fit=crop" class="rounded-circle object-fit-cover border border-3 border-light shadow-sm" alt="Usuario 3" style="width: 110px; height: 110px;">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title fw-bold mb-1">Diana Cárdenas</h5>
                        <p class="text-primary small mb-3">Analista de Sistemas</p>
                        <p class="card-text text-muted small">CC. 1.045.222.xxx <br> Correo: diana@example.com</p>
                    </div>
                    <div class="card-footer bg-transparent border-0 pb-3">
                        <button class="btn btn-outline-primary btn-sm rounded-pill px-3">Ver Detalle</button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/dist/bootstrap.bundle.min.js"></script>
</body>
</html>