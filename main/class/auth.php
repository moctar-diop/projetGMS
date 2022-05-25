<?php


class Auth{
    private $options = [
        'restriction_msg' => "Vous n'avez pas le droit d'acceder a cette page"
    ];
    private $session;


    public function  __construct($session, $options = []){


            $this->options = array_merge($this->options, $options);
            $this->session = $session;  
            }




    public function hashPassword($password){
      return  $password = password_hash($password, PASSWORD_BCRYPT);
    }
    
    public function register($db,$username,$password,$email,$telephone,$pays){
        $password = $this->hashPassword($password);
          $token = Str::random(60); 
        $date = date('Y.m.d H:i:s');
        // Query
        $db->query("INSERT INTO user SET username = ?, email = ?, password = ?, telephone = ?, pays = ?, create_time = ?, confirmation_token = ?",
         [
           $username,
            $email,
            $password, 
            $telephone, 
            $pays,
            $date,
            $token
            ]);
            $user_id = $db->lastInsertId();
            
           // $mail = new PHPMailer();
            //$mail->isSMTP();
            //$mail->SMTPDebug = 3;
            //$mail->Host = "smtp.gmail.com";
            //$mail->SMTPAuth = true;
        

            //mail($email,'Confirmation de votre compte', "Afin de valider votre compte merci de cliquer sur ce lien\n\nhttp://127.0.0.1/projetGMS/main/auth/confirm.php?id=$user_id&token=$token"); 
    }



    public function confirm($db,$user_id,$token,){
        $user = $db->query("SELECT * FROM user WHERE id= ?",[$user_id])->fetch();
        if($user && $user->confirmation_token == $token){
            $db->query('UPDATE user SET confirmation_token = NULL, confirmation_at = NOW() WHERE id = ?',[$user_id]);
            $this->session->write('auth',$user);

            return true;

        }
        return false;
    }

    public function restrict(){
        if(!$this->session->read('auth')){
            $this->session->setFlash('danger', $this->options['restriction_msg']);
            header('Location: ../auth/login.php');
            exit();
        }
    }

    public function user(){
        if(!$this->session->read('auth')){
            return false;
        }
        return $this->session->read('auth');
    }

    public function connect ($user){
        $this->session->write('auth',$user);
    } 
    public function connectFromCookie($db){
        if(isset($_COOKIE['remember']) && !$this->user()){
            $remember_token = $_COOKIE['remember'];
            $parts = explode('==', $remember_token);
            $user_id = $parts[0];
            $user = $db->query('SELECT * FROM user WHERE id = ?' [$user_id])->fetch();

            if($user){
                $expected = $user_id . '==' . $user->remember_token . sha1($user_id, 'ratonlaveurs');
                if($expected == $remember_token){
                    $this->connect($user);
                    setcookie('remember', $remember_token, time() + 60 * 60 * 24 * 7);
                } else{
                    setcookie('remember', null, 1);
                }
            } else{
                setcookie('remember', null , -1);
            }
        }
    }
    public function login($db,$username, $password, $remember = false ){
            $user = $db->query('SELECT * FROM user WHERE username = :username' ,['username'=> $username])->fetch();
            if(password_verify($password, $user->password)){
                $this->connect($user);
                if($remember){
                 $this->remember($db,$user->id);
                }
                return $user;
            }
            return false;    
        }
    public function remember($db,$user_id){
        $remember_token = Str::random(250);
        $db->query("UPDATE user SET remember_token = ? WHERE id = ?",[$remember_token, $user_id]);
        setcookie('remember', $user_id). '==' . $remember_token . sha1($user_id . 'ratonvaleurs', time() + 60 * 60 * 24 * 7);

    } 

    public function logout(){
        setcookie('remember',NULL,-1);
        $this->session->delete('auth');
    }

    public function reset($db,$email){
        $user = $db->query('SELECT * FROM user WHERE email = ? ', [$email])->fetch();
        if($user){
            $reset_token =  Str::random(60);
            $db->query('UPDATE user SET reset_token = ?, reset_at = now() WHERE id = ?', [$reset_token, $user->id]);
           // mail($_POST['email'],'reinitialisation de votre mot de passe', "Afin de reinitialiser votre mot de passe merci de cliquer sur cce lien \n\nhttp://127.0.0.1//reset.php");    
            App::redirect("reset.php?id={$user->id}&token=$reset_token") ;
           return $user;
        }
        return false;
    }

    public function checkResetToken($db, $user_id, $token){
        return $db->query('SELECT * FROM user WHERE id = ? AND reset_token IS NOT NULL AND reset_token = ? AND reset_at > DATE_SUB(NOW(), INTERVAL 30 MINUTE)',[$user_id,$token])->fetch();
    }
}



?>