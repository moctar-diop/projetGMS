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




    echo "<pre>";
    var_dump($validator);
    var_dump($validator->isValid());

    echo "</pre";

    echo "<pre>";
    var_dump($_POST);

    echo "</pre";

        if($validator->isValid()){

        App::getAuth()->register($db,$_POST['username'],$_POST['password'],$_POST['email'],$_POST['telephone'],$_POST['pays']);
       // $auth->email($db,$_POST['email'],$_POST['username'],$user_id,$token);
        Session::getInstance()->setFlash('success',"un email de confirmation a ete envoyer pour valider votre inscription");
        App::redirect("../index.php");
        exit();
}else{
  $errors = $validator->getErrors();
}
} 
 
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.css">

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password], input[type=number]{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>
<div class="arlert alert-danger">
  <p>Vous n'avez pas rempli le formulaire correctement</p>
  <ul>
    <?php foreach($errors as $error):?>
      <li><?= $error;?></li>
      <?php endforeach ?>
  </ul>
</div>
<form action="" method="post" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
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

</body>
</html>

</body>
</html>