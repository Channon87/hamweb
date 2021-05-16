<?php
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $phone=$_POST['phoneNumber'];
        $email=$_POST['email'];
        $msg=$_POST['msg'];

        $to='leetking@live.com.au';
        $subject='Online Enquiry Website';
        $message="Name: ".$name."\n"."Phone: ".$phone."\n"."Enquiry: "."\n\n".$msg;
        $headers="From: ".$email;
    if (mail($to, $subject, $message, $headers)){
        echo"<h1>Sent Succesfully! Thank you for your request"." ".$name", We will reply as soon as possible.</h1>";
    }else{
        echo "Something went wrong with the form submission request.\nPlease directly email info@hammelsplumbing.com"
    }
    }
?>