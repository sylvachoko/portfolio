<?php
$postData = $statusMsg = '';
$msgClass = 'errordiv';
if(isset($_POST['submit_x'])){
    // Get the submitted form data
    $postData = $_POST;
    $email = $_POST['email'];

    // Check whether submitted data is not empty
    if(!empty($email)){

        // Validate email
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            $statusMsg = 'Please enter your valid email.';
        }else{
            
             // Recipient
             $toEmail = 'sylvanwachokor@icloud.com, onyekanwachokor@gmail.com';

            // Sender
            $from = 'hi@sylva.design';
            $fromName = 'Sylva.design';
                
             // Subject
             $emailSubject = 'Newsletter Request';

             // Message 
             $htmlContent = '<h2>I want to join your mailing list</h2>
             <p><b>Email:</b> '.$email.'</p>';

             $headers = "From: $from \r\n";
             $headers .= "Reply-To: $email_from \r\n";
             
             $message .= "--{$mime_boundary}--";
             $returnpath = "-f" . $email;
             
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Send email
    $mail = mail($toEmail, $emailSubject, $message, $headers, $returnpath);
                        
        }

         // If mail sent
         if($mail){
            $statusMsg = 'Successfully Sent ⚡️!';
            $msgClass = 'succdiv';
            
            $postData = '';
        }else{
            $statusMsg = 'Your request submission failed, please try again.';
        }
    }else{
        $statusMsg = 'Please fill this fields.';
    }
    }
    ?>