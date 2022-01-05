<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    
    // Collecting all the info from form
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $desc = $_POST["desc"];

    $n = $name;
    $e = $email;
    $s = $subject;
    $d = $desc;
}
$to_email = "apnisocietyde@gmail.com";
$subject = $s;
$body = $desc."<br> Name: ".$n."<br> Email: ".$e;
$header = "From: $e";

if(mail($to_email, $subject, $body, $header)){
    echo "<script type='text/JavaScript'> window.location.replace('home.php'); </script>";
}
else{
    echo "Failed to send mail";
}
?>