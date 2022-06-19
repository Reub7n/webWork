<?php
    $connection = mysqli_connect("localhost","root","","Web_work");
    if($connection){
        echo "";
    }else{
        echo die("No connection").mysqli_error();
    }
?>