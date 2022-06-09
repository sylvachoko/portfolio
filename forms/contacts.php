<?php
    $con = mysqli_connect("localhost", "sylvades_form", "a%TGG}0YbOmw", "sylvades_form");
    // $con = mysqli_connect("localhost", "root", "", "portfolio");

    if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $ip_address = $_SERVER['REMOTE_ADDR'];

    $sql = "INSERT INTO email_list(name, email, phone, message, userIp) VALUES ('$name', '$visitor_email', '$phone', '$message', '$ip_address')";

    // if(!mysqli_query($con, $sql)){
    //     echo "Data has not saved";
    // } else{
        
    $to = "sylvanwachokor@icloud.com";
    $email_subject = "Contact Form";
    $email_body =  '<h2>Contact Details</h2>
                    <p><b>Name:</b> '.$name.'</p>
                    <p><b>Email Address:</b> '.$visitor_email.'</p>
                    <p><b>Phone Number:</b> '.$phone.'</p>
                    <p><b>Message:</b> '.$message.'</p>
                    <p><b>IP Address:</b> '.$ip_address.'</p>';

    $headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";
                    
	$headers .= 'From: Sylva.design <hello@sylva.design>' . "\r\n";

    mail($to, $email_subject, $email_body, $headers);
    {

    }

    $tos = $visitor_email;
    $subjects = "Thanks for contacting";
    $messages = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sylva</title>
    </head>
    <style>
     *{margin:0;padding:0;box-sizing:border-box;transition:.4s}body{font-family:Poppins,sans-serif;margin:0;padding:0;scroll-behavior:smooth;overflow-x:hidden;overflow-y:scroll;color:#2b2b2b;background-color:#e4e4e4}*,::after,::before{box-sizing:border-box}a{text-decoration:none}h1{font-size:30px;font-weight:1000;font-weight:700}li,p{font-size:16px;font-weight:300;color:#2b2b2b;opacity:1;padding:0}.container{max-width:50%;background-color:#fff;padding:5% 2%;margin:3% auto}.image{width:100%;margin:0 auto}.image img{width:100%}.title{padding-bottom:5%;width:90%;margin:0 auto}.logo-hold{text-align:center}.logo{width:30%}.footer{padding:5% 2%;margin:0 auto;text-align:center}.title h1,b{color:#001030}address{padding:3% 0}.website{width:100%;margin:0 auto;text-align:center}@media(max-width:991px){.container{max-width:70%}}@media(max-width:500px){.container{max-width:80%}body{background-color:#fff}}@media(max-width:400px){.container{max-width:100%}}</style>
    <body>
        <div class="container">
            <div class="title">
                <p>Hi '.$name.', </p>
                <br>
                <p>Thank you for filling my form. I will contact you shortly.</p>
                <br>
            </div>
            <div class="footer">
                <hr>
                <br>
                <p>Sylva Nwachokor ©2021</p>
            </div>
        </div>
    
    </body>
    </html>';
    
    // To send HTML mail, the Content-type header must be set
	$headerss  = 'MIME-Version: 1.0' . "\r\n";
	$headerss .= "Content-Type: text/html; charset=UTF-8". "\r\n";
    
    // Additional headers
	$headerss .= 'To: '.$name.' <'.$visitor_email.'>' . "\r\n";
	$headerss .= 'From: Sylva.design <hello@sylva.design>' . "\r\n";
    
    // Mail it
    mail($tos, $subjects, $messages, $headerss);

    header("Location: ../thankyou.php?successful");


    // }   
}
?>