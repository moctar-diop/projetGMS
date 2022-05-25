<?php 

use PHPMailer\PHPMailer\PHPMailer;
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class email{
public function email($db,$email){
    // $user_id = $_GET['id'];
    // $token =$db->query("SELECT token FROM user WHERE id= ?",[$user_id])->fetch();

     
     if($db){
             

             //Load Composer's autoloader
             require '../vendor/autoload.php';

         //Create an instance; passing `true` enables exceptions
         $mail = new PHPMailer(true);

         try {
             //Server settings
             $phpmailer = new PHPMailer();
             $phpmailer->isSMTP();
             $phpmailer->Host = 'smtp.mailtrap.io';
             $phpmailer->SMTPAuth = true;
             $phpmailer->Port = 2525;
             $phpmailer->Username = '1cb6e66a3f2a49';
             $phpmailer->Password = 'af787142757755';

             //Recipients
             $mail->setFrom('me@example.com', 'Mailer');
             $mail->addAddress($email);     //Add a recipient
             //$mail->addAddress('ellen@example.com');               //Name is optional
            // $mail->addReplyTo('info@example.com', 'Information');
           //  $mail->addCC('cc@example.com');
          //   $mail->addBCC('bcc@example.com');

             //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
         //    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

             //Content
             $mail->isHTML(true);                                  //Set email format to HTML
             $mail->Subject = "Confirmation de votre compte";
             $mail->Body    = "Afin de valider votre compte merci de cliquer sur ce lien";
          //   $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

             $mail->send();
             echo 'Message has been sent';
         } catch (Exception $e) {
             echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
         }

}
 }

}