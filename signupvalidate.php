<?php
    require_once("connection.php");

    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $phonenumber = $_POST['phone'];
        $usertype = $_POST['usertype'];
        $check = $_POST['check'];

        try {
            if($name === '' || $phonenumber === '') {
                header("Location: ../snapshop/signup.php?error=Feild Cannot Be Blank");
            }
            elseif($phonenumber[0] !== '1' && $phonenumber[1] !== '7') {
                header("Location: ../snapshop/signup.php?error=Enter Valid Phone Number");
            }
            elseif($phonenumber[0] !== '7' && $phonenumber[1] !== '7') {
                header("Location: ../snapshop/signup.php?error=Enter Valid Phone Number");
            }
            elseif($check !== '1') {
                header("Location: ../snapshop/signup.php?error=Please! Agree");
            }
            else {
                $query = "insert into snapshopuser(name,phonenumber,type) values ('$name','$phonenumber','$usertype')";
                mysqli_query($con,$query);
                header("Location: ../snapshop/otp.php?number=$phonenumber");
            }
        }
        catch(Exception $e) {
            header("Location: ../snapshop/signup.php?error=The User Already Exist");
        }
    }   
?>
