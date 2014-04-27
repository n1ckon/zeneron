<?php
  $email = $_REQUEST['email'] ;
  $message = $_REQUEST['message'] ;
  $fname = $_REQUEST['fname'] ;

  mail( "zeneronlabs@gmail.com", "Feedback Form Results",
    $message, "From: $email" );
  header( "Location: http://www.zeneron.com" );
?>