<?php

if(isset($_POST["submit"])){
   $msg='Name: '.$_POST["name"] ."\n"
        .'Email: '.$_POST['email'] ."\n"
        .'Number: '.$_POST['number'] ."\n"
        .'Company: '.$_POST['company'] ."\n"
        .'Message: '.$_POST['message'];
    mail('artisingh221100@gmail.com', 'Sample Contact Us Form', $msg);
    header("location:contactu.html");

} else{
    header("location:contact.html");
    exit(0);
}


?>