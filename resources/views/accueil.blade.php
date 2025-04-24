<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Métadonnées de base -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TransGabon</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('icons8-map-32.png') }}" type="image/png">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <!-- Feuille de style personnalisée -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Icônes Boxicons -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>

<body>
    <!-- Arrière-plans pour les effets visuels -->
    <div class="bg"></div>
    <div class="bg-dark-opacity"></div>
    
    <!-- Barre de navigation principale -->
    <nav class="navbar navbar-expand-lg pt-3">
        <div class="container">
            <!-- Logo et nom du site -->
            <a class="navbar-brand text-white d-flex align-items-center gap-2" href="#">
                <img src="{{ asset('Blue icon/icons8-map-windows-10-32.png') }}" alt="Logo" width="32" height="32">
                <span>TransGabon</span>
            </a>
            
            <!-- Bouton pour le menu responsive -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- Contenu du menu -->
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-2">
                    <!-- Lien Accueil -->
                    <li class="nav-item"><a class="nav-link lien-actuel rounded-pill px-3 white-shadow" href="#">Accueil</a></li>
                    
                    <!-- Menu déroulant Destinations -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle px-3 rounded-pill autre-lien" href="#" role="button" data-bs-toggle="dropdown">Destinations</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Libreville</a></li>
                            <li><a class="dropdown-item" href="#">Port-Gentil</a></li>
                            <li><a class="dropdown-item" href="#">Franceville</a></li>
                            <li><a class="dropdown-item" href="#">Moanda</a></li>
                            <li><a class="dropdown-item" href="#">Mouila</a></li>
                            <li><a class="dropdown-item" href="#">Lambaréné</a></li>
                            <li><a class="dropdown-item" href="#">Oyem</a></li>
                            <li><a class="dropdown-item" href="#">Tchibanga</a></li>
                            <li><a class="dropdown-item" href="#">Makokou</a></li>
                        </ul>
                    </li>
                    
                    <!-- Autres liens de navigation -->
                    <li class="nav-item"><a class="nav-link px-3 rounded-pill autre-lien" href="#">À propos</a></li>
                    <li class="nav-item"><a class="nav-link px-3 rounded-pill autre-lien" href="#">Contact</a></li>
                </ul>
                
                <!-- Bouton de connexion -->
                <a href="{{ url('/connexion') }}" class="btn btn-bleu rounded-pill px-4 ">Connexion</a>
            </div>
        </div>
    </nav>

    <!-- Section Hero avec le titre principal -->
    <div class="container text-center text-white hero">
        <p class="fs-4 mt-5">Rapide et efficace</p>
        <h1 class="fs-1 text-uppercase">Bienvenue sur TransGabon</h1>
        <p class="fs-6 small-text mb-5">Votre plateforme de réservation de transports au Gabon</p>
    </div>

    <!-- Formulaire de recherche -->
    <div class="container mt-5 w-75">
        <form class="row g-2 align-items-center bg-white rounded-pill px-4 py-3 flex justify-content-between" method="get">
            <!-- Sélection du moyen de transport -->
            <div class="col-auto">
                <label for="transport" class="visually-hidden">Moyens de transport</label>
                <select class="form-select shadow-sm" id="transport">
                    <option selected>🚀 Transport</option>
                    <option value="avion">✈️ Avion</option>
                    <option value="bateau">🚢 Bateau</option>
                    <option value="train">🚆 Train</option>
                    <option value="bus">🚌 Bus</option>
                </select>
            </div>

            <!-- Champ de départ avec liste de suggestions -->
            <div class="col-auto">
                <label for="depart" class="visually-hidden">Départ</label>
                <input type="text" class="form-control shadow-sm" list="destinations" id="depart" placeholder="Départ">
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

            <!-- Champ d'arrivée avec liste de suggestions -->
            <div class="col-auto">
                <label for="arrivee" class="visually-hidden">Arrivée</label>
                <input type="text" class="form-control shadow-sm" id="arrivee" list="destinations" placeholder="Arrivée">
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

            <!-- Sélection de la date -->
            <div class="col-auto">
                <label for="date" class="visually-hidden">Date</label>
                <input type="date" class="form-control shadow-sm" id="date">
            </div>

            <!-- Bouton de soumission du formulaire -->
            <div class="col-auto">
                <button type="submit" class="btn btn-bleu rounded-circle shadow-sm"><i class='bx bx-search-alt-2' style='color:#ffffff'  ></i></button>
            </div>
        </form>
    </div>

    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</body>
</html>