<?php 
    include_once('connection.php');
?>

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