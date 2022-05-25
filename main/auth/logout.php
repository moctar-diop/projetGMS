<?php 

require "../include/bootstrap.php";

App::getAuth()->logout();
Session::getInstance()->setFlash('success','vous etes maintenant rediriger');
App::redirect('login.php');