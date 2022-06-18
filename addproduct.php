<html lang="en">
    <?php session_start();
    if(!isset($_SESSION['user'])) {
        header("Location: ../snapshop/signin.php");
      }
    ?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Add Item</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="snapshop.css">
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <link href = 'addproduct.css' rel = 'stylesheet'>
    </head>
    <body>
        <script src = "additemHeader.js"></script>

        <main>
            <div class = "contentHead">
                <div class = "d-flex align-items-center ms-4">
                    <li class = "list-inline-item me-4"><a class = "text-decoration-none" href=""><i class="bi bi-person-circle"></i></a></a></li>
                    <p class = "Username mt-3 me-2">
                    <?php
                        include_once('connection.php');
                        $user = $_SESSION['user'];
                        $sql = "select * from snapshopuser where phonenumber = '$user' limit 1";
                        $userResult = mysqli_query($con, $sql);
                        
                        $row = $userResult->fetch_assoc();
                        echo $row['name'];
                    ?>
                    </p>
                </div>
                <div class = "">
                    <h2 class = "fw-bold text-center">Add Item</h2>
                </div>
            </div>
            <form  action="addItem.php" method="post" enctype = "multipart/form-data">
            <div class = "content">
                <div class = "mainContent d-flex justify-content-around">
                    <div>
                        <div class = "addimage d-flex justify-content-center align-items-center custom-file">
                            <label for="fileupload"><i class="fileicon bi bi-plus-circle" style = "color: coral;"></i></label>
                            <input class = "imageinput" name = "image" type="file" id = "fileupload" accept="image/*">
                            <p class = "para ms-2 fw-bold">Add Snap</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <p class = "text-center">Snaps: <span class = "imagecounter">0</span>/1 Choose your snap <span class = "imagefull"></span></p>
            </div>
            <div class = "d-flex justify-content-center">
                    <?php
                        if(isset($_GET['error'])) { ?>
                           <?php $error = $_GET['error']; ?>
                           <?php if($error === 'f') { ?>
                                <div class = "error p-3 text-center">
                                    You Must Fill All The Provided Form.
                                </div>
                           <?php }elseif($error === 'e') { ?>
                                <div class = "error p-3 text-center">
                                    Please! Check The Image File Format.
                                </div>
                           <?php }
                        }
                    ?>
            </div>
            <div class = "d-flex justify-content-center mb-4">
                <div class = "con">
                    <div class="myform row gx-3 p-5">
                        <div class="first col-8">
                                <div class = "inputform mt-5">
                                    <div>
                                        <input class = "form-control rounded mb-4" name = "product_title" type="text" placeholder="Product Title*">
                                    </div>
                                    <div>
                                        <select class = "form-select mb-4" name="category" id="">
                                            <option selected value="default">Select category*</option>
                                            <option value="clothes">Clothes</option>
                                            <option value="foods">Foods</option>
                                            <option value="cosmetics">Cosmetics</option>
                                            <option value="textile">Textile</option>
                                        </select>
                                    </div>
                                    <div>
                                        <input class = "form-control mb-4" name = "price" type="text" placeholder="Price*">
                                    </div>
                                    <div>
                                        <input class = "form-control mb-4" type="text" name = "description" placeholder="Description*">
                                    </div>
                                    <div>
                                        <select class = "form-select mb-4" name="location" id="">
                                            <option selected value="0">Select Location*</option>
                                            <option value="Thimphu">Thimphu</option>
                                            <option value="Paro">Paro</option>
                                            <option value="Haa">Haa</option>
                                            <option value="Bumthang">Bumthang</option>
                                            <option value="Gasa">Gasa</option>
                                            <option value="Trongsa">Trongsa</option>
                                            <option value="Zhemgang">Zhemgang</option>
                                            <option value="Samtse">Samtse</option>
                                            <option value="Sarpang">Sarpang</option>
                                            <option value="Samdrup Jongkhar">Samdrup Jongkhar</option>
                                            <option value="Lhuentse">Lhuentse</option>
                                            <option value="Trashigang">Trashigang</option>
                                            <option value="Trashiyangsi">Trashiyangtse</option>
                                            <option value="Dagana">Dagana</option>
                                            <option value="Punakha">Punakha</option>
                                            <option value="Wandue Phodrang">Wangdue Phodrang</option>
                                            <option value="Chuukha">Chuukha</option>
                                            <option value="Tsirang">Tsirang</option>
                                            <option value="Pemagatshel">Pemagatshel</option>
                                            <option value="Mongar">Mongar</option>
                                        </select>
                                    </div>
                                    <p class = "ms-3">Optional:</p>
                                    <div>
                                        <select class = "form-select" name="condition" id="condition">
                                            <option value="new" selected>New</option>
                                            <option value="secondhand">Secondhand</option>
                                        </select>
                                    </div>
                                    <div class = "addItemButton d-flex mt-5">
                                        <input class = "buttonfirst btn mb-3" name = "submit" type="submit" value = "Publish" style = "background-color: coral;">
                                    </div>
                                    <div class = "text-center mb-5">
                                        <a href="sellerpage.php" style = "margin-left: -90px;">Back To Home</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </form>
                        <div class="colom2 col-4 d-flex justify-content-center align-items-center ps-5 pe-5">
                            <div class = "outerimageholder">
                                <p class = "text-center fw-bold">Your Image</p>
                                <div class = "imageholder">

                                </div>
                                <div class = "text-center mt-4">
                                    <button class = "imagedeletebutton"><i class="bi bi-trash3"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </main>

        <script>
            const image_input = document.querySelector(".imageinput");
            let upload_image = "";

            const imagecounter = document.querySelector(".imagecounter");
            let image_total = Number(imagecounter.textContent);

            let imageArray = [];

            const full = document.querySelector(".imagefull");

            image_input.addEventListener("change", function() {
                if(imageArray.length === 1) {
                    full.innerHTML = "/Image Full";
                    full.style.color = "red";
                }
                else {
                    const reader = new FileReader();

                    reader.addEventListener("load",() => {
                        upload_image = reader.result;
                        document.querySelector(".imageholder").style.backgroundImage = `url(${upload_image})`;
                        imageArray.push(image_input.value);
                        console.log(imageArray.length);
                    })
                    reader.readAsDataURL(this.files[0]);
                    
                    image_total += 1;
                    imagecounter.innerHTML = image_total;
                }
            })

            const delete_button = document.querySelector(".imagedeletebutton");

            function deleteImage() {
                event.preventDefault();
                if(imageArray.length <= 0) {
                    full.innerHTML = "/No image to delete";
                    full.style.color = "red"
                }
                else {
                    const image = document.querySelector(".imageholder");
                    image.style.backgroundImage = "none";
                    image_total -= 1;
                    imagecounter.innerHTML = image_total;

                    imageArray.pop();

                    full.innerHTML = " ";
                }



            }

            delete_button.addEventListener("click", deleteImage);

            const publishButton = document.querySelector(".buttonfirst");

            function addItem() {
                // event.preventDefault();
            }
            publishButton.addEventListener("click",addItem);


            
        </script>

    </body>
</html>