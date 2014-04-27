

<?php
require_once "Mail.php";
 
 $from = $_REQUEST['email'];
 $to = "<n.oreshkin@gmail.com>";
 $subject = "Feedback!";
 $body = $_REQUEST['message'] ;
 
 $host = "ssl://smtp.gmail.com";
 $port = "465";
 $username = "zeneronlabs@gmail.com";
 $password = "5comrapo";
 
 $headers = array ('From' => $from,
   'To' => $to,
   'Subject' => $subject);
 $smtp = Mail::factory('smtp',
   array ('host' => $host,
     'port' => $port,
     'auth' => true,
     'username' => $username,
     'password' => $password));
 
 
 $mail = $smtp->send($to, $headers, $body);
 
 if (PEAR::isError($mail)) {
   echo("<p>" . $mail->getMessage() . "</p>");
  } else {
   echo("<p>Message successfully sent!</p>");
  }
 ?>