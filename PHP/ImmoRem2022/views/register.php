<?php
    $message = "";
    if(isset($_POST['btnEnvoi'])){
        if(empty($_POST["nomUser"]) || empty($_POST["prenomUser"]) || empty($_POST["loginUser"]) || empty($_POST["txtMp"])){
            //message d'erreur 
            $message = " Attention!!!! Tous les champs ne sont pas correctement rempli, veuillez recommencer"; 
        }else{
            //Je vais le creer
            $_SESSION['user'] = createNewUser($dbh);
            header("location: /my-app/ImmoRem2022/index.php?/views/login");
        }
    }
?>

<div class="l1"></div>

<h1 class="title" >📍 Inscription</h1>    

<div class="l2"></div>

<div class="corps">
    <div class="champRecherche">
        <table class="table_form">
            <tr>
                <td><label for="nomUser">Nom : </label></td>
                <td><input type="text" name="nomUser" placeholder="ex: Micheal"></td>
            </tr>
            <tr>
                <td><label for="prenomUser">Prenom : </label></td>
                <td><input type="text" name="prenomUser" placeholder="ex: Marine" ></td>
            </tr>
            <tr>
                <td><label for="loginUser">login : </label></td>
                <td><input type="text" name="loginUser" placeholder="ex: Mario2514" ></td>
            </tr>
            <tr>
                <td><label for="txtMp">Mot de Passe : </label></td>
                <td><input type="text" name="txtMp" placeholder="ex: fJ45Ghb" ></td>
            </tr>
            <div class="messErreur">
                <br> 
                <?php echo $message ?>
            </div>
            <tr>
                <td colspan="2"><button class="button2" id="btnEnvoi" name="btnEnvoi" value="envoi">Entrer </button></td>
            </tr> 
        </table>
    </div>
</div>

<div class="l3-3"></div>
