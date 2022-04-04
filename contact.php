<?php
$Confirmation = $_POST['Confirmation'];

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$description = $_POST['description'];
$number = $_POST['phone'];
$artists =$_POST['artists'];

$available = $_POST['available'];
$photo = $_POST['photos'];

$to = "tdnguy10@gmail.com";
$subject = "Mail From website";

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "tdnguy10@gmail.com";
$txt ="Type: ".$Confirmation."\r\n Name: ".$fname." ". $lname. "\r\n Email: " .$email. "\r\n Phone number: ".$number. "\r\n Description: " .$description. "\r\n Artist: ".$artists. "\r\n Able to take different artist? ".$available;
$headers = "From: " .$email. "\r\n" .
"CC: mogeselshaday@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}


echo'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Thank you for contacting us. We will get back to you as soon as possible!</h1>
        <p class="back">Go back to the <a href="contactPage.html">homepage</a>.</p>

    </div>
</body>
</html>
';


?>