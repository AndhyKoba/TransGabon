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
                            <a class="nav-link" href="{{ url('/admin') }}"><i class='bx bx-globe'></i> Vue d'ensemble</a>
                        </li>
                        <li class="nav-item text-start">
                            <a class="nav-link" aria-current="page" href="{{ url('/admin-suivi-agents') }}"><i class='bx bxs-id-card'></i> Suivi des Agents</a>
                        </li>
                        <li class="nav-item text-start">
                            <a class="nav-link" href="{{ url('/admin-gestion-transports') }}"><i class='bx bx-bus'></i> Gestion des Transports</a>
                        </li>
                        <li class="nav-item text-start">
                            <a class="nav-link active" aria-current="page"  href="{{ url('/admin-gestion-voyages') }}"><i class='bx bxs-map'></i> Gestion des Voyages</a>
                        </li>
                        <li class="nav-item text-start">
                            <a class="nav-link" href="{{ url('/admin-rapport') }}"><i class='bx bx-objects-horizontal-right'></i> Rapport</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="col-lg-9 col-md-8 p-4 vh-100">
            <header class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="h3 mb-0">Gestion des Voyages</h1>
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
            
            <div class="row mb-4 g-4">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Rechercher..." aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Rechercher</button>
                </form>
            </div>
            
            <div class="row mb-4 g-3">
                <div class="col-md-4">
                    <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#ajouterVoyageModal">
                        <i class='bx bx-plus'></i> Ajouter un voyage
                    </button>
                </div>
                <div class="col-md-4">
                    <button type="button" class="btn btn-warning w-100" data-bs-toggle="modal" data-bs-target="#modifierVoyageModal">
                        <i class='bx bx-edit'></i> Modifier un voyage
                    </button>
                </div>
                <div class="col-md-4">
                    <button type="button" class="btn btn-danger w-100" data-bs-toggle="modal" data-bs-target="#supprimerVoyageModal">
                        <i class='bx bx-trash'></i> Supprimer un voyage
                    </button>
                </div>
            </div>

            <div class="modal fade" id="ajouterVoyageModal" tabindex="-1" aria-labelledby="ajouterVoyageModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header bg-primary text-white">
                            <h5 class="modal-title" id="ajouterVoyageModalLabel">Ajouter un nouveau voyage</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="transportVoyage">Moyens de transport</label>
                                        <select class="form-select shadow-sm" id="transportVoyage">
                                            <option selected>🚀 Transport</option>
                                            <option value="avion">✈️ Avion</option>
                                            <option value="bateau">🚢 Bateau</option>
                                            <option value="train">🚆 Train</option>
                                            <option value="bus">🚌 Bus</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="departVoyage">Départ</label>
                                        <input type="text" class="form-control shadow-sm" list="destinations" id="departVoyage" placeholder="Départ">
                                        <datalist id="destinations">
                                            <option value="Libreville"></option>
                                            <option value="Port-Gentil"></option>
                                            <option value="Franceville"></option>
                                            <option value="Moanda"></option>
                                            <option value="Mouila"></option>
                                            <option value="Lambaréné"></option>
                                            <option value="Oyem"></option>
                                            <option value="Tchibanga"></option>
                                            <option value="Makokou"></option>
                                        </datalist>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="arriveeVoyage">Arrivée</label>
                                        <input type="text" class="form-control shadow-sm" list="destinations" id="arriveeVoyage" placeholder="Départ">
                                        <datalist id="destinations">
                                            <option value="Libreville"></option>
                                            <option value="Port-Gentil"></option>
                                            <option value="Franceville"></option>
                                            <option value="Moanda"></option>
                                            <option value="Mouila"></option>
                                            <option value="Lambaréné"></option>
                                            <option value="Oyem"></option>
                                            <option value="Tchibanga"></option>
                                            <option value="Makokou"></option>
                                        </datalist>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="date">Date</label>
                                        <input type="date" class="form-control shadow-sm" id="date">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                            <button type="button" class="btn btn-primary">Enregistrer</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modifierVoyageModal" tabindex="-1" aria-labelledby="modifierVoyageModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header bg-warning text-dark">
                            <h5 class="modal-title" id="modifierVoyageModalLabel">Modifier un voyage</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label for="selectVoyage" class="form-label">Sélectionner le voyage</label>
                                    <select class="form-select" id="selectVoyage">
                                        <option selected>Sélectionner un voyage...</option>
                                        <option value="1">Avion - Libreville/Oyem - 12/04/2025</option>
                                        <option value="2">Mouila - Moanda</option>
                                        <option value="3">Franceville - Oyem</option>
                                    </select>
                                </div>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="editNom" class="form-label">Nom</label>
                                        <input type="text" class="form-control" id="editNom">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="editPrenom" class="form-label">Prénom</label>
                                        <input type="text" class="form-control" id="editPrenom">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="editEmail" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="editEmail">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="editTelephone" class="form-label">Téléphone</label>
                                        <input type="tel" class="form-control" id="editTelephone">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                            <button type="button" class="btn btn-warning">Mettre à jour</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="supprimerVoyageModal" tabindex="-1" aria-labelledby="supprimerVoyageModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-danger text-white">
                            <h5 class="modal-title" id="supprimerVoyageModalLabel">Supprimer un voyage</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Êtes-vous sûr de vouloir supprimer ce voyage ? Cette action est irréversible.</p>
                            <div class="mb-3">
                                <label for="deleteVoyage" class="form-label">Sélectionner le voyage à supprimer</label>
                                <select class="form-select" id="deleteVoyage">
                                    <option selected>Sélectionner un voyage...</option>
                                    <option value="1">Libreville - Port-Gentil</option>
                                    <option value="2">Mouila - Moanda</option>
                                    <option value="3">Franceville - Oyem</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                            <button type="button" class="btn btn-danger">Confirmer la suppression</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card shadow-sm border-0 mt-3" style="height: 60vh;">
                <div class="card-header bg-white border-0 d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Liste des Voyages</h5>
                </div>
                <div class="card-body overflow-auto">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom complet</th>
                                    <th>Email</th>
                                    <th>Téléphone</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>AG-001</td>
                                    <td>Marie Nkoghe</td>
                                    <td>marie.nkoghe@transgabon.ga</td>
                                    <td>+241 06 12 34 56</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modifierVoyageModal">
                                            <i class='bx bx-edit'></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#supprimerVoyageModal">
                                            <i class='bx bx-trash'></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>AG-002</td>
                                    <td>Paul Mba</td>
                                    <td>paul.mba@transgabon.ga</td>
                                    <td>+241 07 65 43 21</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modifierVoyageModal">
                                            <i class='bx bx-edit'></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#supprimerVoyageModal">
                                            <i class='bx bx-trash'></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>AG-003</td>
                                    <td>Justine Obiang</td>
                                    <td>justine.obiang@transgabon.ga</td>
                                    <td>+241 05 55 44 33</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modifierVoyageModal">
                                            <i class='bx bx-edit'></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#supprimerVoyageModal">
                                            <i class='bx bx-trash'></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    
</body>
</html>