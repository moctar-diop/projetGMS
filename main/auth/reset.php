<?php 
include "../include/bootstrap.php";
if(isset($_GET['id']) && isset($_GET['token'])){
    $auth = App::getAuth();
    $db = App::getDatabase();

    $user = $auth->checkResetToken($db,$_GET['id'],$_GET['token']);
    if($user){
        if(!empty($_POST)){
            $validator = new Validator($_POST);
            $validator->isConfirm('password');
            if(!$validator->isValid()){
                $password = $auth->hashPassword($_POST['password']);
                $db->query('UPDATE user SET password = ?, reset_at = NULL,reset_token = NULL WHERE id = ?',[$password, $_GET['id']]);
                 $auth->connect($user);
                Session::getInstance()->setFlash('success', "votre mot de passe a bien ete modifier");
                App::redirect('account.php');
            }
        }
    } else{
        Session::getInstance()->setFlash('danger', "Ce token n'est pas valide");
        App::redirect('login.php');
    }
} else{
    App::redirect('login.php');
}

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
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.css">

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
<section class="vh-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">

        <div class="px-5 ms-xl-4">
          <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
          <span class="h1 fw-bold mb-0">Logo</span>
        </div>

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <form style="width: 23rem;" method="post">

            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">reinitialiser mon mon de passe </h3>

            <div class="form-outline mb-4">
            <input type="password" id="form2Example28" class="form-control form-control-lg" name="password" />
              <label class="form-label" for="form2Example28">Password</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="form2Example28" class="form-control form-control-lg" name="password" />
              <label class="form-label" for="form2Example28">Confirmation du Password</label>
            </div>
           
            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg btn-block" type="submit">reinitialiser votre mon de passe</button>
            </div>

           
          </form>

        </div>

      </div>
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img3.webp"
          alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
      </div>
    </div>
  </div>
</section>
</body>
</html>