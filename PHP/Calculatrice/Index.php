<?php
    $Nbr1 = $_GET['Nbr1'];
    $Nbr2 = $_GET['Nbr2'];
    $choix = $_GET['choix'];
    $result = NULL;
    $erreur = NULL;

if($choix == 'division' && $Nbr2 == 0)
    {
        $erreur = 'Tu est con ou quoi? On peut pas diviser par 0 !';
    }
    else
    {  
        if($choix == 'addition' )
        {
            $result = $Nbr1 + $Nbr2;
        }

        if($choix == 'soustraction' )
        {
            $result = $Nbr1 - $Nbr2;
        }

        if($choix == 'division' )
        {
            $result = $Nbr1 / $Nbr2;
        }

        if($choix == 'multiplication' )
        {
            $result = $Nbr1 * $Nbr2;
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8" />
    <title> CALCULATRICE </title>

</head>
<body>

    <div>
        <div> 
            <h2> Calculatrice </h2>
        </div>      
        <div>
            <form action="Index.php" method="GET">
                <input type="number" name="Nbr1" placeholder="tapez le nombre 1" >
                <div>
                    <select name="choix">
                        <option value="addition">addition (+)</option>
                        <option value="soustraction">soustraction (-)</option>
                        <option value="division">division (/)</option>
                        <option value="multiplication">multiplication (*)</option>
                    </select>

                </div>
                <input type="number" name="Nbr2" placeholder="tapez le nombre 2" >
                <div>
                    <button type="submit">Calculer</button>
                    <input type="reset" value="effacer"><br>
                </div>  
            </form>
        </div>       
    </div>
    <h1>
        <?php
            echo $result;
            echo $erreur;
        ?>
    </h1>

</body>
</html>