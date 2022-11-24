<?php

function motDePasse($mot_enter) : bool
{
    $motBon = false;
    $motDePasse = "SesameOuvreToi";

    if($motDePasse == $mot_entrer)
    {
        $motBon = true;
    }

    return $motBon;
}

function Message($ok)
{
    if($ok)
    {
        $message = '<div><p>'.'bienvenu'.'</div></p> ';
    }
    else
    {
        $reste = 3 - $_SESSION['comptEssai'];
        $message = '<div><p> Erreur, il vous reste '. $reste .'chance </div></p> ';
    }

    return $message;
    
}