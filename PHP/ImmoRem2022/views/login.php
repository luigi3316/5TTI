<?php
    $message = "";
    if(isset($_POST['btnEnvoi'])){
        if(empty($_POST["txtLogin"]) || empty($_POST["txtMp"])){
            //message d'erreur 
            $message = " Attention!!!! Tous les champs ne sont pas correctement rempli, veuillez recommencer"; 
        }else{
            //Je vais le connnecter
            $user = connectUser($dbh);
            if($user){
                $_SESSION['user'] = $user;
                header("location: /my-app/ImmoRem2022/index.php?/views/accueil");
            }
        }
    }
?> 
<div class="l1"></div>

<h1 class="title" >📍 connexion</h1>

<div class="l2"></div>

<div  class="corps">
    <div class="champRecherche">
        <table class="table_form">
            <tr>
                <td><label for="login">Login : </label></td>
                <td><input placeholder="votre identifiant" type="text" name="txtLogin"></td>
            </tr>
                <tr>
                <td><label for="mp">Mot de Passe : </label></td>
                <td><input placeholder="Mot de passe" type="text" name="txtMp"></td>
            </tr>

            <div class="messErreur">
                <br> 
                <?php echo $message ?>
            </div>
            
            <tr>
                <td colspan="2"><button class="button1" id="btnEnvoi" name="btnEnvoi" value="envoi">Entrer </button></td>
            </tr> 
        </table>
    </div>
</div>

<div class="l3"></div>