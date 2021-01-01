<?php
    $con = mysqli_connect("localhost", "root", "", "portfolio");

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $ip_address = $_SERVER["REMOTE_ADDR"];

    $sql = "INSERT INTO email_list(name, email, phone, message, userIp) VALUES ('$name', '$email', '$phone', '$message', '$ip_address')";

    if(!mysqli_query($con, $sql)){
        echo "Data has not saved";
    } else{
        echo "Data is saved successfully";
    }
?>