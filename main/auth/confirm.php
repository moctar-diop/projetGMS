<?php 
require "../include/bootstrap.php";

$db= App::getDatabase();
        if(App::getAuth()->confirm($db,$_GET['id'],$_GET['token'],Session::getInstance()))
        {
            $_SESSION['flash']['success'] = "votre compte a bien ete valide";
            App::redirect('account.php');
        }else{
            Session::getInstance()->setFlash('danger', "Ce token n'est plus valide :(");
            App::redirect('login.php');
        }


?>