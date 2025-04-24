<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Métadonnées de base -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TransGabon | Admin</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('icons8-map-32.png') }}" type="image/png">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    
    <!-- Feuille de style personnalisée -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <!-- Icônes Boxicons -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <!-- Conteneur principal avec disposition en ligne -->
    <div class="container-xxl row m-0 p-0">
        <!-- Barre latérale de navigation -->
        <nav class="col-lg-3 col-md-4 border-end border-2 border-light-subtle bg-white vh-100 navbar-expand-lg sticky-top">
            <div class="container d-flex gap-4 flex-column">
                <!-- Logo et nom de l'application -->
                <a class="navbar-brand d-flex align-items-center gap-2 mt-5 text-center fs-4" href="{{ url('/admin') }}">
                    <img src="{{ asset('Blue icon/icons8-map-windows-10-32.png') }}" alt="Logo" width="32" height="32">
                    <span>TransGabon</span>
                </a>
                
                <!-- Bouton pour le menu responsive -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <!-- Contenu du menu de navigation -->
                <div class="collapse navbar-collapse mt-4" id="navbarContent">
                    <ul class="ms-2 nav flex-column gap-4 mt-5 nav-fill nav-pills nav-justified">
                        <!-- Lien Vue d'ensemble -->
                        <li class="nav-item text-start">
                            <a class="nav-link " href="{{ url('/admin') }}"><i class='bx bx-globe'></i> Vue d'ensemble</a>
                        </li>
                        
                        <!-- Lien Suivi des Agents -->
                        <li class="nav-item text-start">
                            <a class="nav-link" href="{{ url('/admin-suivi-agents') }}"><i class='bx bxs-id-card'></i> Suivi des Agents</a>
                        </li>
                        
                        <!-- Lien actif - Gestion des Transports -->
                        <li class="nav-item text-start">
                            <a class="nav-link active" area-current="page" href="{{ url('/admin-gestion-transports') }}"><i class='bx bx-bus'></i> Gestion des Transports</a>
                        </li>
                        
                        <!-- Lien Gestion des Voyages -->
                        <li class="nav-item text-start">
                            <a class="nav-link" href="{{ url('/admin-gestion-voyages') }}"><i class='bx bxs-map'></i> Gestion des Voyages</a>
                        </li>
                        
                        <!-- Lien Rapport -->
                        <li class="nav-item text-start">
                            <a class="nav-link" href="{{ url('/admin-rapport') }}"><i class='bx bx-objects-horizontal-right'></i> Rapport</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Contenu principal -->
        <main class="col-lg-9 col-md-8 p-4 vh-100">
            <!-- En-tête de la page -->
            <header class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="h3 mb-0">Gestion des Transports</h1>
                
                <!-- Menu déroulant du profil admin -->
                <div class="d-flex gap-3">
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
            
            <!-- Barre de recherche -->
            <div class="row mb-4 g-4">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Rechercher..." aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Rechercher</button>
                </form>
            </div>
            
            <!-- Carte contenant le tableau des transports -->
            <div class="card shadow-sm border-0 mt-5 h-75 ">
                <!-- En-tête de la carte -->
                <div class="card-header bg-white border-0 d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Transports Disponibles</h5>
                </div>
                
                <!-- Corps de la carte avec tableau -->
                <div class="card-body overflow-auto">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <!-- En-tête du tableau -->
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
                            
                            <!-- Corps du tableau avec données des transports -->
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
    
    <!-- Scripts JavaScript -->
    
    <!-- Bootstrap Bundle avec Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    
</body>
</html>