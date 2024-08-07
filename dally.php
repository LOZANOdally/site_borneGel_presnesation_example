<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Personnelle</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f0f0f0;
            
            font-family: 'Shadows Into Light Two', cursive; 
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 50px 20px;
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            color: #333333;
        }
        h2 {
            color: #666666;
        }
        h3 {
            margin-top: 70px; /* Ajout de la marge supérieure */
        }
        .btn {
            margin-top: 20px;
            margin-bottom: 20px;
            background-color: #007bff;
            color: #ffffff;
            border-radius: 25px;
            padding: 10px 20px;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .icon-container {
            margin-top: 50px;
        }
        .icon-group {
            display: flex;
            justify-content: center;
        }
        .icon-group a {
            margin: 0 10px;
        }
        .icon-container a {
            color: #ffffff;
            text-decoration: none;
            margin: 5px;
        }
        .github-container {
            background-color: #24292e; /* Couleur GitHub */
            border-radius: 50%;
            margin: 10px;
            padding : 10px;
        }
        .linkedin-container {
            background-color: #0077b5; /* Couleur LinkedIn */
            border-radius: 50%;
            padding: 10px;
            margin: 10px;
        }
    </style>
</head>
<body>
<?php include 'navbar.php'; ?>

<div class="container">
    <h1>Application SmartGel</h1>
    <h2>Lozano Dally</h2>

    <h3>
        <a href="https://docs.google.com/presentation/d/15cI7Zjte6NXvxURygH1s_w3IpgqlafwT-AJuNYKQnyU/edit#slide=id.g288697a9d27_0_0" target="_blank">Support Oral</a>
    </h3>
    <img src="img/slide.png" alt="Slide" style="width: 300px; height: auto;">

    <div class="icon-container">
        <div class="icon-group">
            <div class="github-container">
                <a href="https://github.com/Ladji600/Projet_borneGel/tree/Application/app/src/main/java/com/example/smartgel_v4"><i class="fab fa-github"></i></a>
            </div>
            <div class="linkedin-container">
                <a href="https://www.linkedin.com/feed/"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- Font Awesome JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>
</html>
