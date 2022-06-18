<html lang="en">
  <?php session_start(); 
  if(!isset($_SESSION['user'])) {
    header("Location: ../snapshop/signin.php");
  }
  ?>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css"/>
        <link rel="stylesheet" href="generalHomePage.css">
        <link rel="stylesheet" href="footer.css">
        <link rel="stylesheet" href="space.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        
        <title>Seller Home Page</title>

        <?php
            require_once ('connection.php');
        ?>  

        <style>
          .main_space{
            position: relative;
            width: 100%;
            height: 310px !important;
          }
          .sticky-navbar {
            position: sticky;
            position: -webkit-sticky;
            top: 0;
            z-index: 9;
          }

          .space {
            height: 100%;
            width: 100%;
            background-color: #F0FFFF;
            background-image: url("https://cdn-bnokp.nitrocdn.com/QNoeDwCprhACHQcnEmHgXDhDpbEOlRHH/assets/static/optimized/rev-2b3fe8f/online-decorating/wp-content/uploads/2020/07/Light-and-Airy-Coastal-House-Interior-Design-.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: right;
            filter: brightness(50%);
          }

          .carousel {
            position: relative;
          }

          .description {
            position: absolute;
            top: 35%;
            left: 16%;
          }

          @media screen and (max-width: 900px) {
            .snapshop {
              display: none;
            }
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
      <form class = "mt-2" action="search.php" method = "post">
          <input class = "searchinput form-control text-center" id = "livesearch" type="text" placeholder="Search Item" style = "width: 340px; border: 2px solid coral; border-radius: 20px;">
      </form>
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

        <div class="main_space">
          <div class = "space">
          </div>
          <div class = "d-flex justify-content-center align-items-center" style = "top: 40px; position: absolute; left: 25%;">
            <div class = "text-white me-3">
                  <h1 class = "" style = "font-size: 50px; color: coral;">SnapShop</h1>
                  <p style = "font-size: 30px;">Your Benificial SnapShop Will Keep Your Store Clean</p>
                  <a style = "font-size: 20px;" href="#">snapshop.com</a>
            </div>
          </div>
        </div>

        <div class="main-container mb-5 mt-5">
            <div class="radio-buttons">
              <label class="custom-radio">
                <input type="radio" name="radio" checked />
                <span class="radio-btn"
                  ><i class="las la-check"></i>
                  <div class="hobbies-icon">
                      <a href="foods.php"><img class = "mb-4 mt-3" src="food.png" alt="" style = "width: 40px; height: 40px;"></a>
                    <h3>Foods</h3>
                  </div>
                </span>
              </label>
              <label class="custom-radio">
                <input type="radio" name="radio" />
                <span class="radio-btn"
                  ><i class="las la-check"></i>
                  <div class="hobbies-icon">
                    <a href="clothes.php"><img class = "mt-auto" src="clotheshanger.png" alt="" style = "width: 80px; height: 80px;"></a>
                    <h3>Clothes</h3>
                  </div>
                </span>
              </label>
              <label class="custom-radio">
                <input type="radio" name="radio" />
                <span class="radio-btn"
                  ><i class="las la-check"></i>
                  <div class="hobbies-icon">
                    <a href="cosmetics.php"><img class = "mb-4" src="cream.png" alt="" style="width: 50px; height: 50px;"></a>
                    <h3>Cosmetics</h3>
                  </div>
                </span>
              </label>
              <label class="custom-radio">
                <input type="radio" name="radio" />
                <span class="radio-btn"
                  ><i class="las la-check"></i>
                  <div class="hobbies-icon">
                    <a href="textile.php"><img class = "mb-4" src="textile.png" alt="" style = "width: 50px; height: 50px;"></a>
                    <h3>Textiles</h3>
                  </div>
                </span>
              </label>
            </div>
          </div>

          <div class="container">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="https://images.unsplash.com/photo-1653256513370-8d0d519b9477?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=60&raw_url=true&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwyfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1540221652346-e5dd6b50f3e7?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=60&raw_url=true&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Y2xvdGhlc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1583209814683-c023dd293cc6?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
                <div class="description text-center text-white">
                    <h2>Become The SnapShop <br> Seller</h2>
                    <h4>More than half the units sold in out stores are from independent sellers.</h4>
                    <button class = "mybutton text-white mt-3" style = "background-color: coral;">Sale Now</button>
                </div>
              </div>
          </div>

          <div class="container mb-5">
              <hr>
            <h3 class = "mb-2 contentdescription" id = "contentdescription">Latest Product</h3>
            <div class="innercontainer" id = "innercontainer">

            <?php
                $counter = 0;
                $result = mysqli_query($con,"select * from product ");
                while($row = $result->fetch_assoc()) {
                    $counter++;
                    $pt = $row['product_title'];
                    $pr = $row['price'];
                    $discount = $row['discount'];
                    $desc = $row['description'];
                    $image = $row['image'];
                    $location = $row['location'];
                    ?>

            <div class="mycard my_card">
              <div class = "imagecontainer">
                  <div class="image">
                      <img src="<?php echo 'upload/'.$image ?>" alt="">
                  </div>
                  <div class = "quick">
                    <button type="button" class = "btn border border-dark" style = "background-color: coral;" data-bs-toggle="modal" data-bs-target="#<?php echo 'x'.$counter; ?>">Quick View</button>
                  </div>
              </div>
              <div class="modal fade" id="<?php echo 'x'.$counter; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel"><?php echo $pt; ?></h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class = "d-flex justify-content-center align-items-center">
                      <img class = "" src="<?php echo 'upload/'.$image ?>" alt="" style = "width:250px; height: 250px; object-fit: cover;">
                        <div class = "ps-3">
                          <p><span class = "font-weight-bold">Location: </span> <?php echo $location ?></p>
                          <p class = "text-decoration-linethrough"><span class = "font-weight-bold">Price: Nu. </span><?php echo $pr ?></p>
                          <div class = "text-center">
                            <i class = "fa fa-star bg-rating"></i>
                            <i class = "fa fa-star bg-rating"></i>
                            <i class = "fa fa-star bg-rating"></i>
                            <i class = "fa fa-star"></i>
                            <i class = "fa fa-star"></i>
                            <p>(500)</p>
                          </div>
                          <div class = "text-center d-flex justify-content-center align-items-center">
                              <a href="http://localhost:8080"><i class = "bi bi-messenger pt-2 pb-2"></i></a>
                          </div>
                          <?php
                              $r = mysqli_query($con,"select * from snapshopuser where phonenumber = '".$_SESSION['user']."'")->fetch_assoc();
                              $type = $r['type'];
                              if($type === 'buyer') { ?>
                                <div class = "d-flex justify-content-around align-items-center">
                                  <button class = "btn"><i class = "fa fa-facebook pt-2 pb-2"></i></button>
                                  <a href="#" data-toggle="popover" title= <?php echo $user; ?> data-content="Some content inside the popover"><i class="bi bi-telephone-forward-fill"></i></a>
                                </div>
                             <?php }
                            ?>
                        </div>
                      </div>
                      <h6 class = "mt-3 text-center">Product Description</h6>
                      <p><?php echo $desc ?></p>
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="title mt-3">
                  <h4><?php echo $pt ?></h4>
              </div>
              <div class="des">
                  <p><?php echo $location ?></p>
              </div> 
            </div>

               <?php }
            ?>
          </div>
        </div>

      <footer>
        <?php 
          include_once('footer.php');
        ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
          $(document).ready(function() {
              $("#livesearch").keyup(function() {
                $(".x_card").remove();
                let searchValue = $(this).val();
                if(searchValue.length !== 0) {
                  $("#contentdescription").hide();
                  $(".my_card").hide();
                  $("html, body").animate({
                    scrollTop: $(
                      "#carouselExampleControls").offset().top
                }, 2000);

                $.ajax({ 
                  url:"search.php",
                  method:"POST",
                  data:{searchValue:searchValue},
                  success:function(data) {
                    $("#innercontainer").html($("#innercontainer").html() + data);
                  }
                })
                }
                else {
                  $("#contentdescription").show();
                  $(".my_card").show();
                  $('html,body').animate({scrollTop: 0});
                }
              })
            });
        </script>
      </footer>
    </body>
</html>