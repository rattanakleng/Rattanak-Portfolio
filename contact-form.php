<?php

if (isset ($_POST['submit'])) {

    $name = $_POST["name"];
    $mailFrom = $_POST["email"];
    $message = $_POST["message"];
    $subject = $_POST["subject"];
    
    $mailTo = "rleng@live.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have receive an email from ".$name.".\n\n".$message;
    
    mail($mailTo, $subject, $txt, $headers);
    
    header("Location: index.php?mailsend");
}
?>
