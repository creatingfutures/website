<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }

$gender="not set";
$location="not set";
if (isset($_POST['gender']) & !empty($_POST['gender'])) {
   $gender=$_POST['gender'];
}
if (isset($_POST['location'])& !empty($_POST['location'])) {
   $location=$_POST['location'];
}
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
   
// Create the email and send the message
$to = 'jimmy.cherian@creatingfutures.in'; //jims.cherian@gmail.com info@creatingfutures.in.
$email_subject = "Volunteer Contact From CF Website:  $name";
$email_body = "You have received a new message from your CF website form for volunteering.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nGender:$gender \n\n Location:$location. \n\n Phone: $phone\n\nMessage:\n$message";
$headers = "From: info@creatingfutures.in\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";  
mail($to,$email_subject,$email_body,$headers);
return true;         
?>