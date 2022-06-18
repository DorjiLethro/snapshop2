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
      <title>seller listing page</title>
  </head>
  <style>
      .topic{
          background:rgba(168, 167, 167,0.4);
          height: 5vh;
      }
      .profile{
          font-size:30px;
      }
      .add{
        font-size:30px;
      }
      .edit{
        margin-left: 10px;
        border-radius: 5px;
        background:rgb(255,127,80);
      }
      .icons{
          font-size: 15px;
          margin-left:6px;
      }

      .noitem {
        display: inline-block;
      }
  </style>
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
            <a class="nav-link" href="Contact.php">Help</a>
        </div>
        </div>
    </div>
    </nav>
    <div class = "d-flex justify-content-between text-white" style = "background-color: #7a7a7a;">
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
                <li><a class="dropdown-item" href="#">Setting</a></li>
            </div>
            <div class = "d-flex align-items-center ps-2">
                <i class="bi bi-box-arrow-left"></i>
                <li><a class="dropdown-item" href="destroy.php">Log Out</a></li>
            </div>
        </ul>
    </div>
</div>

  <div class="topic d-flex justify-content-center align-items-center">
      <a href="addproduct.php">Click Here to Add Product</a>
  </div>

  <div class="container">
    <hr>
  <div class="innercontainer">
    <?php 
      include_once('connection.php');
      $user = $_SESSION['user'];
      $sql = "select * from product where user = '$user'";
      $result = mysqli_query($con,$sql);
      if(mysqli_num_rows($result) === 0) { ?>
          <div class = "noitem d-flex justify-content-center align-items-center text-center" style = "height: 300px;">
              <div>
                <p style = "font-size: 50px; color: coral;"><i class="bi bi-binoculars"></i></p>  
                <p>You<br> Haven't Added Any Product Yet!</hp>
              </div>
          </div>
          <div class = "d-flex justify-content-center align-items-center border text-center">
            <div>
              <p class = "" style = "font-size: 40px; color: coral;"><i class="bi bi-box-arrow-in-up"></i></p>
              <p>Add Item</p>
              <p>The link is provided</p>
            </div>
          </div>
          <div class = "noitem d-flex justify-content-center align-items-center text-center">
              <div>
                <p style = "font-size: 50px; color: coral;"><i class="bi bi-house-heart"></i></p>
                <p>Your Home</p>
                <p><a href="sellerpage.php">Explore There</a></p>
              </div>
          </div>
          <div class = "noitem d-flex justify-content-center align-items-center text-center">
            <div>
              <img src="https://th.bing.com/th/id/OIP.5SZPBulWbXSn2wibQenDVwHaE8?pid=ImgDet&rs=1" alt="" style = "width: 100%; height: 100%; border-radius: 50%;">
            </div>
          </div>
     <?php }
      else {
        $counter = 0;
        while($row = $result->fetch_assoc()) {
            $counter++;
            $id = $row['productID'];
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
                    <div class = "quick text-center">
                      <button type="button" class = "btn border border-dark" style = "background-color: coral;" data-bs-toggle="modal" data-bs-target="#<?php echo 'x'.$counter; ?>">Quick View</button>
                      <div class = "me-2 mt-3">
                        <button class="border border-dark edit"><a class = "text-decoration-none text-white" href="<?php echo 'editItem.php?id='.$id; ?>">Edit Item</a></button>
                      </div>
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
                            <p><span class = "font-weight-bold">Location: </span><?php echo $location ?></p>
                            <p class = "text-decoration-line-through"><span class = "font-weight-bold">Price Nu. </span><?php echo $pr."/-" ?></p>
                            <p><span class = "font-weight-bold">Discount: Nu. </span><?php echo $discount ?>/-</p>
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
                <div class="title mt-3 d-flex justify-content-between align-items-center">
                    <h4><?php echo $pt ?></h4>
                    <form action="deletelist.php" method = "post" class = "me-4">
                        <input type="hidden" value = <?php echo $id; ?> name = "prodid">
                        <button class = "border border-none"><i class="bi bi-archive" style = "color: coral;"></i></button>
                    </form>
                </div>
                <div class="des">
                    <p><?php echo $location; ?></p>
                </div> 
          </div>
      <?php }
      
      } ?>
</div>
</div>
        <?php 
          include_once('footer.php');
        ?>
</body>
</html>