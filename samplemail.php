<?php
    $name = $_POST['name'];
    $email = $_REQUEST['email'];
    $question = $_POST['question'];
	$from = 'From: yoursite.com'; 
    $to = 'info@thinkcorporation.net'; 
    $subject = 'Customer Inquiry';
    $body = "From: $name\n E-Mail: $email\n question:\n $question";

    if ($_POST['Submit']) {
        if (mail ($to, $subject, $body,  "From:" . $email)) { 
            echo "<script> alert('Thanks for your email...'); window.location.href='index.html'; </script>";
        } else { 
            echo '<p>Something went wrong, go back and try again!</p>'; 
        }
    }
?>				 

