<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TransGabon | Admin</title>

    <link rel="icon" href="{{ asset('icons8-map-32.png') }}" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container-xxl row m-0 p-0">
        <nav class="col-lg-3 col-md-4 border-end border-2 border-light-subtle bg-white vh-100 navbar-expand-lg sticky-top">
            <div class="container d-flex gap-4 flex-column">
                <a class="navbar-brand d-flex align-items-center gap-2 mt-5 text-center fs-4" href="{{ url('/admin') }}">
                    <img src="{{ asset('Blue icon/icons8-map-windows-10-32.png') }}" alt="Logo" width="32" height="32">
                    <span>TransGabon</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse mt-4" id="navbarContent">
                    <ul class="ms-2 nav flex-column gap-4 mt-5 nav-fill nav-pills nav-justified">
                        <li class="nav-item text-start">
                            <a class="nav-link " href="{{ url('/admin') }}"><i class='bx bx-globe'></i> Vue d'ensemble</a>
                        </li>
                        <li class="nav-item text-start">
                            <a class="nav-link" href="{{ url('/admin-suivi-agents') }}"><i class='bx bxs-id-card'></i> Suivi des Agents</a>
                        </li>
                        <li class="nav-item text-start">
                            <a class="nav-link" href="{{ url('/admin-gestion-transports') }}"><i class='bx bx-bus'></i> Gestion des Transports</a>
                        </li>
                        <li class="nav-item text-start">
                            <a class="nav-link" href="{{ url('/admin-gestion-voyages') }}"><i class='bx bxs-map'></i> Gestion des Voyages</a>
                        </li>
                        <li class="nav-item text-start">
                            <a class="nav-link active" aria-current="page" href="{{ url('/admin-rapport') }}"><i class='bx bx-objects-horizontal-right'></i> Rapport</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="col-lg-9 col-md-8 p-4 vh-100">
            <header class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="h3 mb-0">Rapport</h1>
                <div class="d-flex gap-3">
                    <div class="dropdown">
                    <div class="dropdown">
                        <button class="btn btn-outline-primary dropdown-toggle d-flex align-items-center gap-2" type="button" id="profileDropdown" data-bs-toggle="dropdown">
                            <span>Admin</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#"><i class='bx bx-cog me-2'></i>Paramètres</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{ url('/') }}"><i class='bx bx-log-out me-2'></i>Déconnexion</a></li>
                        </ul>
                    </div>
                </div>
            </header>
            <div class="row mb-4 g-4">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Rechercher..." aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Rechercher</button>
                </form>
            </div>
            <div class="card shadow-sm border-0 mt-5 h-75 ">
                <div class="card-header bg-white border-0 d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Activité récente</h5>
                </div>
                <div class="card-body  overflow-auto">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Moyen de Transport</th>
                                    <th>Description</th>
                                    <th>Agent</th>
                                    <th>Date</th>
                                    <th>Statut</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#TR-001</td>
                                    <td>Avion</td>
                                    <td>Port-Gentil à Libreville</td>
                                    <td>Marie</td>
                                    <td>10/05/2025</td>
                                    <td><span class="badge bg-success">Terminé</span></td>
                                </tr>
                                <tr>
                                    <td>#TR-002</td>
                                    <td>Bateau</td>
                                    <td>Lambaréné à Mouila</td>
                                    <td>Marie</td>
                                    <td>11/02/2025</td>
                                    <td><span class="badge bg-warning">En cours</span></td>
                                </tr>
                                <tr>
                                    <td>#TR-003</td>
                                    <td>Train</td>
                                    <td>Franceville à Port-Gentil</td>
                                    <td>Paul</td>
                                    <td>11/05/2025</td>
                                    <td><span class="badge bg-warning">En cours</span></td>
                                </tr>
                                <tr>
                                    <td>#TR-004</td>
                                    <td>Bus</td>
                                    <td>Libreville à Oyem</td>
                                    <td>Justine</td>
                                    <td>22/05/2025</td>
                                    <td><span class="badge bg-info">Planifié</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> 
</body>
</html>