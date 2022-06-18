<!DOCTYPE html>
<?php 
    session_start();
    if(!isset($_SESSION['user'])) {
        header("Location: ../snapshop/signin.php");
    }

	include_once('connection.php');
?>
<html lang="en">
<head>
	<title>Our Team</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css"/>
    <link rel="stylesheet" href="generalHomePage.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="space.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link rel="stylesheet" href="teamStyle.css">
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
	<div class="container">
		<div class="row">
			<div class="col-sm-6 offset-sm-3 mt-4 mb-4">
				<h2 class="text-center">Our Team</h2>
				<p class="text-center"> As Bhutan plans an executes it’s Digital pathway, the e-commerce industry is a force that no
					investor can afford to ignore.</p>
				<p class="text-center">A group believing in the same goal came together and thus SnapShop was born.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-md-4">
				<div class="card-box text-center">
					<div class="user-pic">
						<img src="images/dawa.jpg" class="img-fluid" alt="User Pic">
					</div>
					<h4>Dawa Gyeltshen</h4>
					<hr>
					<a href = "mailto: 12200001.gcit@rub.edu.bt">Send Email</a>
					<hr>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card-box text-center">
					<div class="user-pic">
						<img src="images/letho.jpg" class="img-fluid" alt="User Pic">
					</div>
					<h4>Dorji Letho</h4>
					<hr>
					<a href = "mailto: 12200002.gcit@rub.edu.bt">Send Email</a>
					<hr>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card-box text-center">
					<div class="user-pic">
						<img src="images/lethro.jpg" class="img-fluid" alt="User Pic">
					</div>
					<h4>Dorji Lethro</h4>
					<hr>
					<a href = "mailto: 12200003.gcit@rub.edu.bt">Send Email</a>
					<hr>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card-box text-center">
					<div class="user-pic">
						<img src="images/gyelden.jpg" class="img-fluid" alt="User Pic">
					</div>
					<h4>Gyelden Dorji</h4>
					<hr>
					<a href = "mailto: 12200004.gcit@rub.edu.bt">Send Email</a>
					<hr>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card-box text-center">
					<div class="user-pic">
						<img src="images/jimmy.jpg" class="img-fluid" alt="User Pic">
					</div>
					<h4>Jigme Dema</h4>
					<hr>
					<a href = "mailto: 12200005.gcit@rub.edu.bt">Send Email</a>
					<hr>
				</div>
			</div>
		</div>
	</div>
    <?php 
        include_once('footer.php');
    ?>
</body>
</html>
