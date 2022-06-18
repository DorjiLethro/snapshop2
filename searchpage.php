<html lang="en">
<?php session_start(); ?>
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
        
        <title>Search page</title>

        <style>
          .sticky-navbar {
            position: sticky;
            position: -webkit-sticky;
            top: 0;
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
            background-image: url("https://static.wixstatic.com/media/6d1cbb_b565c60b0e614593a444f2a247f26313~mv2.jpg/v1/fill/w_655,h_505,al_c,q_90/6d1cbb_b565c60b0e614593a444f2a247f26313~mv2.jpg");
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
            left: 32%;
          }
        </style>
    </head>
    <body>
        <div class = "bg-snap" style = "width: 100%; height: 100px;">
            <div class = "first d-flex justify-content-end me-5">
                <div class = "ms-2 me-2">
                    <i class = "fa fa-heart text-white"></i>
                    <a class = "text-white text-decoration-none" href="#">My WishList</a>
                </div>
               <a class = "text-decoration-none text-white ms-2 me-2" href="#">Help</a>
               
            </div>
            
            <div>
                <div class = "d-flex justify-content-end align-items-center ms-5">
                    <div class = "d-flex align-items-center me-auto">
                        <h1 class = "fw-5 text-white ms-5 me-5">SnapShop</h1>
                        <div class="dropdown">
                            <button class="btn border dropdown-toggle text-white" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                              Category
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <li><a class="dropdown-item" href="#">Clothes</a></li>
                              <li><a class="dropdown-item" href="#">Foods</a></li>
                              <li><a class="dropdown-item" href="#">Cosmetics</a></li>
                            </ul>
                          </div>
                    </div>
                    <div class="dropdown me-5 d-flex align-items-center">
                        <i class = "fa fa-bell text-white me-4 notification"><span class = "p-1" style = "border-radius: 50%; background-color: red;">1</span></i>
                        <button class="btn bg-snap btn-secondary dropdown-toggle"  type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class = "bi bi-person-circle"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <div class = "d-flex align-items-center">
                            <i class="bi bi-person-square"></i>
                            <li><a class="dropdown-item" href="#">My Profile</a></li>
                            </div>
                            <div class = "d-flex align-items-center">
                            <i class="bi bi-pencil-square"></i>
                            <li><a class="dropdown-item" href="#">Edit Profile</a></li>
                            </div>
                            <div class = "d-flex align-items-center"> 
                            <i class="bi bi-gear"></i>
                            <li><a class="dropdown-item" href="#">Setting</a></li>
                            </div>
                            <div class = "d-flex align-items-center">
                            <i class="bi bi-box-arrow-left"></i>
                            <li><a class="dropdown-item" href="#">Log Out</a></li>
                            </div>
                        </ul>
                    </div>
            
                    
                </div>
            </div>

         
        <div class="container">
              <hr>
            <h3 class = "mb-2 text-center">Your Search Result</h3>
            <div class="innercontainer">
            <div class="mycard">
              <div class = "imagecontainer">
                  <div class="image">
                      <img src="https://www.benefitcosmetics.com/globalassets/pdps/face/primer/the-porefessional-super-setter/the-porefessional-super-setter-component.png?width=300&height=350&mode=crop&center=0.5,0.5" alt="">
                  </div>
                  <div class = "discount">
                    <h4>10%</h4>
                  </div>
                  <div class = "quick">
                    <button type="button" class = "btn btn-primary border border-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">Quick View</button>
                  </div>
              </div>
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Title</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class = "d-flex justify-content-center align-items-center">
                        <img class = "border border-dark" src="https://www.benefitcosmetics.com/globalassets/pdps/face/primer/the-porefessional-super-setter/the-porefessional-super-setter-component.png?width=300&height=350&mode=crop&center=0.5,0.5" alt="">
                        <div class = "ps-3">
                          <h5>Product Name: Cabbage</h5>
                          <p>Location: Thimphu</p>
                          <p class = "text-decoration-linethrough">Nu. 1000</p>
                          <p>Price: Nu. 1000/-</p>
                          <div class = "text-center">
                            <i class = "fa fa-star bg-rating"></i>
                            <i class = "fa fa-star bg-rating"></i>
                            <i class = "fa fa-star bg-rating"></i>
                            <i class = "fa fa-star"></i>
                            <i class = "fa fa-star"></i>
                            <p>(500)</p>
                          </div>
                        </div>
                      </div>
                      <h6 class = "mt-3">Product Description</h6>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis eos vel molestiae culpa aspernatur perferendis dolores harum libero qui rem.</p>
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="title mt-3">
                  <h4>Title Name</h4>
              </div>
              <div class="des">
                  <p>Write your title description here..</p>
              </div> 
            </div>
          </div>
        </div>

        <script src = "footer.js"></script>

        <script>
            window.onscroll = function() {myFunction()};
            
            var navbar = document.getElementById("sticky-navbar");
            var sticky = navbar.offsetTop;
            
            function myFunction() {
              if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
              } else {
                navbar.classList.remove("sticky");
              }
            }
            </script>
    </body>
</html>