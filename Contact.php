<!DOCTYPE html>
<html lang="en">
<?php session_start(); 
include_once('connection.php');
?>
    <head>
        <title>SnapShop/ContactUs</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <style>
            .contact {
                width: 100%;
                height: 100vh;
            }
            .myform {
                width: 60%;
                /* height: 100vh; */
            }

            .desc {
                width: 40%;
                /* height: 100vh; */
                background-color: coral;

            }

            .contact-container {
                height: 100vh;
            }

            @media (max-width:800px) {
                .contact {
                    display: flex;
                    flex-direction: column;
                }

                .myform {
                    width: 100%;
                    height: 500px;

                }

                .desc {
                    width: 100%;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 250px;
                }

                .contact-container {
                    height: 100%;
                }

                .innerform {
                    box-shadow: 0 0 16px black;
                }
            }
            .error {
                background: #f2dede;
                color:#A94442;
                padding: 10px;
                border-radius: 5px;
            }
        </style>
    </head>
    <body>
        <div class="contact d-flex">
            <div class = "myform d-flex justify-content-center align-items-center">
                <div class = "innerform p-5">
                    <div class="container mt-3">
                        <p class="text-center h5">CONTACT</p>
                        <hr>
                    </div>
                    <div class="">
                        <p class="lead text-center">Feel free to ask anything.</p>
                    </div>
                    <div class="">
                        <p class="text-center">I am here to Help you.</p>
                    </div>
                    <?php
                        if(isset($_GET['error'])){ ?>
                                <p class = "error text-center">
                                    <?php echo $_GET['error']; ?>
                                </p>
                       <?php }
                    ?>
                    <div class="outer-container">
                        <div class="inner-container  just-content-center align-items-center">
                            <form action="contactvalidate.php" method="post">
                                    <div class="mt-3">
                                        <input class="form-control rounded-pill" type="text" placeholder = "Name" name='name'>
                                    </div>
                                    <div class="mt-3">
                                        <input class="form-control rounded-pill" type="text" value = <?php echo $_SESSION['user']; ?> name='number'>
                                    </div>
                                <div class="mt-3">
                                    <textarea id="" cols="30" rows="5" class="form-control" placeholder="Drop your message" name='message'></textarea>
                                </div>
                                <div class="mt-3 text-center">
                                    <input class="btn" name = 'submit' type="submit" value="Submit" style = "background-color: coral;">
                                </div> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class = "desc">
                <div class="contact-container d-flex justify-content-center align-items-center">
                    <div class = "">
                        <div class="mt-5">
                            <p class="text-light h5">You may contact us on:</p>
                        </div>
                        <div class="mt-5">
                            <P class="text-light h5"><span><i class="bi bi-telephone"></i></span>  +975 77792293</P>
                        </div>
                        <div class="mt-5">
                            <p class="text-light h5 me-3"><span class="fw-bold"><i class="bi bi-envelope"></i></span>      12200003.gcit@rub.edu.bt</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- <script>
            console.log(window.innerWidth);
        </script> -->
    </body>
</html>