<?php

    function verifiePalindrome($mot) :bool
    {
        $palindrome = false;
        $motRetourne='';
        for($i=0 ; $i<strlen($mot) ; $i++)
        {
            $motRetourne = $motRetourne . $mot(strlen($mot)-1-$i);
        }
        if ($mot==$motRetourne)
        {
            $palindrome = true;
        }
        return $palindrome;
    }

    function prepareMessageEstPal($ok, $mot)
    {
        if ($ok)
        {
            $message = '<div><p>' . $mot . "est un palindrome" . '</div></p>';
        }
        else
        {
            $message = '<div><p>' . $mot . " n'est pas un palindrome" . '</div></p>';
        }
        return $message;
    }

?>