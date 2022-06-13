<?php

require '../include/bootstrap.php' ;



$auth = App::getAuth();
$db = App::getDatabase();

if(!empty($_POST)){
  requette::sendmessage($db,$_POST['objet'],$_POST['message'],$_SESSION['auth']->id);
  echo "message envoyé";
  var_dump($_POST);
}else{
  echo "message non envoyé";
}
  ?>