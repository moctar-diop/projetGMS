<?php 
    require('db.php');
    include_once("identification.php");
    include('include/header.php');

/*        $message = "";

        if (isset($_POST['login']) && isset($_POST['pass']) && isset($_POST['profile']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['pays']) && isset($_POST['phone']) && isset($_POST['email'])) {
            $login = $_POST['login'];
            $pass = $_POST['pass'];
            $profile = $_POST['profile'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $prenom = $_POST['pays'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];


                    $sql = 'INSERT INTO user (login, pass, profile, nom, prenom, pays, tel, email) VALUES (:login, :pass, :profile, :nom, :prenom, :pays, :tel, :email)';

                    $preparation = $connexion->prepare($sql);

                        if ($preparation->execute([':login' => $login, ':pass' => $pass,':profile' => $profile,':nom' => $nom, ':prenom' => $prenom, ':pays' => $pays, ':tel' => $phone, ':email' => $email ])) {
                            $message = "un élément a été inserré avec succès!!! <br>";
                        }
        }
*/
?>
<style>
    .card{
       /* padding-top: 50px;*/
    }
</style>

<div class="container ">
    <div class="card  mt-50">
        <div class="card-header ">
            <h2>Inscription</h2>

        </div>
        <div class="card-body">
            <?php  if (!empty($message)): ?>

                <div class="alert alert-success">
                    <?= $message; ?>
                </div>
            <?php endif; ?>

            <form action="" method="post">
            <div class="form-group">
                    <label for="login">login</label>
                    <input type="text" name="login" id="login" class="form-control">
                </div>
                <div class="form-group">
                    <label for="pass">Mo de passe</label>
                    <input type="text" name="pass" id="pass" class="form-control">
                </div>
                <div class="form-group">
                    <label for="profile">Profile</label>
                    <input type="text" name="profile" id="profile" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" class="form-control">
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" name="prenom" id="prenom" class="form-control">
                </div>
                <div class="form-group">
                    <label for="pays">Pays</label>
                    <input type="text" name="pays" id="pays" class="form-control">
                </div>
                <div class="form-group">
                    <label for="phone">Téléphone</label>
                    <input type="number" name="phone" id="phone" class="form-control">
                </div>
                <div class="form-group">
                    <label for="login">Email</label>
                    <input type="text" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info">s'inscrire</button>
                </div>
            </div>
            </form>
            

        </div>
    </div>

</div>
<?php require('include/footer.php'); ?>