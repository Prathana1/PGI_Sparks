<?php 
   $name = $_POST['name'];
   $visitor_email = $_POST['email'];
   $message = $_POST['message'];

   $email_form = 'Prathanajena708@gmail.com';


   $email_subject = "New Form Submission";


   $email_body ="User Message: $message.\n";
                 "User Email: $visitor_email.\n";
                   "User Messsage: #message.\n";
   
    $to = "prathana.jena.123@gmail.com";

    $headers = "Form: $email_form \r\n";

    $headers .= "Reply-To": $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: contact.html");

   

?>