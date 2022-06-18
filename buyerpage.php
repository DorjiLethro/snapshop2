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
        <link rel="stylesheet" href="buyerpage.css">
        <link rel="stylesheet" href="footer.css">
        <link rel="stylesheet" href="space.css">
        <link rel="stylesheet" href="generalHomePage.css">
        
        <title>Buyer page</title>

        <style>
          .main_space{
            position: relative !important;
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
            background-image: url("https://fashioninsiders.co/wp-content/uploads/2019/11/increase-sales-for-your-fashion-brand.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: right;
            filter: brightness(50%);


          }

          .searchinput {
              width: 400px;
            }

          .searchinput {
            border-radius: 20px !important;
          }


          .carousel {
            position: relative;
          }

          .description {
            position: absolute;
            top: 40%;
            left: 32%;
          }

          @media screen and (max-width: 900px) {
            .snapshop {
              display: none;
            }
            .account {
              display: none;
            }
            .notification {
              display: none;
            }

            .description {
              position: absolute;
              top: 40%;
              left: 18%;
            }
          }
        </style>
    </head>
    <body>
        <?php
          include_once('header.php');
        ?>

        <div class="main_space">
          <div class = "space">
          </div>
          <div class = "d-flex justify-content-center align-items-center" style = "top: 60px; position: absolute; left: 25%;">
            <div class = "text-white me-3">
                  <h1 class = "" style = "font-size: 50px; color: coral;">SnapShop</h1>
                  <p style = "font-size: 30px;">You Wont't Disappoint Visiting This Site</p>
                  <p style = "font-size: 20px;"><a href="#">snapshop.com</a></p>
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
                <div class="description text-center text-white ms-5">
                    <h2>A SATISFIED CUTSOMER </h2>
                    <h4>Is The Best Business of All</h4>
                    <button class = "mybutton text-white mt-3" style = "background-color: coral;">Shop Now</button>
                </div>
            </div>
        </div>
        <div class="container" id = "productList">
              <hr>
            <h3 id = "contentdescription" class = "mb-2">Discount Offered</h3>
            <div class="innercontainer" id = "innercontainer">
            <?php
                include_once('connection.php');
                $result = mysqli_query($con,"select * from product where discount != 0");
                if(mysqli_num_rows($result) > 0) {
                  $counter = 0;
                  while($row = $result->fetch_assoc()) {
                      $counter++;
                      $pt = $row['product_title'];
                      $pr = $row['price'];
                      $discount = $row['discount'];
                      $desc = $row['description'];
                      $image = $row['image'];
                      $location = $row['location'];
                      ?>

              <div class="mycard my_card" id = "my_card">
                <div class = "imagecontainer">
                    <div class="image">
                        <img src="<?php echo 'upload/'.$image ?>" alt="">
                    </div>
                    <div class = "quick">
                      <button type="button" class = "btn border border-dark" style = "background-color: coral;" data-bs-toggle="modal" data-bs-target="#<?php echo 'x2'.$counter; ?>">Quick View</button>
                    </div>
                </div>
                <div class="modal fade" id="<?php echo 'x2'.$counter; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <p><span class = "font-weight-bold">Location:</span> <?php echo $location ?></p>
                            <p class = "text-decoration-line-through"><span class = "font-weight-bold">Nu. </span><?php echo $pr."/-"; ?></p>
                            <p><span class = "font-weight-bold">Discount Price: Nu. </span><?php echo $discount ?>/-</p>
                            <div class = "text-center">
                              <i class = "fa fa-star bg-rating"></i>
                              <i class = "fa fa-star bg-rating"></i>
                              <i class = "fa fa-star bg-rating"></i>
                              <i class = "fa fa-star"></i>
                              <i class = "fa fa-star"></i>
                              <p>(500)</p>
                            </div>
                            <div class = "d-flex justify-content-around align-items-center">
                              <button class = "btn"><i class = "bi bi-messenger pt-2 pb-2"></i></button>
                              <button class = "btn"><i class = "fa fa-facebook pt-2 pb-2"></i></button>
                              <a href="#" data-toggle="popover" title= <?php echo $user; ?> data-content="Some content inside the popover"><i class="bi bi-telephone-forward-fill"></i></a>
                            </div>
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
              
                }
                else { ?>
                    <div>

                    </div>
                    <div class = "text-center">
                      <p style = "font-size: 30px; color: coral;"><i class="bi bi-binoculars-fill"></i></p>
                      <p>Not item to display</p>
                    </div>
                    <div class = "text-center">
                      <h5 style = "color: coral;">No Discount</h5>
                      <p>Discount will be offered soon.</p>
                      <p>Wait Patiently!</p>
                      <p><a href="#specialcontent">Go Through Special Products</a></p>
                    </div>
               <?php } ?>

          </div>
        </div>


        <div class="container" id = "specialcontent">
          <hr>
          <h3 class = "mb-4">Sepcial Product Added Recently</h3>
          <div class="innercontainer">
          <?php
                include_once('connection.php');
                $result = mysqli_query($con,"select * from product where discount = 0 order by date desc");
                $counter = 0;
                while($row = $result->fetch_assoc()) {
                    $counter++;
                    $pt = $row['product_title'];
                    $pr = $row['price'];
                    $desc = $row['description'];
                    $image = $row['image'];
                    $location = $row['location'];
                    ?>

            <div class="mycard my_card" id = "my_card">
              <div class = "imagecontainer">
                  <div class="image">
                      <img src="<?php echo 'upload/'.$image ?>" alt="">
                  </div>
                  <div class = "quick">
                    <button type="button" style = "background-color: coral;" class = "btn border border-dark" data-bs-toggle="modal" data-bs-target="#<?php echo 'x'.$counter; ?>">Quick View</button>
                  </div>
              </div>
              <div class="modal fade" id="<?php echo 'x'.$counter; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel"><?php echo $pt ?></h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class = "d-flex justify-content-center align-items-center">
                        <img class = "border border-dark" src="<?php echo 'upload/'.$image ?>" alt="" style = "width:250px; height: 250px; object-fit: cover;">
                        <div class = "ps-3">
                          <p><span class = "font-weight-bold">Location:</span><?php echo $location ?></p>
                          <p class = "text-decoration-linethrough"><span class = "font-weight-bold">Price: Nu. </span><?php echo $pr ?></p>
                          <div class = "text-center">
                            <i class = "fa fa-star bg-rating"></i>
                            <i class = "fa fa-star bg-rating"></i>
                            <i class = "fa fa-star bg-rating"></i>
                            <i class = "fa fa-star"></i>
                            <i class = "fa fa-star"></i>
                            <p>(500)</p>
                          </div>
                          <div class = "d-flex justify-content-around align-items-center">
                            <a href="http://localhost:8080"><i class = "bi bi-messenger pt-2 pb-2"></i></a>
                            <button class = "btn"><i class = "fa fa-facebook pt-2 pb-2"></i></button>
                            <a href="#" data-toggle="popover" title= <?php echo $user; ?> data-content="Some content inside the popover"><i class="bi bi-telephone-forward-fill"></i></a>
                          </div>
                        </div>
                      </div>
                      <h6 class = "mt-3 text-center">Product Description</h6>
                      <p><?php echo $desc ?></p>
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="title mt-3 d-flex justify-content-between">
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
                  $("#my_card").hide();
                  $("#specialcontent").hide();
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
                  $("#specialcontent").show();
                  $(".my_card").show();
                  $('html,body').animate({scrollTop: 0});
                }
              })
            });
            
            function changeColor() {
              event.preventDefault();
              let wishlist = document.querySelector(".wishlisticon");
              wishlist.style.color = "coral";
            }
           
            </script>
    </body>
</html>