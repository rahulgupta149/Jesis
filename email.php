<?php
// https://myaccount.google.com/lesssecureapps

$to="lamaneezan321@gmail.com";
$subject="This is test subject";
$message="This is test email from localhost";
if(mail($to,$subject,$message)){
    echo "Email Sent.";
}else{
    echo "Unable to send email";
}

?>