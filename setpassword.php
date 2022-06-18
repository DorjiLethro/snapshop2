<?php
    require_once('connection.php');

    if(isset($_POST['submit'])) {
        $password = $_POST['password'];
        $confirm = $_POST['confirm'];

        $number = $_POST['phonenumber'];

        if($password === '' || $confirm === '') {
            header("Location: ../snapshop/resetpassword.php?error=k");
        }
        elseif($password !== $confirm) {
            header("Location: ../snapshop/resetpassword.php?error=i");
        }
        else {
            $hashed = password_hash($confirm,PASSWORD_DEFAULT);
            $result = mysqli_query($con,"update snapshopuser set password = '$hashed' where phonenumber = '$number'");
            header("Location: ../snapshop/signin.php");
        }
    }
?>