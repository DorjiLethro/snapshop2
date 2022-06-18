<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css"/>
        <link rel="stylesheet" href="generalHomePage.css">
        <link rel = "stylesheet" href = "footer.css">
        <link rel="stylesheet" href="space.css">
        
        
        <title>General Home Page</title>
        <?php
            require_once ('connection.php');
        ?>

        <style>
          .main_space{
            position: relative;
            width: 100%;
            height: 350px !important;
          }
          .sticky-navbar {
            position: sticky;
            position: -webkit-sticky;
            top: 0;
            z-index: 9;
          }

          .main_space{
            position: relative;
            width: 100%;
            height: 300px;
          }

          .space {
            height: 100%;
            width: 100%;
            background-color: #F0FFFF;
            background-image: url("https://media.istockphoto.com/photos/scandinavian-concept-of-living-room-interior-with-design-sofa-coffee-picture-id1251694108?k=20&m=1251694108&s=612x612&w=0&h=8zH7jqtg_QgLMJMxUq3uBpA7l47LUht32_xT4RHn1EI=");
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
            top: 40%;
            left: 31%;
          }

          @media (max-width: 857px) {
            .description {
              margin-right: 100px;
            }
            .description h2 {
              font-size: 20px;
            }

            .description h4 {
              font-size: 16px;
            }
          }

          @media (max-width: 500px) {
            .snapshoplogo .logo {
              font-size: 16px;
            }

            .main_space div img {
              width: 200px;
              height: 200px;
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
                <a class="nav-link text-white" href="generalHomePage.php">Home</a>
                <div class="dropdown ms-3">
                <button class="btn dropdown-toggle text-white" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Category
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">Clothes</a></li>
                  <li><a class="dropdown-item" href="#">Foods</a></li>
                  <li><a class="dropdown-item" href="#">Cosmetics</a></li>
                  <li><a class="dropdown-item" href="#">Textiles</a></li>
                </ul>
                </div>
                <a class="nav-link" href="#">Help</a>
            </div>
            </div>
        </div>
        </nav>
        <div class = "sticky-navbar d-flex justify-content-between align-items-center text-white" style = "background-color: #7a7a7a;">
          <h1 class = "snapshop" style = "margin-left: 30px; color: coral;">Snapshop</h1>
          <a class = "me-4 text-decoration-none" href = "signin.php" style = "font-size: 20px; color: coral;">Sign In</a>
        </div>
    </div>

        <div class="main_space">
          <div class = "space">
          </div>
          <div class = "d-flex justify-content-center align-items-center" style = "top: 40px; position: absolute; left: 30%;">
            <div class = "text-white me-3">
                  <h1 class = "" style = "font-size: 50px; color: coral;">SnapShop</h1>
                  <p class = "" style = "font-size: 30px;">Your Shop Consultant is</p>
                  <a href="#">snapshop.com</a>
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
                    <h2>Discover The Fun Near You</h2>
                    <h4>Extra Discount Will Be Provided Daily</h4>
                    <button class = "mybutton text-white mt-3" style = "background-color: coral;"><a class = "text-white" href= "signin.php">Shop Now</a></button>
                </div>
              </div>
          </div>

      <?php 
        include_once("footer.php");
      ?>
    </body>
</html>