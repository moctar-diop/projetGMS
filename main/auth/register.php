<?php 
require_once '../include/bootstrap.php';

 //$user = $db->query('SELECT * from user')->fetchAll();
 // Swiftmailer lib
 //print_r($user);
 $errors = array();
 // Set empty form vars for validation mapping
 $_username = $_email = $_pays = $_password = "";
 if(!empty($_POST)) {
     //initialisation des erreurs
     $errors = array();
     //initialisation des la base de donnee
     $db = App::getDatabase();
    $validator = new Validator($_POST);

    $validator->alphanumeriq("username", "votre pseudo n'est pas valide(alphanumerique");

    if($validator->isValid()){
      $validator->isUnniq('username', $db, 'user', 'ce pseudo est deja pris');

    }
    $validator->isEmail('email', "Votre email n'est pas valid");

    if($validator->isValid()){
    $validator->isUnniq('email', $db, 'user', 'Cet email est utilise dans un autre compte!');
      
    }
    $validator->isConfirm('password', "Vous devez rentrer un mot de passe valide");

    $validator->isNumber('telephone', "Veuillez entrer un numero de telephone vallide!");

    $validator->alphanumeriq("pays", "Ce n'est pas valide(alphanumerique");




    

        if($validator->isValid()){

        App::getAuth()->register($db,$_POST['username'],$_POST['password'],$_POST['email'],$_POST['telephone'],$_POST['pays']);
       // $auth->email($db,$_POST['email'],$_POST['username'],$user_id,$token);
        Session::getInstance()->setFlash('success',"un email de confirmation a ete envoyer pour valider votre inscription");
        App::redirect("../auth/login.php");
        exit();
}else{
  $errors = $validator->getErrors();
}
} 
 
include "../include/headert.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="../assets/style.css">


<style>

</style>
<body class="bodyy">


<section>
<div class="container">
  <div>
    
  <?php if($errors != null):?>
<div class="arlert alert-danger">
  <p>Vous n'avez pas rempli le formulaire correctement</p>
  <ul>
    <?php foreach($errors as $error):?>
      <li><?= $error;?></li>
      <?php endforeach ?>
      <?php endif ?>
  </ul>
</div>
  </div>
  <!-- Sign In Start -->
  <div class="container-fluid d-flex flex-column">
  <div class="row">
         <img src="../assets/img/gms-cover.jpg"
           alt="Login image" class="w-100 vh-80 pt-4" style="object-fit: cover; object-position: left;">
       </div>
             <div class="row  align-items-center justify-content-center">
                 <div class="col-sm-6 text-light">
                     <div class="bg-darkblue rounded p-4 p-sm-5 my-4 mx-3">
                         <div class="text-center mb-3">
                             <a href="index.html" class="text-decoration-none">
                                 <h3 class="text-light"><i class="fa fa-user-edit me-2"></i>S'inscrire</h3>
                             </a>
                             
                         </div>
                        
<form action="" method="post">
  <div class="container">
    <hr>
    <label for="username"><b>username</b></label>
    <input type="text" placeholder="Enter username" name="username" >


    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" >

    <label for="pays"><b>Pays</b></label>
    <input type="text" placeholder="Entrer votre pays" name="pays" >

    <label for="telephone"><b>telephone</b></label>
    <input type="number" placeholder="Enter votre numero de telephone" name="telephone" >


    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" >

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="password_confirm" >
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn" name="submit">Sign Up</button>
    </div>
  </div>
</form>
                 </div>
                 
  </div>
             
    </div>
 </div>
</section>



</body>
</html>

</body>
</html>