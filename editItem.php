<html lang="en">
    <?php session_start();
    if(!isset($_SESSION['user'])) {
        header("Location: ../snapshop/signin.php");
    }

    include_once('connection.php');
    ?>
    <head>
        <meta charset="UTF-8">
        <title>Edit Item</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="generalHomePage.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel = "stylesheet" href = "footer.css">
        
        <style>
            header {
                background-color: #5371ff;
                position: sticky;  
                top: 0;
            }

            header img {
                width: 70px;
                height: 70px;
            }

            main {
                width: 100%;
            }
            .image img {
                width: 30px;
                height: 30px;
            }

            .contentHead {
                background-color: rgba(83, 113, 255, 0.12);
                width: 100%;
                height: 200px;
            }

            .para {
                margin-top: 2%;
            }

            .content {
                margin: 0 60px;
                margin-top: -100px;
                background-color: white;
            }

            .op {
                width: 50%;
            }

            .outercontainer,.innercontainer {
                width: 100%;
                height: 150px;
            }

            .myfile {
                display: none;
                visibility: none;
            }

            .myfilelabel {
                cursor: pointer;
            }

            /* .button {

            } */

            @media screen and (max-width:600px){
                .try{
                    height: 200%;
                    
                }
                .parent{
                    height: auto;
                }
                .first,.second {
                    width: 100%;
                }
            } 

            .imageholder {
                width: 90%;
                height: 200px;
                background-position: center;
                background-size: cover;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark" style = "background-color: #9e9e9e;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="logo1.png" alt="" style = "width: 50px; height: 30px; margin-left: 30px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <div class="dropdown ms-3">
                <button class="btn dropdown-toggle text-white" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Category
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Clothes</a></li>
                    <li><a class="dropdown-item" href="#">Foods</a></li>
                    <li><a class="dropdown-item" href="#">Cosmetics</a></li>
                </ul>
                </div>
                    <?php
                    $row = mysqli_query($con,"select * from snapshopuser where phonenumber = '".$_SESSION['user']."'")->fetch_assoc();
                    $type = $row['type'];
                    if($type === 'buyer') { ?>
                        <a class = "nav-link text-white text-decoration-none" href="#"><i class = "fa fa-heart text-white me-2" style = "color:red;"></i>My WishList</a>
                    <?php }
                    else { ?>
                    <a class="nav-link" href="mylist.php">Your Product</a>
                    <?php }
                ?>
                <a class="nav-link" href="Contact.php">Help</a>
            </div>
            </div>
        </div>
        </nav>
        <div class = "sticky-navbar d-flex justify-content-between text-white" style = "background-color: #7a7a7a;">
        <h1 class = "snapshop" style = "margin-left: 30px; color: coral;">Snapshop</h1>
        <div class="dropdown me-3 d-flex align-items-center">
            <i class = "notification fa fa-bell text-white me-4"><span class = "p-1" style = "border-radius: 50%; background-color: red;">3</span></i>
            <button class="btn dropdown-toggle"  type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style = "background-color: coral;">
                <i class = "bi bi-person-circle me-1"><span class = "account">
                <?php
                    include_once('connection.php');
                    $user = $_SESSION['user'];
                    $sql = "select * from snapshopuser where phonenumber = '$user' limit 1";
                    $userResult = mysqli_query($con, $sql);
                    
                    $row = $userResult->fetch_assoc();
                    echo $row['name'];
                ?>
                </span></i>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <div class = "d-flex align-items-center ps-2">
                    <i class="bi bi-person-square"></i>
                    <li><a class="dropdown-item" href="profile.php">My Profile</a></li>
                </div>
                <div class = "d-flex align-items-center ps-2">
                    <i class="bi bi-pencil-square"></i>
                    <li><a class="dropdown-item" href="user_profile.php">Edit Profile</a></li>
                </div>
                <div class = "d-flex align-items-center ps-2"> 
                    <i class="bi bi-gear"></i>
                    <div class="dropdown dropdown-item">
                        <button class="btn border-none dropdown-toggle" style = "margin-left: -12px;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Setting
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="changeuser.php">
                            Change User
                            </a>
                        </div>
                        </div>
                </div>
                <div class = "d-flex align-items-center ps-2">
                    <i class="bi bi-box-arrow-left"></i>
                    <li><a class="dropdown-item" href="destroy.php">Log Out</a></li>
                </div>
            </ul>
        </div>
    </div>

        <main>
            <div class="try">
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
                    <div>
                        <h2 class = "fw-bold text-center">EDIT ITEMS</h2>
                    </div>
                </div>
    
                <form action="itemedit.php" method = "post" enctype="multipart/form-data">
                <div class = "content parent">
                    <div class = "rowcontent row ">
                        <div class="col-6 p-5 first">

                        <?php
                        include_once('connection.php');
                        if(isset($_GET['id'])) {
                            $id = $_GET['id'];

                            $sql = "select * from product where productID = '$id'";
                            $result = mysqli_query($con,$sql)->fetch_assoc();
                            $pt = $result['product_title'];
                            $pr = $result['price'];
                            $desc = $result['description'];
                            $image = $result['image'];
                            $discount = $result['discount']; ?>

                            <div class = "mb-4">
                                <input type = "hidden" name = "id" value = "<?php echo $_GET['id']; ?>">
                            </div>
                            <div class = "mb-4">
                                <input class = "form-control rounded-pill" name = "producttitle" value = "<?php echo $pt; ?>" type="text" placeholder="Product Title">
                            </div>
                            <div class="mb-4">
                                <select class = "form-select rounded-pill" name="category" id="">
                                    <option value="0">Category</option>
                                    <option value="clothes">Clothes</option>
                                    <option value="cosmetics">Cosmetics</option>
                                    <option value="textiles">Textiles</option>
                                    <option value="foods">Foods</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <input class="form-control rounded-pill" name = "price" value = "<?php echo $pr; ?>" type="text" placeholder="Price">
                            </div>
                            <div class="mb-4">
                                <input class="form-control rounded-pill" name = "description" value = "<?php echo $desc; ?>" type="text" placeholder="Description">
                            </div>
                            <div>
                                <select class="form-select rounded-pill" name="location" id="">
                                    <option value="0">Location</option>
                                    <option value="Thimphu">Thimphu</option>
                                    <option value="Paro">Paro</option>
                                    <option value="Chukha">Chukha</option>
                                    <option value="Punakha">Punakha</option>
                                    <option value="WangduePhodrang">WangduePhodrang</option>
                                    <option value="Trongsa">Trongsa</option>
                                    <option value="Bumthang7">Bumthang</option>
                                    <option value="Haa">Haa</option>
                                    <option value="Mongar">Mongar</option>
                                    <option value="Trashigang">Trashigang</option>
                                    <option value="TashiYangtse">TashiYangtse</option>
                                    <option value="Lhuentse">Lhuentse</option>
                                    <option value="SamdrupJongkhar">SamdrupJongkhar</option>
                                    <option value="Sarpang">Sarpang</option>
                                    <option value="Dagana">Dagana</option>
                                    <option value="Samtse">Samtse</option>
                                    <option value="Zhemgang">Zhemgang</option>
                                    <option value="Tsirang">Tsirang</option>
                                    <option value="Pemagatshel">Pemagatshel</option>
                                    <option value="Gasa">Gasa</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="pt-3 ps-3" for="">Optional</label>
                            </div>
                            <div class="mb-5">
                                <select class="form-select rounded-pill" name="condition" id="condition">
                                    <option value="new">New</option>
                                    <option value="secondhand">Second Hand Product</option>
                                </select>
                            </div>
                            
                        </div>
                        <div class="col-6 p-5 second">
                            <div class = "outercontainer">
                                <div>
                                    <div class = "innercontainer border border-dark d-flex justify-content-center align-items-center">
                                            <label class = "myfilelabel" for="fileimport"><i class = "bi bi-pencil"></i></label>
                                            <input class = "myfile" name = "image" value = "<?php echo 'upload/'.$image; ?>" type="file" id = "fileimport" accept="image/*">
                                        <p class = "ms-2">Change picture</p>
                                    </div>
                                    <p class = "text-center">Snaps: <span class = "imagecounter">0</span>/1 Choose your snap <span class = "imagefull"></span></p>
                                    <h5>Offer:</h5>
                                </div>
                                
                                <div>
                                    <div>
                                        <input class = "form-control" name = "discount" value = "<?php echo $discount; ?>" type="text" placeholder="Discount*">
                                    </div>
                                    <div class = "mt-5 text-center d-flex align-items-center">
                                        <div class = "imageholder">
                                            <input id="image" type="image" width="100" height="30" alt="Login" src="<?php echo 'upload/'.$image; ?>" style = "width: auto; height: 100%;">
                                        </div>
                                        <div>
                                            <i class="imagedeletebutton bi bi-archive" style = "cursor: pointer;"></i>
                                        </div>
                                    </div>
                                    <div class = "d-flex justify-content-center mt-2">
                                        <div class = "text-center mb-4 me-3">
                                            <input class="button me-3" type="submit" name = "submit" value="Publish" style = "padding-left: 20px; padding-right: 20px; border-radius: 20px; background-color: orangered;">
                                            <a href="mylist.php" style = "color: orangered; font-size: 20px;">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                            
                            <?php }
                                
                        ?>
                    </div>
                </div>
            </div>
            </form>
                        
        </main>

        <?php 
            include_once('footer.php');   
        ?>

        <script>
            const image_input = document.querySelector(".myfile");
            let upload_image = "";

            const imagecounter = document.querySelector(".imagecounter");
            let image_total = Number(imagecounter.textContent);

            let imageArray = [];

            const full = document.querySelector(".imagefull");

            image_input.addEventListener("change", function() {
                if(imageArray.length === 1) {
                    const hideimage = document.querySelector(".imageholder>input").style.display = "none";
                    full.innerHTML = "/Image Full";
                    full.style.color = "red";
                }
                else {
                    const hideimage = document.querySelector(".imageholder>input").style.display = "none";
                    const reader = new FileReader();

                    reader.addEventListener("load",() => {
                        upload_image = reader.result;
                        document.querySelector(".imageholder").style.backgroundImage = `url(${upload_image})`;
                        imageArray.push(image_input.value);
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
        </script>
    </body>
</html>