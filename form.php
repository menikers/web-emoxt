<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'bat/phpmailer/src/Exception.php';
require 'bat/phpmailer/src/PHPMailer.php';
require 'bat/phpmailer/src/SMTP.php';


    // EDIT THE 2 LINES BELOW AS REQUIRED
$email_username = "info@emoxt.com";
// $email_to = "ventas@fincacasteldeoro.com.mx"; //deberia ir el correo de fincacasteldeoro
$email_to = "info@emoxt.com"; //deberia ir el correo de fincacasteldeoro
$email_subject = "Nuevo contacto del Website";
$respuesta = '';

$name = (isset($_POST['name']) ? $_POST['name'] : '');
$email = (isset($_POST['email']) ? $_POST['email'] : '');
$subject = (isset($_POST['subject']) ? $_POST['subject'] : '');
$comments = (isset($_POST['comments']) ? $_POST['comments'] : '');

$eacute = html_entity_decode("&eacute;",ENT_COMPAT,"iso-8859-1");
$oacute = html_entity_decode("&oacute;",ENT_COMPAT,"iso-8859-1");
$uacute = html_entity_decode("&uacute;",ENT_COMPAT,"iso-8859-1");


if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['comments'])){
  $respuesta = 'Error al mandar el formulario';
  die();
}


$email_message = '<html>';
$email_message .= '<head>';
$email_message .= '<title>Your Details Are Below</title>';
$email_message .= '<style>';
$email_message .= '.h1{ padding-top:40px; padding-left:200px; padding-bottom:10px;}';
$email_message .= '.h2{ font-style: italic;  font-size:25px; padding-left: 360px; padding-top:0px;  position:absolute; whith:10px; }';
$email_message .= '.tel{padding-left:250px; padding-top:60px;}';
$email_message .= 'h1 {  font-size:30px ;}';
$email_message .= 'td {  border: black 1px solid}';
$email_message .= '.tdr { text-align:left; }';
$email_message .= '.td { text-align:center; padding-left:100px; padding-right:100px;  padding-top: 2px; padding-bottom: 2px; border-color: black; }';
$email_message .= '.td1 { background-color:white; border-color:white; padding-left:30px;padding-right:30px; }';
$email_message .= '.td2 { border-color: white; padding:15px; padding-top:5px; }';
$email_message .= '.td3 { background-color:white; border-color:white; padding-left:60px;padding-right:60px; }';
$email_message .= '.td4 { padding-left:60px;padding-right:60px; border-color: white; padding-top:10px; padding-bottom:10px;}';
$email_message .= '.table1 { text-align:center; border:0px solid black; padding:1px; position:relative; top:80px;left:10px;}';
$email_message .= '.table2 { border:1px solid black; padding:1px; position:relative; top:80px;left:10px; border-collapse: collapse;}';
$email_message .= '.table3 { text-align:center; border:0px solid black; padding:1px; position:relative; top:100px;left:10px;}';
$email_message .= '</style>';
$email_message .= '<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>';
$email_message .= '</head>';

$email_message .= '<body>';
$email_message .= '<h1 class="h1"> Datos del contacto </h1>';
$email_message .= '<table rules="all" class="table2">';
$email_message .= '<tr><td class="td4" ><strong>Nombre completo:</strong> </td><td class="td4">' . $name . "</td></tr>";
$email_message .= '<tr><td class="td4" ><strong>Subjet:</strong> </td><td class="td4" >' . $subject . '</td></tr>';
$email_message .= '<tr><td class="td4" ><strong>Correo electr' . $oacute . 'nico:</strong> </td><td class="td4" >' . $email . '</td></tr>';
$email_message .= '<tr><td class="td4" ><strong>Comentarios:</strong> </td><td class="td4" >' . $comments . '</td></tr>';

$email_message .= '</table>';
$email_message .= '</body>'; 
$email_message .= '</html>'; 


//Create a new PHPMailer instance
$mail = new PHPMailer(true);
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
$mail->Host = 'mail.emoxt.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
// $mail->SMTPSecure = 'ssl';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = $email_username;
$mail->Password = "!2020Max1N0Reply";
//Set who the message is to be sent from
$mail->setFrom($email_username, 'Emoxt contacto');
//Set who the message is to be sent to
$mail->addAddress($email_to, 'Emoxt  Info Ventas');
//Set the subject line
$mail->Subject = $email_subject;
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Body    = $email_message;

$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

//send the message, check for errors
if (!$mail->send()) {
  $respuesta = 'Error al mandar el formulario.';
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  $respuesta = 'Thank you for contacting us.';
}

  header("Location: index.html?respuesta=$respuesta");

?>

