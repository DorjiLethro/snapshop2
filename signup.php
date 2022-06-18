<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Sign Up</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    
        <style>
            .desc {
                background-color: coral;
                width: 40%;
                height: 100vh;

            }

            .myform {
                width: 60%;
                height: 100vh;
            }

            .desc .image {
                width: 200px;
                height: 200px;
            }

            .content {
                height: 400px;
                margin-top: -50px;
            }

            button {
                width: 120px;
            }

            .fb {
                width: 50px;
                height: 50px;
            }

            .type {
                opacity: 50%;
            }

            .iconone {
                height: 39px;
            }

            @media (max-width:700px) {
                .outercontainer {
                    display: flex;
                    flex-direction: column;
                }

                .desc .image {
                    width: 100px;
                    height: 100px;
                }

                .desc {
                    width: 100%;
                    height: 250px;
                }

                .innerText {
                    height: 100%;
                }

                .desc .innerText p {
                    font-size: 10px;
                }

                .myform {
                    width: 100%;
                    height: 100px;
                }

                .myform .innerform {
                    height: 100%;
                }

                .myform .fb {
                    width: 20px;
                    height: 20px;
                }

                .myform .form-heading {
                    margin-top: 20px;
                }

                form p {
                    margin-top: -3px;
                }
            }
            .signupformcontrol input:focus {
                outline: 0;
                border-color: #777;
            }

            .signupformcontrol.success input {
                border-color: #2ecc71;
            }

            .signupformcontrol.error input {
                border-color: #e74c3c;
            }

            .signupformcontrol small {
                color: #e74c3c;
                position: absolute;
                bottom: 0;
                left: 0;
                visibility: hidden;
            }

            .signupformcontrol.error small {
                visibility: visible;
            } 

            .signupformcontrol {
                position: relative;
            }

            .signupformcontrol .errordesc {
                position: absolute;
                top: 40;
                left: 5%;
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
        <div class="outercontainer d-flex">
            <div class="desc">
                <div>
                    <img class = "image" src="logo.png" alt="logo">
                </div>
                <div class = "content d-flex justify-content-center align-items-center text-center text-white">
                    <div class = "innerText">
                        <h1 class = "mb-4 fw-bold">Welcome Back!</h1>
                        <p class = "lead">To keep connected with us please login with</p>
                        <p class = "lead mb-4">your personal info.</p>
                        <button class = "buttonone btn border border-dark"><a class = "text-decoration-none text-white fw-bold" href="signin.php">SIGN IN</a></button>
                    </div>
                </div>
            </div>
            <div class="myform d-flex justify-content-center align-items-center">
                <div class = "innerform">
                    
                    <div class = "text-center">
                        <h3 class = "form-heading" class = "fw-bold">Create Account</h3>
                        <hr>
                        <p class = "">Or Use Your Phone Number For Registration</p>
                    </div>

                    
                    <?php
                    if(isset($_GET['error'])) { ?>
                        <p class = "error text-center"> <?php echo $_GET['error']; ?></p>
                    <?php }
                    ?>
                    
                    <div>
                        <form action="signupvalidate.php" method = "post" class = "signupform" id = "signupform">
                            <div class = "input-group signupformcontrol">
                                <span class = "iconone input-group-text"><i class = "bi bi-person-circle"></i></span>
                                <input class = "name form-control mb-4" name = 'name' id = "" type="text" placeholder="Name*" maxlength="15">
                            </div>
                            <div class = "input-group signupformcontrol">
                                <span class = "iconone input-group-text"><i class="bi bi-telephone"></i></span>
                                <input class = "phone form-control mb-4" name = "phone" type="text" placeholder="Phone Number*" maxlength="8">
                            </div>
                            <div>
                                <label class = "type" for="type">Buyer or Seller</label>
                                <div class = "input-group mb-4">
                                    <span class = "iconone input-group-text"><i class="bi bi-pencil-square"></i></span>
                                    <select class = "form-select" name="usertype" id="itemtype" onchange="selectedItem(this)">
                                        <option selected value="buyer">Buyer</option>
                                        <option value="seller">Seller</option>
                                    </select>
                                </div>
                            </div>
                            <div class = "text-center">
                                <input type="radio" id = "agree" name = "check" value = "1">
                                <label for="agree">Are you sure?</label>
                            </div>
                
                            <?php
                                if(isset($_GET['error'])) { ?>
                                    <?php $error = $_GET['error'];?>
                                    <?php if($error === 'r') { ?>
                                        <div class = "text-center">
                                            Check the radio button
                                        </div>
                                    <?php }
                                }
                            ?>

                            <div class = "text-center mt-4">
                                <input type="submit" class = "" name = 'submit' placeholder = "Sign Up" style = "background-color: coral; border-radius: 10px;">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- <script>
            const form = document.querySelector(".signupform")
           const user_name = document.querySelector(".name");
           const phone_number = document.querySelector(".phone");
           const type = document.querySelector("#itemtype");
           const button = document.querySelector(".mybutton");
           const radio = document.querySelector("#agree");

            button.addEventListener("click", e => {
                e.preventDefault();

                validateInput();
            })

           function validateInput() {
                const name = user_name.value.trim();
                const phone = phone_number.value.trim();

                if(name === "") {
                    setError(user_name);
                }
                else {
                    setSuccess(user_name);
                }

                if(phone === "") {
                    setError(phone_number);
                }
                else if(phone[0] !== "7" & phone[1] !== "7") {
                    setError(phone_number);
                    alert("The number must be of B-mobile or Tashi-cell")
                }
                else if(phone[0] !== "1" & phone[1] !== "7") {
                    setError(phone_number);
                    alert("The number must be of B-mobile or Tashi-cell")
                }
                else if(phone.length < 8 || phone.length > 8) {
                    setError(phone_number)
                    alert("The number must be of 8 digit")
                }
                else {
                    setSuccess(phone_number);
                }

                if(name == "" & phone !== "") {
                    setError(user_name);
                }
           }

           function setError(element) {
               const parent = element.parentElement.parentElement;
               parent.className = "signupformcontrol error";
           }

           function setSuccess(element) {
               const parent = element.parentElement.parentElement;
               parent.className = "signupformcontrol success";
           }
        </script> -->
    </body>
</html>