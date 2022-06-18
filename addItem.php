 <?php
    session_start();
    require_once("connection.php");

    if(isset($_POST['submit'])) {

            $product = $_POST["product_title"];
            $category = $_POST["category"];
            $price = $_POST["price"];
            $description = $_POST["description"];
            $location = $_POST["location"];
            $condition = $_POST["condition"];

            $user = $_SESSION['user'];
            
            $name = $_FILES['image']['name'];
            $target_dir = "upload/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            
            // Select file type
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            
            // Valid file extensions
            $extensions_arr = array("jpg","jpeg","png","gif");

            $new_product = array(
                "product_title" => $product,
                "category" => $category,
                "price" => $price,
                "description" => $description,
                "location" => $location,
                "condition" => $condition,
                "image" => $target_file

            );

            if(filesize("product.json") == 0) {
                $first_data = array($new_product);
                $data_to_save = $first_data;
            }
            else {
                $old_product = json_decode(file_get_contents("product.json"),true);
                array_push($old_product,$new_product);
                $data_to_save = $old_product;
            }

            file_put_contents("product.json",json_encode($data_to_save,JSON_PRETTY_PRINT));


            if($product === '' || $price === '' || $description === '') {
                header("Location: ../snapshop/addproduct.php?error=f");
            }
            elseif(!in_array($imageFileType,$extensions_arr)) {
                header("Location: ../snapshop/addproduct.php?error=e");
            }
            else {
                if(in_array($imageFileType,$extensions_arr)){
                    // Upload file
                    if(move_uploaded_file($_FILES['image']['tmp_name'],$target_dir.$name)){
                        // Insert record
                        // $query = "insert into images(name) values('".$name."')";
                        $sDate = date("Y-m-d H:i:s");
                        $string = "insert into product(product_title,category,price,description,location,product_condition,image,user,date) values ('$product','$category','$price','$description','$location','$condition','$name','$user','$sDate')";
                        // mysqli_query($con,$query);
    
                        mysqli_query($con,$string);

                        header("Location: ../snapshop/sellerpage.php");
                    }
                
                } 
            }
                 
    }
?>