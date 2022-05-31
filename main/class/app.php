<?php 
class App {
    static $db = null;

    static function getDatabase(){
        if(!self::$db){
            self::$db=new Database('root','', 'gms221');
        }
        return self::$db;
    }
    static function getAuth(){
        return new Auth(Session::getInstance(),['restriction_msg'=> 'lol tu es bloque']);
    }
    static function redirect($page){
        header("Location: $page");
        exit();
    }
}


?>