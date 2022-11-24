<?php
    $message = "";
    if(isset($_POST['btnEnvoi'])){
        if(empty($_POST["nomUser"]) || empty($_POST["prenomUser"]) || empty($_POST["loginUser"]) || empty($_POST["txtMp"])){
            //message d'erreur 
            $message = " Attention!!!! Tous les champs ne sont pas correctement rempli, veuillez recommencer"; 
        }else{
            //Je vais le creer
            $_SESSION['user'] = modifUser($dbh);
            header("location: /my-app/ImmoRem2022/index.php?/views/accueil");
        }
    }

    if(isset($_POST['btnsupp'])){
        $_SESSION['user'] = deleteUser($dbh);
        header("location: /my-app/ImmoRem2022/index.php?/views/logout");
    }
?>

<div class="l1"></div>

<h1 class="title" >📍 Modifier mon profil</h1>

<div class="l2"></div>

<div  class="corps">
    <div class="champRecherche">
        <table class="table_form">
            <tr>
                <td><label for="nomUser">Nom :</label></td>
                <td><input type="text" name="nomUser" value="<?= $_SESSION['user']->nomUser ?>"></td>
            </tr>
            <tr>
                <td><label for="prenomUser">Prenom :</label></td>
                <td><input type="text" name="prenomUser" value="<?= $_SESSION['user']->prenomUser ?>"></td>
            </tr>
            <tr>
                <td><label for="loginUser">login :</label></td>
                <td><input type="text" name="loginUser" value="<?= $_SESSION['user']->loginUser ?>"></td>
            </tr>
            <tr>
                <td><label for="txtMp">Mot de Passe :</label></td>
                <td><input type="text" name="txtMp" value="<?= $_SESSION['user']->passWordUser ?>"></td>
            </tr>
            <div class="messErreur">
                <br> 
                <?php echo $message ?>
            </div> 
            <tr>
                <td colspan="2"> <button class="button" id="btnEnvoi" name="btnEnvoi" value="envoi">Modifier </button></td>
            </tr> 
            <tr>
                <td colspan="2"> <button class="button" id="btnsupp" name="btnsupp" value="supp">supprimer </button></td>
            </tr> 
        </table>
    </div>
</div>

<div class="l3"></div>