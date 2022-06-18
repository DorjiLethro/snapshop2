<html lang="en">
    <?php session_start();
    if(!isset($_SESSION['user'])) {
        header("Location: ../snapshop/signin.php");
      } ?>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link rel="stylesheet" href="generalHomePage.css">
        <link rel="stylesheet" href="buyerpage.css">
        <link rel="stylesheet" href="footer.css">
        <link rel="stylesheet" href="space.css">
        <title>Edit Profile</title>
        <style>

            main {
                width: 100%;
                /* height: 100vh; */
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

            .myfilelabel {
                cursor: pointer;
            }

            @media screen and (max-width:1000px) {
                .rowcontent {
                    display: flex;
                    flex-direction: column;
                }
            } 

            @media screen and (max-width: 900px) {
                .account {
                display: none;
                }
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
                    <a class="nav-link text-white" href="sellerpage.php">Home</a>   
                    <div class="dropdown ms-3">
                    <button class="btn dropdown-toggle text-white" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="clothes.php">Clothes</a></li>
                        <li><a class="dropdown-item" href="foods.php">Foods</a></li>
                        <li><a class="dropdown-item" href="cosmetics.php">Cosmetics</a></li>
                        <li><a class="dropdown-item" href="textile.php">Textiles</a></li>
                    </ul>
                    </div>
                    <?php
                        include_once('connection.php');
                        $row = mysqli_query($con,"select * from snapshopuser where phonenumber = '".$_SESSION['user']."'")->fetch_assoc();
                        $type = $row['type'];
                        if($type === 'buyer') { ?>
                            <a class = "nav-link text-white text-decoration-none" href="#"><i class = "fa fa-heart text-white me-2" style = "color:red;"></i>My WishList</a>
                    <?php }
                    else { ?>
                        <a class="nav-link" href="mylist.php">Your Product</a>
                    <?php }
                    ?>
                </div>
                </div>
            </div>
            </nav>
            <div class = "sticky-navbar d-flex justify-content-between text-white" style = "background-color: #7a7a7a;">
            <h1 class = "snapshop" style = "margin-left: 30px; color: coral;">Snapshop</h1>
            <div class="dropdown me-3 d-flex align-items-center">
                <i class = "notification fa fa-bell text-white me-4"><span class = "p-1" style = "border-radius: 50%; background-color: red;">3</span></i>
                <button class="btn btn-secondary dropdown-toggle"  type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style = "background-color: coral;">
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
        </nav>

        <main>
            <div class="container d-flex justify-content-center align-items-center mt-5">
               <div>
                    <div class = "d-flex align-items-center">
                        <h3 class = "me-3">Edit Profile</h3>
                        <a href="#">Back to Home</a>
                    </div>
                    <p>Make sure the changes are correct</p>
                <form action="user_profile_validate.php" method = "post" enctype="multipart/form-data" class = "text-center">
                <div class = "mb-5 mt-3 text-center" style = "position: relative;">
                    <?php 
                        include_once('connection.php');
                        $s = "select * from snapshopuser where phonenumber = '".$_SESSION['user']."'";
                        $rw = mysqli_query($con,$s)->fetch_assoc();
                        $image = $rw['profile'];

                        if(empty($image)) { ?>
                            <img src="https://www.seekpng.com/png/full/398-3984539_v-taehyung-selca-cute-korean-idol-png-glasses.png" alt="" style = "height: 100px; width: 100px; border-radius: 50%; border: 2px solid #ff4500;">
                       <?php }
                       else { ?>
                        <img src="<?php echo 'upload/'.$image; ?>" alt="" style = "height: 100px; width: 100px; border-radius: 50%; border: 2px solid #ff4500;">
                      <?php }
                    ?>
                    
                    <label class = "ms-4" for="profileimage" style = "cursor: pointer; position: absolute; top: 40;"><i class = "bi bi-pen"></i></label>
                    <input type="file" name = "image" id = "profileimage" style = "display: none;">
                </div>
                <?php
                    if(isset($_GET['msg'])) { ?>
                        <div class = "text-center">
                            <p><?php echo "<script>alert('".$_GET['msg']."')</script>"; ?></p>
                        </div>
                   <?php }
                ?>
                <div>
                            <?php 
                                include_once('connection.php');
                                $sq = "select * from snapshopuser where phonenumber = '".$_SESSION['user']."'";
                                $row = mysqli_query($con,$sq)->fetch_assoc();
                                $name = $row['name'];
                                $type = $row['type']; ?>

                                <div>
                                    <input class= "form-control mb-3" name = "name" type="text" value = "<?php echo $name; ?>">
                                </div>
                                <div>
                                <?php if($type === 'buyer') { ?>
                                <select class = "form-select" name="usertype" id="itemtype" onchange="selectedItem(this)">
                                    <option selected value="buyer">Buyer</option>
                                    <option value="seller">Seller</option>
                                </select>
                               <?php }
                                else { ?>
                                    <select class = "form-select" name="usertype" id="itemtype" onchange="selectedItem(this)">
                                        <option value="buyer">Buyer</option>
                                        <option selected value="seller">Seller</option>
                                    </select>
                               <?php }
                               ?>
                                </div>
                            <div class = "mt-5">
                                <input class = "submit ps-3 pe-3 text-white" type="submit" name = "submit" value = "Save" style = "background-color: #ff4500; border-radius: 20px;">
                                <?php 
                                    include_once('connection.php');
                                    $str = "select * from snapshopuser where phonenumber = '".$_SESSION['user']."'";
                                    $r = mysqli_query($con,$str)->fetch_assoc();
                                    $t = $r['type'];
                                    if($t === 'buyer') { ?>
                                        <button style = "background-color: #ff4500; border-radius: 20px;"><a class = "text-decoration-none text-white" href="buyerpage.php">Cancel</a></button>
                                   <?php }
                                   else { ?>
                                        <button style = "background-color: #ff4500; border-radius: 20px;"><a class = "text-decoration-none text-white" href="sellerpage.php">Cancel</a></button>
                                  <?php }
                                ?>
                            </div>
                        </form>
                </div>
               </div>
            </div>       
        </main>

        <?php 
            include_once('footer.php');
        ?>

    </body>
</html>