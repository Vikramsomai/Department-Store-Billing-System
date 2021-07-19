<?php
include'header.php';?>
<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require("phpmailer\Exception.php");
require("phpmailer\SMTP.php");
require("phpmailer\PHPMailer.php");

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
if(isset($_POST["submit"]))
{
$name=$_POST["name"];
$email=$_POST["email"];
$body=$_POST["message"];

try {
    //Server settings
   // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'example18b074@gmail.com';                     //SMTP username
    $mail->Password   = 'example12345';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('example18b074@gmail.com', 'hello');
    $mail->addAddress('vikramsomai4@gmail.com');     //Add a recipient
   
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'department store';
    $mail->Body    = "
    your email: $email<br>
    your name:$name<br>
    $body";
    $mail->send();
    $msg='
    <div class="alert alert-success" role="alert">
    Message has been sent
    </div>';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
//submit 
}
?>
<style>
    .row{
        margin:20px;
    }
    .contact{
        height:500px;
        width:400px;
    }
</style>
<div class="container mt-5">

    <div class="row">
    
    <div class="col-12 col-sm-12 col-lg-6">
   
  <?php if(isset($msg)){echo $msg;}?>
    <form action="" class="form mt-10" method="post">

<div class="form-group">
    <label for="name">username</label>
    <input type="text" class="form-control" id="name"name="name">
</div>
<div class="form-group">
    <label for="email">email</label>
    <input type="text" class="form-control" id="email" name="email">
</div>
<div class="form-group">
    <label for="message">message</label>
    <textarea class="form-control" id="" cols="30" rows="5" name="message"></textarea>
</div>
<div class="form-group">
   <input type="submit" value="send"class="btn btn-primary btn-block"name="submit">
</div>
</form>

    </div>
    <div class="col-12 pl-5 pl-5 col-lg-6">
        <img src="images/undraw_personal_email_t7nw.svg" alt="" srcset=""class="contact">
    </div>
    </div>
   
</div>
<?php include'footer.php';?>