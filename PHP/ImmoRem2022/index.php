<?php
    session_start();
    $uri = $_SERVER['REQUEST_URI'];
    require_once 'elements/header.php';
    require_once 'modele/connect.php';
    require_once 'modele/modele.php';

        if($uri === '/my-app/ImmoRem2022/index.php?/views/login')
        {
            require_once "views/login.php";
        }
        elseif($uri === '/my-app/ImmoRem2022/index.php?/views/accueil')
        {
            require_once "views/accueil.php";
        }
        elseif($uri === '/my-app/ImmoRem2022/index.php?/views/mesBiens')
        {
            require_once "views/mesBiens.php";
        }
        elseif($uri === '/my-app/ImmoRem2022/index.php?/views/logout')
        {
            session_destroy();
            header('location: /my-app/ImmoRem2022/index.php?/views/accueil');
        }
        elseif($uri === '/my-app/ImmoRem2022/index.php?/views/monProfil')
        {
            require_once "views/monProfil.php";
        }
        elseif($uri === '/my-app/ImmoRem2022/index.php?/views/register')
        {
            require_once "views/register.php";
        }
        elseif(isset($_GET['bienId'])){
            require_once 'views/showBien.php';
        }
        else{
            require_once "views/accueil.php";
        }
       
    require_once "elements/footer.php";

?>

    </form>
</body>
</html>