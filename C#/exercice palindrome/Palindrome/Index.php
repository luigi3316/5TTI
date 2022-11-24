<?php
    require 'Function.php';

    if (isset($_GET['mot']))
    {
        $message='';
        $mot= strtoupper($_GET['mot']);
        $palindrome= verifiePalindrome($palindrome,$mot);
        $message=prepareMessageEstPal($palindrome,$mot);
    }

    require 'Header.php';
   
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
                <button type="submit" name="boutonVal" value="ValiderMot">Vérifier!!!</button>
            </div>  

            <div class="message">

                <?php

                    if (isset($_GET['mot']))
                    {
                        echo $messages;
                    }
                    
                ?>

            </div>

        </div>

    </form>

    <?php

        require 'Footer.php';
        
    ?>