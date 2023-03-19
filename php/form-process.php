<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "O nome é obrigatório ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "O email é obrigatório ";
} else {
    $email = $_POST["email"];
}

// MSG SUBJECT
if (empty($_POST["msg_subject"])) {
    $errorMSG .= "Subject is required ";
} else {
    $msg_subject = $_POST["msg_subject"];
}


// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "A Mensagem é obrigatória";
} else {
    $message = $_POST["message"];
}


$EmailTo = "henriqueestrela2004@gmail.com";
$Subject = "Nova mensagem recebida";

// prepare email body text
$Body = "Name: ".$name."\n Email: ".$email."\n Subject: ".$msg_subject."\n Message: ".$message."\n";

// send email

$success = mail($EmailTo, $Subject, $Body, 'From:',$email);

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