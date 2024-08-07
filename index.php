<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet Borne de gel</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        h1 {
            color: #63705D;
        }
    
        .icon-container {
            transition: transform 0.3s;
            background-color: #e0f7e0;
            border-radius: 50%;
            padding: 10px;
            display: inline-block;
        }
     
        .section-title {
            color: darkblue;
        }
        .animated-text {
            animation: colorChange 5s infinite;
        }
        @keyframes colorChange {
            0% { color: black; }
            50% { color: darkcyan; }
            100% { color: black; }
        }
        .profile-section {
            text-align: center;
            margin-top: 50px;
        }
        .profile-section h2 {
            color: #04540B;
            font-family: 'Shadows Into Light Two', cursive; /* Ajout de la police */
            margin-bottom: 30px;
        }
        .profile-section h2:hover {
            color: #11B320; /* Couleur légèrement plus claire */
            
        }
        .profile-section a:hover{
            text-decoration: none;
        }
        /* Ajouter une marge en haut du titre */
        .title-margin {
            margin-top: 30px;
        }
        /* Changer la police et la taille du titre */
        .project-title {
            font-family: 'Shadows Into Light Two', cursive;
            font-size: 60px;
        }
        /* Style personnalisé pour les images */
        .image-container {
            background-color: #CFF6BE;
            border-radius: 10px;
            padding: 10px;
            margin-top: 20px;
            height: 260px; /* Hauteur fixe pour chaque image-container */
        }
    </style>
</head>
<body>

<?php include 'navbar.php'; ?>

<!-- Page content -->
<div class="container">
    <!-- Titre avec marge supplémentaire -->
    <h1 class="text-center title-margin project-title">PROJET BORNE DE GEL</h1>
    <!-- Section pour les sous-titres et les images -->
    <div class="row justify-content-center">
        <!-- Sous-titres et images -->
        <div class="col-md-3 profile-section">
            <div class="image-container">
                <a href="chemin/vers/votre/pdf.pdf" target="_blank">
                    <h2>Rapport du Projet</h2>
                    <img src="img/icon_rapport.png" alt="Rapport" style="width:150px; height:auto;">
                </a>
            </div>
        </div>
        <div class="col-md-3 profile-section">
            <div class="image-container">
                <a href="chemin/vers/votre/pdf.pdf" target="_blank">
                    <h2>Site Web</h2>
                    <img src="img/site-web.jpg" alt="Site Web" style="width:150px; height:auto;">
                </a>
            </div>
        </div>
        <div class="col-md-3 profile-section">
            <div class="image-container">
                <a href="https://trello.com/b/Av16N68U/borne-de-gel" target="_blank">
                    <h2>Organisation</h2>
                    <img src="img/trello-new2041.jpg" alt="Trello" style="width:150px; height:auto;">
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
