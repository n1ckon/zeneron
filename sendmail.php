

<?php
error_reporting(-1);
ini_set('display_errors', 1);

require_once('phpmail/class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

// $mail             = new PHPMailer();

// $body = (
//   'У чела имэйл <strong>'.
//   $_POST['email'].
//   $_POST['fname']. 
//   '</strong> и он оставил мессагу<hr>'.
//   $_POST['message']
// );

// $mail->IsSMTP(); // telling the class to use SMTP
// $mail->Host       = "smtp.gmail.com"; // SMTP server
// $mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
//                                            // 1 = errors and messages
//                                            // 2 = messages only
// $mail->SMTPAuth   = true;                  // enable SMTP authentication
// $mail->SMTPSecure = "tls";                 // sets the prefix to the servier
// $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
// $mail->Port       = 465;                   // set the SMTP port for the GMAIL server
// $mail->Username   = "zeneronlabs@gmail.com";  // GMAIL username
// $mail->Password   = "5comrapo";            // GMAIL password

// $mail->SetFrom("zeneronlabs@gmail.com");

// $mail->AddReplyTo($_POST['email'],  $_POST['fname']);

// $mail->Subject    = "feedback from zeneronlabs";

// $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

// $mail->MsgHTML($body);

// $address = "whoto@otherdomain.com";
// $mail->AddAddress($address, "John Doe");

// if(!$mail->Send()) {
//   echo "Mailer Error: " . $mail->ErrorInfo;
// } else {
//   echo "Message sent!";
// }
    


$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
$mail->Host = "smtp.mail.yahoo.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "zeneronlabs@yahoo.com";
$mail->Password = "5comrapoN";
$mail->SetFrom("zeneronlabs@yahoo.com");
$mail->Subject = "Test";
$mail->CharSet = 'UTF-8';
$mail->Body = (
  'Message from <strong>'.
  $_POST['email'].
  '</strong> with text: <hr>'.
  $_POST['message']
);
$mail->AddAddress("zeneronlabs@yahoo.com");
 if(!$mail->Send())
    {
    echo "Mailer Error: " . $mail->ErrorInfo;
    }
    else
    {
    echo "Thank You!" . " -" . "<a href='home.html' style='text-decoration:none;color:#ff0099;'> Return to Home page</a>";
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