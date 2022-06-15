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
     // $update = date('Y.m.d H:i:s');
        $db->query("UPDATE  user SET username = '$username', email =' $email', telephone =' $telephone',pays ='$pays',niveau_Etudes ='$etudes' WHERE id = $id");
    }

    static function userIList($db)
    {
        $user = $db->query('SELECT * FROM user ')->fetchAll();
      //  $id = $user->id;
    //  foreach($user as $u){
        return $user;
      
    }

    static function sendmessage($db,$objet,$message,$id)
    {
      //$idu= $db->query("SELECT id FROM user WHERE id = $id")->fetch();
      //var_dump($idu->id);
      $db->query("INSERT INTO message SET objet = ?, message = ?, id_user = ?",[$objet,$message,$id]);
    }

    static function getMessage($db)
    {
      $message = $db->query("SELECT * FROM message")->fetchAll();
      return $message;
    }
  
}


?>