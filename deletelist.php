<?php 
    session_start();
    include_once('connection.php');

    if(isset($_POST)) {
        $prodid = $_POST['prodid'];

        mysqli_query($con,"delete from product where productID = $prodid");
        header("Location: ../snapshop/mylist.php");
    }
?>