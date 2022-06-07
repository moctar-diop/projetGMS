<?php 
include "../include/bootstrap.php";
//print_r($_SESSION;

$auth = App::getAuth();
$db = App::getDatabase();
$auth->connectFromCookie($db);

if($auth->user()){
  App::redirect('account.php');
}

if(!empty($_POST) && !empty($_POST['username']) && !empty($_POST["password"])){
  $user = $auth->login($db,$_POST['username'],$_POST["password"],isset($_POST['remember']));
  $session= Session::getInstance(); 
        if($user){
            $session->setFlash('success', "Vous etes maintenant connecte");
            App::redirect('account.php');
          } else{
            $session->setFlash('danger',"identifiant ou mot de passe incorrecte");

          }
      }else{
        var_dump($_POST);
}
include "../include/headert.php";


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/style.css">
    <script src="https://kit.fontawesome.com/dc8de4a567.js" crossorigin="anonymous"></script>

  <style>
    
  </style>



</head>
<body class="bodyy">
<div class="arlert alert-danger">
<?php 
  if (isset($_SESSION['flash'])) :?>
  <?php foreach($_SESSION['flash'] as $type => $message ) :?>
  <div class="alert alert-<?= $type ?>">
  <?= $message ?>
  </div>
<?php endforeach; ?>
<?php unset($_SESSION['flash']) ?>

<?php endif ?>
</div>

<section>
<div class="container">
  
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
                                 <h3 class="text-light"><i class="fa fa-user-edit me-2"></i>Se connecter</h3>
                             </a>
                             
                         </div>
                         <form action="" method="post">
                         <div class="form-floating mb-3 text-dark">
                             <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                             <label for="floatingInput">Email address</label>
                         </div>
                         <div class="form-floating mb-4 text-dark">
                             <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                             <label for="floatingPassword">Password</label>
                         </div>
                         <div class="form-outline mb-4">
                             <label for="typeUser" class="form-label">Account Type:</label>
                             <select name="typeUser" id="typeUser" class="form-select" aria-label="Default select example">
                              <option value="user">user</option>
                              <option value="admin">admin</option>
                              </select>
                          </div>
                         <div class="d-flex align-items-center justify-content-between mb-4 ">
                             <div class="form-check">
                                 <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                 <label class="form-check-label text-light" for="exampleCheck1">Check me out</label>
                             </div>
                             <a href="" class="badge rounded-pill text-bg-info">Forgot Password</a>
                         </div>
                         <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign In</button>
                         <p class="text-center mb-0">Don't have an Account? <a href="">Sign Up</a></p>
                     
                         </form></div>
                 </div>
                 
  </div>
             
    </div>
 </div>
</section>
</body>
</html>