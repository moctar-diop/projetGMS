<?php
class requette extends Auth{
 
    static function userInfo($db,$id)
    {
        $userI = $db->query('SELECT * FROM user WHERE id = :id' ,['id'=> $id])->fetchAll();
      //  $id = $user->id;
      foreach($userI as $infoU){
        return $infoU;
      }
    }

    static function updateProfil($db,$username,$email,$telephone,$pays,$etudes,$id){
        $db->query("UPDATE  user SET username = '$username', email =' $email', telephone =' $telephone',pays ='$pays',niveau_Etudes ='$etudes' WHERE id = $id");
    }

    static function userIList($db)
    {
        $user = $db->query('SELECT * FROM user ')->fetchAll();
      //  $id = $user->id;
    //  foreach($user as $u){
        return $user;
      
    }
}

?>