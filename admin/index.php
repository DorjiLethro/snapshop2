<!doctype html>
<html lang="en">
<?php 
        session_start();
        if(!isset($_SESSION['user'])) {
            header("Location: ..\signin.php");
        }

        include_once('C:\Xampp\Htdocs\Php\Snapshop\Snapshop\connection.php');
    ?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet"> -->
    <title>Admin Dashboard</title>

    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
        rel="stylesheet">
    
</head>

<body>
  
    <div class="wrapper">
        <div class="body-over-lay">
            <nav id="sidebar">
                <div class="sidebar-header" style = "background-color: dark;">
                    <h3><img src="images/logo.png" class="img-fluid" alt="logo"><span></span></h3>
                </div>
                
                <ul class="list-unstyled components">
                    <li  class="list-group">
                        <a href="index.php" class="dashboard"><i class="material-icons">dashboard</i><span>Dashboard</span></a>
                    </li>
                        
                    <li class="list-group">
                        <a href="user.php">
                            <i class="material-icons">account_box</i><span>Buyers</span></a>
                    </li>
                    <li class="list-group">
                        <a href="user1.php">
                            <i class="material-icons">account_box</i><span>Sellers</span></a>
                    </li>
                    <li class="list-group">
                        <a href="update.php" class="dashboard">
                        <i class="material-icons">rate_review</i><span>Update</span></a>
                    </li>
                    <li class="list-group">
                        <a href="announcement.php" class="dashboard">
                            <i class="material-icons">announcement</i>
                        <span>Announcement</span></a>
                    </li>
                    
                    <li class="list-group">
                        <a href="feedback.php" class="dashboard">
                        <i class="material-icons">rate_review</i><span>Feedbacks</span></a>
                    </li>
                    <li class="list-group">
                        <a href="..\destroy.php" class="dashboard">
                        <i class="material-icons"></i><span>Logout</span></a>
                    </li>
                          
                </ul>
            </nav> 

            <div id="content">
		
                <div class="top-navbar">
                    <nav class="navbar navbar-expand-lg">
                        <div class="container-fluid">
        
                            <button type="button" id="sidebarCollapse" class="d-xl-block d-lg-block d-md-mone d-none">
                                <span class="material-icons">arrow_back_ios</span>
                            </button>
                            
                            <a class="navbar-brand" href="#"> Dashboard </a>
                            
                            <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="material-icons" id="menu-toggle">more_vert</span>
                            </button>
        
                            <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none" id="navbarSupportedContent">
                                <ul class="nav navbar-nav ml-auto">   
                                    <li class="dropdown nav-item">
                                        <a href="#" class="nav-link" data-toggle="dropdown">
                                           <span class="material-icons">notifications</span>
                                           <span class="notification">
                                           <?php 
                                                $result = mysqli_query($con,"select * from contact");
                                                $total = mysqli_num_rows($result);
                                                echo $total;
                                            ?>
                                           </span>
                                       </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="#">Lorem ipsum dolor sit amet</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown nav-item">
                                        <a href="#" class="nav-link" data-toggle="dropdown">
                                        <span class="material-icons">person</span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="profile.html">Profile</a>
                                            </li>
                                            <li>
                                                <a href="#">Log out</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="main-content" style="padding: 20px;">
                    <div class="row">
                        
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-warning">
                                        <span class="material-icons">equalizer</span>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category" ><strong>Sellers</strong></p>
                                    <h3 class="card-title">

                                        <?php
                                            include_once ("C:/Xampp/Htdocs/Php/Snapshop/Snapshop/connection.php");
                                            $sql = "select * from snapshopuser where type = 'seller'";
                                            $result = mysqli_query($con,$sql);
                                            $row = mysqli_num_rows($result);
                                            echo $row;
                                        ?>

                                    </h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5 col-md-5 col-sm-5">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-warning">
                                        <span class="material-icons">equalizer</span>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>Buyers </strong></p>
                                    <h3 class="card-title">
                                    <?php
                                            include_once ("C:/Xampp/Htdocs/Php/Snapshop/Snapshop/connection.php");
                                            $sql = "select * from snapshopuser where type = 'buyer'";
                                            $result = mysqli_query($con,$sql);
                                            $row = mysqli_num_rows($result);
                                            echo $row;
                                        ?>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-info">
                                        <span class="material-icons">follow_the_signs</span>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category" ><strong>Total Users Accounts</strong></p>
                                    <h3 class="card-title">
                                    <?php
                                            include_once ("C:/Xampp/Htdocs/Php/Snapshop/Snapshop/connection.php");
                                            $sql = "select * from snapshopuser";
                                            $result = mysqli_query($con,$sql);
                                            $row = mysqli_num_rows($result);
                                            echo $row;
                                        ?>
                                    </h3>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>

                </div>
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <nav class="d-flex">
                                    <ul class="m-0 p-0">
                                        <li>
                                            <a href="#">snapshop.com</a>
                                        </li>

                                        <li>
                                            <p>2022 ?? Admin Board</p>
                                        </li>
                                    </ul>
                                </nav>
                       
                            </div>
                        </div>
                    </div>
                </footer> 
                </div>

                </div>
                
            </div>
                                                           
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="js/jquery-3.3.1.slim.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery-3.3.1.min.js"></script>
  
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

  <script type="text/javascript">
  $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
				$('#content').toggleClass('active');
            });
			
			 $('.more-button,.body-overlay').on('click', function () {
                $('#sidebar,.body-overlay').toggleClass('show-nav');
            });
			
        });


     
           
       
</script>
  
  



  </body>
  
  </html>


