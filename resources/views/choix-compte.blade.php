<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Métadonnées de base -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TransGabon</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('icons8-map-32.png') }}" type="image/png">

    <!-- Framework Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <!-- Feuille de style personnalisée -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Icônes Boxicons -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>

<body>
    <!-- Décoration graphique en haut de page avec dégradé -->
    <div class="custom-shape-divider-top-1745201171">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            <defs>
                <style>.shape-fill{fill:url(#gradient);}</style>
                <!-- Dégradé de couleur pour la forme -->
                <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" style="stop-color: #5c7cfa; stop-opacity: 1;"></stop>
                    <stop offset="100%" style="stop-color:rgb(167, 184, 250); stop-opacity: 0.3;"></stop>
                </linearGradient>
            </defs>
        </svg>
    </div>
    
    <!-- Arrière-plans supplémentaires pour les effets visuels -->
    <div class="bg-2"></div>
    <div class="bg-dark-opacity"></div>
    
    <!-- Conteneur principal -->
    <div class="container position-relative">
        <!-- Section principale centrée verticalement et horizontalement -->
        <div class="container row vh-100 justify-content-center align-items-center">
            <!-- Colonne de gauche - Texte d'accueil -->
            <div class="col-12 col-md-6 text-center text-white">
                <h1 class="fs-5">TransGabon, votre voyage simplifié.</h1>
            </div>
            
            <!-- Colonne de droite - Formulaire de sélection -->
            <div class="bg-white col-12 col-md-6 h-75 border border-2 border-light-subtle shadow rounded-3 p-4 gap-2 d-flex flex-column gap-3 mt-3">
                <h2 class="mb-2 mt-2">Connexion</h2>
                <p class="mb-5">Sélectionnez le type de compte que vous souhaitez utiliser pour vous connecter.</p>
                
                <!-- Boutons de sélection du type de compte -->
                <div class="mt-5 d-flex justify-content-center gap-3">
                    <!-- Bouton Client -->
                    <a href="{{ url('/connexion-client') }}" class="btn btn-bleu rounded p-5 fs-4 shadow">Client</a>
                    <!-- Bouton Agent -->
                    <a href="{{ url('/connexion-agent') }}" class="btn btn-bleu rounded p-5 fs-4 shadow">Agent</a>
                </div>
            </div>
        </div>
        
        <!-- Lien de retour à l'accueil -->
        <div class="position-absolute top-0 start-0 mt-4 ms-5">
            <a href="{{ url('/') }}" class="text-decoration-none text-white">
                <i class="bx bxs-left-arrow-alt"></i> Retour à l'accueil
            </a>
        </div>
    </div>
    
    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>