<?php
    include("connect.php");
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $sname = $_POST['sname'];
    $uname = $_POST['uname'];
    $birthdate = $_POST['dob'];
    $pword = $_POST['password'];
    $file = $_POST['mycv'];
    $email = $_POST['email'];
    $mnumber = $_POST['phone'];
    $fbacc = $_POST['facebook'];
    $twacc = $_POST['twitter'];
    $igacc = $_POST['insta'];

    $sql = "INSERT INTO `users`(`fname`,`mname`,`sname`,`uname`,`birthdate`,`pword`,`file`,`email`,`mnumber`,`fbacc`,`twacc`,`igacc`) VALUES ('$fname','$mname','$sname','$uname','$birthdate','$pword','$file','$email','$mnumber','$fbacc','$twacc','$igacc')";
    $results = mysqli_query($connection,$sql);
    if($results){
        session_start();
        $_SESSION['email'] = $email;
        header('location:http://localhost/Web-work/php/Alumni.php');
        // echo "Results retrieved";
    }else{
        echo "Error";
    }
?>
