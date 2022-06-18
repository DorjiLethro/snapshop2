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
        <link rel="stylesheet" href="buyerpage.css">
        <link rel="stylesheet" href="footer.css">
        <link rel="stylesheet" href="space.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <?php 
            require_once('connection.php');
        ?>
        
        <title>Textile page</title>
        <style>
          .main_space{
            position: relative;
            width: 100%;
            height: 310px !important;
          }

          .space {
            height: 100%;
            width: 100%;
            background-color: #F0FFFF;
            background-image: url("https://textilevaluechain.in/wp-content/uploads/2020/08/Textile-in-Bhutan-1-1024x768-1.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: right;
            filter: brightness(50%);


          }
          .sticky-navbar {
            position: sticky;
            position: -webkit-sticky;
            top: 0;
            z-index: 9;
          }
          

          .carousel {
            position: relative;
          }

          .description {
            position: absolute;
            top: 40%;
            left: 31%;
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
        <?php 
          include_once('header.php');
        ?>

        <div class="main_space">
          <div class = "space">
          </div>
          <div class = "d-flex justify-content-center align-items-center" style = "top: 40px; position: absolute; left: 25%;">
            <div class = "text-white me-3">
                  <h1 class = "" style = "font-size: 50px; color: coral;">SnapShop</h1>
                  <p style = "font-size: 30px;">Experience The Best Textiles of All From Bhutan</p>
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
                    <img src="https://i0.wp.com/www.alltherooms.com/blog/wp-content/uploads/2018/10/Buy-Bhutanese-Textiles-By-adventurelink.jpg?resize=640%2C427&ssl=1" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="https://www.experiencetravelgroup.com/blog/wp-content/uploads/2019/07/She-Bhutan.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRaKykid1Skd9BZITUomOS_vaIPD49k1qNEmw&usqp=CAU" class="d-block w-100" alt="...">
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
                    <h2>Discover The Fun Near You</h2>
                    <h4>Bhutanese textiles for sale</h4>
                    <button class = "mybutton text-white mt-3" style = "background-color: coral;">Shop Now</button>
                </div>
            </div>
        </div>
        <div class="container mt-5">
              <h2 class = "contentdescription" id = "contentdescription">Latest Products</h2>
              <hr>
            <div class="innercontainer" id = "innercontainer">

            <?php
                $counter = 0;
                $result = mysqli_query($con,"select * from product where category = 'textile'");
                while($row = $result->fetch_assoc()) {
                    $counter++;
                    $pt = $row['product_title'];
                    $pr = $row['price'];
                    $discount = $row['discount'];
                    $desc = $row['description'];
                    $image = $row['image'];
                    $location = $row['location'];
                    $user = $row['user'];
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
                          <p><span class = "font-weight-bold">Location: </span><?php echo $location; ?></p>
                          <p><span class = "font-weight-bold">Price: Nu. </span><?php echo $pr; ?>/-</p>
                          <div class = "text-center">
                            <i class = "fa fa-star bg-rating"></i>
                            <i class = "fa fa-star bg-rating"></i>
                            <i class = "fa fa-star bg-rating"></i>
                            <i class = "fa fa-star"></i>
                            <i class = "fa fa-star"></i>
                            <p>(500)</p>
                          </div>
                          <div class = "d-flex justify-content-around align-items-center">
                            <i class = "bi bi-messenger"></i>
                            <i class = "fa fa-facebook"></i>
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
                  <p><?php echo $desc ?></p>
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
                  $(".my_card").hide();
                  $("html, body").animate({
                    scrollTop: $(
                      "#carouselExampleControls").offset().top
                }, 2000);

                $.ajax({ 
                  url:"textilesearch.php",
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
    </body>
</html>