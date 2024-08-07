<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Ton CSS personnalisé -->
    <style>
        .navbar-custom {
            margin-left: 100px; /* Marge à gauche */
            margin-right: 100px; /* Marge à droite */
        
        }

        .navbar-light .navbar-brand {
            font-size: 50px; /* Taille de police plus grande */
            font-family: 'Livvic', sans-serif; /* Utilisation de la police Livvic */
            text-transform: uppercase; /* Conversion en majuscules */
            color: lightgreen; /* Couleur de texte bleue */
        }

        .navbar-light .navbar-nav .nav-link {
            color: grey; /* Couleur de texte grise */
            transition: background-color 0.3s, color 0.3s; /* Transition sur la couleur de fond et de texte */
            border-radius: 20px; /* Bordure arrondie */
        }

        .navbar-light .navbar-nav .nav-link:hover {
            background-color: lightgreen; /* Fond vert clair au survol */
            color: black; /* Texte noir au survol */
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light navbar-custom"> <!-- Ajout de la classe navbar-custom -->
    <a class="navbar-brand" href="index.php" style="font-size: 24px; font-family: 'Livvic', sans-serif;">Home</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="adam.php">Bouaksim Adam</a></li>
            <li class="nav-item"><a class="nav-link" href="ladji.php">Diarra Ladji</a></li>
            <li class="nav-item"><a class="nav-link" href="toni.php">De Almeida Toni</a></li>
            <li class="nav-item"><a class="nav-link" href="dally.php">Lozano Dally</a></li>
        </ul>
    </div>
</nav>

</body>
</html>
