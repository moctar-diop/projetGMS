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
       // var_dump($_POST);
}
?>
<?php include "../include/header.php";?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/styles.css" rel="stylesheet">

</head>
<body>
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
  
  <div class="container mt-3">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">

        <!--div class="px-5 ms-xl-4">
          <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
          <span class="h1 fw-bold mb-0">Logo</span>
        </div-->

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <form style="width: 23rem;" method="post">

            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>

            <div class="form-outline mb-4">
              <input type="text" id="form2Example18" class="form-control form-control-lg" name="username" />
              <label class="form-label" for="form2Example18">Username</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="form2Example28" class="form-control form-control-lg" name="password" />
              <label class="form-label" for="form2Example28">Password</label>
            </div>
            <div class="form-outline mb-4">
            <label for="typeUser" class="form-label">Account Type:</label>
                      <select name="typeUser" id="typeUser" class="form-select" aria-label="Default select example">
                      <option value="user">user</option>
                      <option value="admin">admin</option>
                      </select>
            </div>
            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg btn-block" type="submit">Login</button>
            </div>

            <p class="small mb-5 pb-lg-2"><a class="text-muted" href="forget.php">Forgot password?</a></p>
            <p>Don't have an account? <a href="register.php" class="link-info">Register here</a></p>

          </form>

        </div>

      </div>
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="../assets/img/logo.jpeg"
          alt="Login image" class="w-100 vh-80 pt-4" style="object-fit: cover; object-position: left;">
      </div>
    </div>-->
  </div>
</div>
</section>
</body>
</html>
<?php include "../include/footer.php";?>