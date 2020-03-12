<?php
$errorMSG = "";
// SUBJECT
if (empty($_POST["subject"])) {
    $errorMSG = "Subject is required";
} else {
    $subject = $_POST["subject"];
}
// EMAIL
if (empty($_POST["email"])) {
    $errorMSG = "Email is required";
} else {
    $email = $_POST["email"];
}
// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Message cannot be empty";
} else {
    $message = $_POST["message"];
}

$EmailTo = "contact@rusteddelusion.com";
$Subject = $subject;
// prepare email body text
$Body = "";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";
$Body .= "A message sent through rusteddelusion.com contact form"
// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);
// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}
?>
