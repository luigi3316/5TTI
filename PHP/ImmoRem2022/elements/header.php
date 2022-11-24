<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css\stylesheet.css" rel="Stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
    <title>Immobilier.com</title>
</head>

<body>
    <div class="container-fisrt">

        <ul class="list">
            
            <div class="ime">
                <a href="/my-app/ImmoRem2022/index.php?/views/accueil"><img class="fit-picture" src="images\106151.png" alt="Grapefruit slice atop a pile of other slices"></a>
            </div>
            <li class="listlink"><a href="/my-app/ImmoRem2022/index.php?/views/accueil">Home</a></li>
            
            <?php if(!isset($_SESSION['user'])) :?>
                
                    <li class="listlink"><a href="/my-app/ImmoRem2022/index.php?/views/register">S'inscrire</a></li>
                    <li class="listlink"><a href="/my-app/ImmoRem2022/index.php?/views/login">Connexion</a></li>
            <?php else : ?>
                <li class="listlink"><a href="/my-app/ImmoRem2022/index.php?/views/mesBiens">Mes biens</a></li>
                <li class="listlink"><a href="/my-app/ImmoRem2022/index.php?/views/monProfil">Mon profil</a></li>
                <li class="listlink"><a href="/my-app/ImmoRem2022/index.php?/views/logout">Se déconnecter</a></li>
            
            <?php endif ?>
        
        </ul>

    </div>

    <form id="traiteImmo" method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
