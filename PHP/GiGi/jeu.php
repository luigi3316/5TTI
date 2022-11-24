<?php

require 'header.php';

$entree;
$nombre;
$entree=$_GET['entree'];

?>

<body>

    <div>
        <h2>JOUEZ AVEC NOUS !!!!</h2>
    </div>

    <div>
        <p>Devinez un nombre</p>
    </div>
    
    <form action="jeu.php" method="GET">

        <input type="text" name="entree" placeholder="entre 0 et 1000" >
        <button type="submit">deviner</button>

    </form>

<?php

    if ($entree < $nombre )
    {
        $message = 'le nombre'. $entree .'est trop grand';
    }
    elseif ($entree > $nombre)
    {
        $message = 'le nombre'. $entree .'est trop petit';
    }
    else
    {
        $message = 'bravo vous avez trouver le nombre';
    }

    echo $message;

    require 'footer.php';

?>