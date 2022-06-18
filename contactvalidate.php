<?php

    require_once "connection.php";

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $number = $_POST['number'];
        $message = $_POST['message'];

        if($name === '' || $number === '' || $message === ''){
            header("Location: ../snapshop/Contact.php?error=Field cannot be empty");
        }
        else{
            $sDate = date("Y-m-d H:i:s");
            $query = "insert into contact (usernumber,message,name,date) values ('$number','$message','$name','$sDate')";
            mysqli_query($con,$query);

            header("Location: ../snapshop/Contact.php?error= Message Succesfully send");
        }
    }
?>