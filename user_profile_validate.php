<?php
    session_start();
    if(!isset($_SESSION['user'])) {
        header("Location: ../snapshop/signin.php");
    }
    include_once('connection.php');

    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $image = $_FILES['image']['name'];
        $type = $_POST['usertype'];
        echo $type;

        if(empty($image)) {
            $sql = "update snapshopuser set name = '$name', type = '$type' where phonenumber = '".$_SESSION['user']."'";
            mysqli_query($con,$sql);
            header("Location: ../snapshop/user_profile.php?msg=successfully updated");
        }
        else {
            $target_dir = "upload/";
            $target_file = $target_dir . basename($image);
            
            // Select file type
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            
            // Valid file extensions
            $extensions_arr = array("jpg","jpeg","png","gif");

            if(in_array($imageFileType,$extensions_arr)){
                // Upload file
                if(move_uploaded_file($_FILES['image']['tmp_name'],$target_dir.$image)){
                    // Insert record
                    // $query = "insert into images(name) values('".$name."')";
                    $string = "update snapshopuser set profile = '$image', name = '$name', type = '$type' where phonenumber = '".$_SESSION['user']."'";
                    // mysqli_query($con,$query);

                    mysqli_query($con,$string);

                    header("Location: ../snapshop/user_profile.php?msg=successfully updated");
                }
            
            } 
            else {
                header("Location: ../snapshop/user_profile.php?msg=Unsupported File Type");
            }
        }
    }
?>