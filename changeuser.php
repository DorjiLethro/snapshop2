<?php
    session_start();
    include_once('connection.php');

    $row = mysqli_query($con,"select * from snapshopuser where phonenumber = '".$_SESSION['user']."'")->fetch_assoc();
    $typ = $row['type'];

    if($typ === 'buyer') {
        mysqli_query($con,"update snapshopuser set type = 'seller' where phonenumber = '".$_SESSION['user']."'");
        unset($_SESSION['user']);
        header("Location: ../snapshop/signin.php");
    }
    else {
        mysqli_query($con,"update snapshopuser set type = 'buyer' where phonenumber = '".$_SESSION['user']."'");
        session_start();
        unset($_SESSION['user']);
        header("Location: ../snapshop/signin.php");
    }
?>