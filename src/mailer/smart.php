<?php 

// // $name = $_POST['name'];
// //$phone = $_POST['phone'];
// $email = $_POST['email'];
// $text = $_POST['textarea'];

// require_once('phpmailer/PHPMailerAutoload.php');
// $mail = new PHPMailer;
// $mail->CharSet = 'utf-8';

// // $mail->SMTPDebug = 3;                               // Enable verbose debug output

// $mail->isSMTP();                                      // Set mailer to use SMTP
// $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
// $mail->SMTPAuth = true;                               // Enable SMTP authentication
// $mail->Username = 'mysite_mk@gmail.com';                 // Наш логин
// $mail->Password = 'mk0013093';                           // Наш пароль от ящика
// $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
// $mail->Port = 465;                                    // TCP port to connect to
 
// $mail->setFrom('mysite_mk@gmail.com', 'MK');   // От кого письмо 
// $mail->addAddress('maryna.kurylko@gmail.com');     // Add a recipient
// //$mail->addAddress('ellen@example.com');               // Name is optional
// //$mail->addReplyTo('info@example.com', 'Information');
// //$mail->addCC('cc@example.com');
// //$mail->addBCC('bcc@example.com');
// //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
// $mail->isHTML(true);                                  // Set email format to HTML

// $mail->Subject = 'Данные';
// $mail->Body    = '
// 		Користувач залишив дані <br> 
// 	Name ' . $name . ' <br>
// 	E-mail: ' . $email . '<br>
// 	Message ' . $text . '';

// if(!$mail->send()) {
//     return false;
// } else {
//     return true;
// }

?>