<?php
session_start();
require'header.php';

if (isset($_GET['motDePasse']))
{
    $mot_enter=$_GET['motDePasse'];

    if (isset($session['comptESsai']))
    {
        $session['comptESsai']=1;
    }
        
    elseif($session['comptESsai']<3)
    {
        $session['comptESsai'] = $session['comptESsai'] +1;
    }
    $mpCorrect=motDePasse($mpPropose);
    $message=Message($mpCorrect);
}
?>

<body>
    <form action="Palindrome_Correction.php" method="GET">

        <div class="cadre">

            <div class="titre"> 
                <h1>detecteur De palindrome!</h1>
            </div>

            <div class="titre2">
                <h2>taper le bon mot de passe!!</h2>
            </div>

            <div class="ZoneTexte">
                <input type="text" name="mdp" placeholder="tapez ici!!">
            </div>

            <div class="boutton">
                <button type="submit" name="bouton" value="Valider">Valider</button>
            </div>  

            <div class="message">

                <?php
                    if (isset($_GET['motDePasse']))
                    {
                        echo $messages;
                    }
                ?>

            </div>

        </div>

    </form>

    <?php

    require 'footer.php';

    ?>
   