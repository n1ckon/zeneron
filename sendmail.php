

<?php
error_reporting(-1);
ini_set('display_errors', 1);

require_once('phpmail/class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();

$body = (
  'У чела имэйл <strong>'.
  $_POST['email'].
  '</strong> и он оставил мессагу<hr>'.
  $_POST['message']
);

$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "smtp.gmail.com"; // SMTP server
$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "tls";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
$mail->Username   = "zeneronlabs@gmail.com";  // GMAIL username
$mail->Password   = "5comrapo";            // GMAIL password

$mail->SetFrom = ($_POST['email'] . $_POST['name']);

$mail->AddReplyTo("zeneronlabs@gmail.com","Nikolai Oreshkin");

$mail->Subject    = "feedback from zeneronlabs";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);

$address = "whoto@otherdomain.com";
$mail->AddAddress($address, "John Doe");

$mail->AddAttachment("images/phpmailer.gif");      // attachment
$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}
    


// require_once "Mail.php";
 
//  $from = $_REQUEST['email'];
//  $to = "<n.oreshkin@gmail.com>";
//  $subject = "Feedback!";
//  $body = $_REQUEST['message'] ;
 
//  $host = "ssl://smtp.gmail.com";
//  $port = "465";
//  $username = "zeneronlabs@gmail.com";
//  $password = "5comrapo";
 
//  $headers = array ('From' => $from,
//    'To' => $to,
//    'Subject' => $subject);
//  $smtp = Mail::factory('smtp',
//    array ('host' => $host,
//      'port' => $port,
//      'auth' => true,
//      'username' => $username,
//      'password' => $password));
 
 
//  $mail = $smtp->send($to, $headers, $body);
 
//  if (PEAR::isError($mail)) {
//    echo("<p>" . $mail->getMessage() . "</p>");
//   } else {
//    echo("<p>Message successfully sent!</p>");
//   }
 ?>