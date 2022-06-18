<?php
    session_start();
    if(!isset($_SESSION['user'])) {
        header("Location: ../snapshop/signin.php");
    }
    include_once "connection.php";

    if(isset($_POST['submit'])){
        try {
            $product_title = $_POST['producttitle'];
            echo $product_title;
            $category = $_POST['category'];
            echo $category;
            $price = $_POST['price'];
            echo $price;
            $description = $_POST['description'];
            echo $description;
            $location = $_POST['location'];
            echo $location;
            $condition = $_POST['condition'];
            $discount = $_POST['discount'];
            echo $discount;
            echo $condition;
            
            $id = $_POST['id'];
            echo $id;
            $user = $_SESSION['user'];

            $name = $_FILES['image']['name'];
            $target_dir = "upload/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);

            
            // Select file type
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            
            // Valid file extensions
            $extensions_arr = array("jpg","jpeg","png","gif");

            if(in_array($imageFileType,$extensions_arr)){
                // Upload file
                if(move_uploaded_file($_FILES['image']['tmp_name'],$target_dir.$name)){
                    // Insert record
                    // $query = "insert into images(name) values('".$name."')";
                    $string = "update product set product_title = '$product_title',category = '$category',price = '$price',description = '$description',location = '$location',product_condition = '$condition',image = '$name',discount = '$discount', user = '$user' where productID = $id";
                    // mysqli_query($con,$query);

                    mysqli_query($con,$string);

                    header("Location: ../snapshop/mylist.php");
                }
            } 
        }
        catch (Exception $e) {
            echo $e;
        }
    }
?>