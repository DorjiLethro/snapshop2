<?php
    session_start();

    require_once('connection.php');

    if(isset($_POST['submit'])) {

        function validate($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);

            return $data;
        }

        $phone = validate($_POST['phone']);
        $password = validate($_POST['password']);
        $check = $_POST['check'];

        $sql = "select * from snapshopuser where phonenumber = '$phone'";
        $result = mysqli_query($con,$sql)->fetch_assoc();
        $hashed = $result['password'];

        if(password_verify($password,$hashed)) {
            $type = $result['type'];
            $pass = $result['password'];
            $_SESSION['user'] = $phone;
            
            if (!isset($_SESSION['user'])){
                header('location:..snapshop/signin.php');
            }

            if($type === 'seller') {
                header("Location: ../snapshop/sellerpage.php");
            }
            else if($phone === '17273747' && $type === 'buyer') {
                header("Location: ../snapshop/admin/index.php");
            }
            else {
                header("Location: ../snapshop/buyerpage.php");
            }
        }

        else if(empty($phone)) {
            header("Location: ../snapshop/signin.php?error=Phone number is required");
            exit();
        }
            
        else if(empty($password)) {
            header("Location: ../snapshop/signin.php?error=Password required");
            exit();
        }
        else if($check !== '1') {
            header("Location: ../snapshop/signin.php?error=Please Agree");
            exit();
        } 
        else if(!password_verify($password,$pass)) {
            header("Location: ../snapshop/signin.php?error=Password mismatch. Try Again!");
            exit();
        } 
    }
?>