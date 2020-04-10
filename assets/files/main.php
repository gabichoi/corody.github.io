<?php

  $errors = '';
    if(empty($_POST['name'])  || 
      empty($_POST['email']) || 
      empty($_POST['phone']) || 
      empty($_POST['contact']) ||
      empty($_POST['send']) ||
      empty($_POST['message']))
    {
      $errors .= "\n Error: all fields are required";
    }

  $user_name = $_POST['name'];
  $user_email = $_POST['email'];
  $user_phone = $_POST['phone'];
  $user_contact = $_POST['contact'];
  $user_message = $_POST['message'];
  $user_send = $_POST['send'];
  $corody_email = "corodyproject@gmail.com";

  if(empty($errors))
  {
    $to = $myemail; 
    $email_subject = "Corody Donation Form";
    $email_body = 
    "\n Name: $user_name 
     \n Email: $user_email 
     \n Phone number: $user_phone 
     \n Contact option: $user_contact 
     \n Items: $user_message 
     \n Sending option: $user_send";
    
    mail($to,$email_subject,$email_body);
    //redirect to the 'thank you' page
    // header("Location: index.html");
  } 
?>


