<?php 

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $mailForm = $_POST['mail'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $mailTo = "maka@maka.com";
        $headers = "From: ". $mailForm;
        $txt = "You have recived an e-mail form ". $name. ".\n\n" .$message;

        mail($mailTo, $subject, $txt, $headers);
        header("Location: index.php?mailsend");
    }

?>