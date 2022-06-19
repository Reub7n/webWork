<?php
    include("connect.php");
    $uname = $_POST['uname'];
    $password = $_POST['password'];
    $creds = "SELECT uname,pword FROM users WHERE uname='$uname' AND pword='$password'";
    $results = mysqli_query($connection,$creds);

    
    if($results){       
        while( $data = mysqli_fetch_assoc($results)){
            if(($data['uname'] == $uname) && ($data['pword'] == $password)){
                session_start();
                $_SESSION['uname'] = $uname;
                header("location:http://localhost/Web-work/php/Alumni.php");
            }else{
                echo "User Invalid";
            }
        }
    }
    
    
?>