<?php
   // Database connection
    include('../config/db.php');
    // Swiftmailer lib
    var_dump($_POST);
    // Error & success messages
    global $success_msg, $email_exist, $userNameErr, $_emailErr, $_paysErr, $_passwordErr , $_telephoneErr;
    global $userNameEmptyErr, $emailEmptyErr, $paysEmptyErr, $passwordEmptyErr, $email_verify_err, $email_verify_success , $_telephtoneEmptyErr;
    
    // Set empty form vars for validation mapping
    $_username = $_email = $_pays = $_password = "";
    if(isset($_POST["submit"])) {
        $_username = $_POST["username"];
        $_email = $_POST["email"];
        $_pays  = $_POST["pays"];
        $_password  = $_POST["password"];
        $_telephone = $_POST['telephone'];
        // check if email already exist
        $email_check_query = mysqli_query($connection, "SELECT * FROM user WHERE email ='$_email'");
        if(!$email_check_query || mysqli_num_rows($email_check_query) == 0){
            $rowCount = mysqli_num_rows($email_check_query);

        }

        // PHP validation
        // Verify if form values are not empty
        if(!empty($_username) && !empty($_email) && !empty($_pays)  && !empty($_password) && !empty($_telephone) ){
            
            // check if user email already exist
            if($rowCount > 0) {
                $email_exist = '
                    <div class="alert alert-danger" role="alert">
                        Cette utilisateur existe deja !
                    </div>
                ';
            } else {
                // clean the form data before sending to database
                $_username = mysqli_real_escape_string($connection, $_username);
                $_email = mysqli_real_escape_string($connection, $_email);
                $_pays = mysqli_real_escape_string($connection, $_pays);
                $_password = mysqli_real_escape_string($connection, $_password);
                $_telephone = mysqli_real_escape_string($connection, $_telephone);

                // perform validation
                if(!preg_match("/^[a-zA-Z ]*$/", $_username)) {
                    $userNameErr = '<div class="alert alert-danger">
                            Only letters and white space allowed.
                        </div>';

                        echo "input err : $userNameErr ";
                }
                if(!filter_var($_email, FILTER_VALIDATE_EMAIL)) {
                    $_emailErr = '<div class="alert alert-danger">
                            Email format is invalid.
                        </div>';
                        echo "input err : $_emailErr ";

                }
                if(!preg_match("/^[0-9]{12}+$/", $_telephone)) {
                    $_telephoneErr = '<div class="alert alert-danger">
                            Only 10-digit mobile numbers allowed.
                        </div>';
                        echo "input err : $_telephoneErr ";

                }
                if(!preg_match("/^[a-zA-Z ]*$/", $_pays)) {
                    $_paysErr = '<div class="alert alert-danger">
                            Only letters and white space allowed.
                        </div>';

                        echo "input err : $_paysErr ";
                }
                if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{6,12}$/', $_password)) {
                    $_passwordErr = '<div class="alert alert-danger">
                    Le mot de passe doit comporter entre 6 et 20 caractères, contenir au moins un caractère spécial, une minuscule, une majuscule et un chiffre.
                    </div>';
                    echo "input err : $_passwordErr";

                }
                
                // Store the data in db, if all the preg_match condition met
                if((preg_match("/^[a-zA-Z ]*$/", $_username)) && (preg_match("/^[a-zA-Z ]*$/", $_pays)) &&
                 (filter_var($_email, FILTER_VALIDATE_EMAIL)) && (preg_match("/^[0-9]{12}+$/", $_telephone)) && 
                 (preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{6,12}$/', $_password))){
                    // Password hash
                    $password_hash = password_hash($_password, PASSWORD_BCRYPT);
                    // Query
                    $sql = "INSERT INTO user (username, email, password, telephone, pays, create_time) VALUES ('$_username', '$_email', '$password_hash', '$_telephone', '$_pays', now())";
                    
                    // Create mysql query
                    $sqlQuery = mysqli_query($connection, $sql);
                    if(!$sqlQuery){
                        //die("MySQL query failed!" . mysqli_error($connection));
                        echo "erre DB";
                    } else{
                       header("Location:../index.php");
                   }
                } else{
                    echo " Erreur compil";
                }
            }
        } else {
            if(empty($_username)){
                $fNameEmptyErr = '<div class="alert alert-danger">
                    First name can not be blank.
                </div>';
            }
            if(empty($_email)){
                $emailEmptyErr = '<div class="alert alert-danger">
                    Email can not be blank.
                </div>';
            }
            if(empty($_telephone)){
                $_telephoneErr = '<div class="alert alert-danger">
                    Mobile number can not be blank.
                </div>';
            }
            if(empty($_pays)){
                $_paysErr = '<div class="alert alert-danger">
                    Last name can not be blank.
                </div>';
            }
            if(empty($password)){
                $passwordEmptyErr = '<div class="alert alert-danger">
                    Password can not be blank.
                </div>';
            }            
        }
    } else{
        echo "aucun donnee";
    }
?>