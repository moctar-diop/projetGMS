<?php
   require_once '../include/bootstrap.php';

    $user = $db->query('SELECT * from user')->fetchAll();
    // Swiftmailer lib
    print_r($user);
    $errors = array();
    // Set empty form vars for validation mapping
    $_username = $_email = $_pays = $_password = "";
    if(!empty($_POST)) {
        //initialisation des erreurs
        $errors = array();
        //initialisation des la base de donnee
        $db = App::getDatabase();

        // verification de l'username
    if(empty($_POST['username']) || !preg_match("/^[a-zA-Z ]*$/", $_POST['username']) ){
        $errors['username'] = "Votre pseudo n'est pas valide";
    }else{
        $user = $db->query("SELECT * FROM user WHERE username = ?",[$_POST['username']])->fetch();
        if($user){
            $errors['username'] = 'Ce pseudo est deja pris!';
        }
    }

        // verification e l'email 
        if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL )){
            $errors['email'] = "Votre email n'est pas valide";
        } else {
            $user = $db->query("SELECT * FROM user WHERE email = ?",[$_POST['email']])->fetch();
        if($user){
            $errors['email'] = 'Cet email est utilise dans un autre compte!';
        }
        }

        // verification du numero de telephone
        if(!preg_match("/^[0-9]{12}+$/", $_telephone)) {
            $errors['telephone']= "Veuillez entrer un numero de telephone vallide!";

        }

        // verificationn du pays 
        if(!preg_match("/^[a-zA-Z ]*$/", $_pays)) {
            $errors['pays'] = ' Only letters and white space allowed ';

        }

        // verificationn du password 
        if(empty($_POST['password']) || $_POST['password'] != $_POST['password_confirm']){
            $errors['password'] = "Vous devez rentrer un mot de passe valide";
        }

    
        if(empty($errors) )
                {
                    // Password hash
                    $password_hash = password_hash($_POST['password'], PASSWORD_BCRYPT);
                    // Query
                    $sql =$db->query("INSERT INTO user SET username = ?, email = ?, password = ?, telephone = ?, pays = ?, create_time = ?)",
                     [
                         $_POST['username'],
                        $_POST['email'],
                        $password_hash, 
                        $_POST['telephone'], 
                        $_POST['pays'],
                         date('m.d.y')
                        ]);
        $user_id = $db->lastInsertId();
                        exit();
        }
    }
     
?>