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
<?php include "../include/header.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.css">
    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/styles.css" rel="stylesheet">
  <style>
    body{
      overflow: scroll;
    }
    .btn-infos{
      background-color: #060f58;
      color: white;
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
<section >
  
  <div class="container mt-2">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">

        <!--div class="px-5 ms-xl-4">
          <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
          <span class="h1 fw-bold mb-0">Logo</span>
        </div-->

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <form style="width: 23rem;" method="post">

            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign in</h3>

            <div class="form-outline mb-4">
              <label class="form-label" for="form2Example18">Username</label>
              <input type="text" id="form2Example18" class="form-control form-control-lg" placeholder="Enter username" name="username" />
            </div>
            <div class="form-outline mb-4">
              <label class="form-label" for="email">Email</label>
              <input type="text" id="email" class="form-control form-control-lg" placeholder="Enter Email" name="email" />
            </div>
            <div class="form-outline mb-4">
              <label class="form-label" for="pays">Pays</label>
              <input type="text" id="pays" class="form-control form-control-lg" placeholder="Entrer votre pays" name="pays" />
            </div>
            <div class="form-outline mb-4">
              <label class="form-label" for="telephone">Telephone</label>
              <input type="number" id="telephone" class="form-control form-control-lg" placeholder="Enter votre numero de telephone" name="telephone" />
            </div>
            <div class="form-outline mb-4">
              <label class="form-label" for="form2Example28">Password</label>
              <input type="password" id="form2Example28" class="form-control form-control-lg" placeholder="Enter Password" name="password" />
            </div>
            <div class="form-outline mb-4">
              <label class="form-label" for="psw-repeat">Repeat Password</label>
              <input type="password" id="psw-repeat" class="form-control form-control-lg" placeholder="Repeat Password" name="password_confirm" />
            </div>
            <p class="small mb-5 pb-lg-2">By creating an account you agree to our  <a class="text-muted" href="#">Terms & Privacy</a></p>
            <div class="pt-1 mb-4">
              <button class="btn btn-infos btn-lg btn-block" type="button">Cancel</button>
              <button class="btn btn-infos btn-lg btn-block" type="submit">Sign Up</button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="../assets/img/logo.jpeg"
          alt="Login image" class="w-100 vh-80 pt-5" style="object-fit: cover; object-position: left;">
      </div>
    </div>
  </div>
</div>
</section>
</body>
</html>
</body>
</html>
<?php include "../include/footer.php";?>