<?php 
    include_once('connection.php');

    if(isset($_POST['submit'])) {
        $number = $_POST['phonenumber'];

        if(empty($number)) {
            header("Location: ../snapshop/forgotpassword.php?error=Feild Cannot Be Blank");
        }
        else if($number[0] !== '1' && $number[1] !== '7') {
            header("Location: ../snapshop/forgotpassword.php?error=Enter Valid Phone Number");
        }
        else if($number[0] !== '7' && $number[1] !== '7') {
            header("Location: ../snapshop/forgotpassword.php?error=Enter Valid Phone Number");
        }
        else {
            $result = mysqli_query($con, "select * from snapshopuser where phonenumber = '".$number."'");
            $total = mysqli_num_rows($result);
            if($total === 0) {
                header("Location: ../snapshop/signup.php");
            }
            else {
                header("Location: ../snapshop/otp.php?number=$number");
            }
        }

        


    }
?>