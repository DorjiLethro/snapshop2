<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Sign In</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="snapshop.css">
    
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

            .myform .contentone {
                height: 100vh;
            }

            .facebook {
                font-size: 30px;
                color: black;
            }

            .buttonone {
                background-color: #FFFFFF4D;
            }

            .desc .logo {
                width: 35%;
                height: 35%;
            }

            .desc .signupbutton {
                background-color: #FFFFFF4D;
            }

            .myform .forgot:hover {
                color: red;
            }

            @media (max-width:700px) {
                .bosscon {
                    display: flex;
                    justify-content: center;
                }

                .desc {
                    display: none;
                }

                .myform {
                    width: 100%;
                    padding: 0px 20px;
                }
            }

            .form {
        padding: 30px 40px;	
      }

      .formcontrol {
        margin-bottom: 10px;
        padding-bottom: 20px;
        position: relative;
      }

      .formcontrol label {
        display: inline-block;
        margin-bottom: 5px;
      }

      .checkbox label {
          display: inline-block;
          margin-bottom: 5px;
      }

      .formcontrol input {
        border: 2px solid #f0f0f0;
        border-radius: 4px;
        display: block;
        font-family: inherit;
        font-size: 14px;
        padding: 10px;
        width: 100%;
      }

      .formcontrol input:focus {
        outline: 0;
        border-color: #777;
      }

      .formcontrol.success input {
        border-color: #2ecc71;
      }

      .formcontrol.error input {
        border-color: #e74c3c;
      }

      .formcontrol small {
        color: #e74c3c;
        position: absolute;
        bottom: 0;
        left: 0;
      }
      
      .form button {
        border-radius: 4px;
        color: #fff;
        display: block;
        font-family: inherit;
        font-size: 16px;
        padding: 10px;
        margin-top: 20px;
        width: 100%;
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
        
        <div class = "bosscon">
            <div class="wholecontainer d-flex">
                <div class="myform">
                    <div class = "contentone d-flex justify-content-center align-items-center">
                        <div class = "">
                            <h3 class = "mb-4 fw-bold">Login to Your Account</h3>
                            <hr>
                            <?php
                                if(isset($_GET['error'])) { ?>
                                    <p class = "error text-center"> <?php echo $_GET['error']; ?></p>
                               <?php }
                                ?>
                            <div class = "mt-1">
                                <form id="form" action="signinvalidate.php" method = "post" class="form">
                                    <div class="formcontrol">
                                      <label for="contact">Phone Number</label>
                                      <input name = "phone" type="text" placeholder="77792293" id="contact" maxlength='8'/>
                                    </div>
                                    <div class="formcontrol">
                                      <label for="password">Password</label>
                                      <input name = "password" type="password" placeholder="........." id="password" />
                                    </div>
                                    <div class = "checkbox text-center">
                                      <input name = "check" type="checkbox" value = '1' id = "agree">
                                      <label for="agree">Agree</label>
                                    </div>
                                    <div class = "text-center">
                                        <input type="submit" name = "submit" class = "btn" style = "background-color: coral;">
                                    </div>
                                  </form>
    
                                <div class = "text-center">
                                    <a class = "forgot text-decoration-none" href="forgotpassword.php" style = "color: coral;">Forgot your password?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="desc">
                    <div class = "">
                        <div>
                            <img class = "signinlogo img-fluid logo" src="logo.png" alt="">
                            <div class = "text-center text-white mt-4">
                                <h2 class = "fw-bold">New Here?</h2>
                                <p class = "lead">Sign up and discover a great
                                    amount of new opportunities!  </p>
                                
                                <button class = "signupbutton btn border border-dark"><a class = "text-decoration-none text-white" href="signup.php">Sign Up</a></button>
                            </div>
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <script>
            const form = document.getElementById('form');
            const contact = document.getElementById('contact');
            const password = document.getElementById('password');
            const check = document.getElementById("agree");
      
            form.addEventListener('submit', e => {
              e.preventDefault();
              
              checkInputs();
            });
      
            function checkInputs() {
              // trim to remove the whitespaces
              const usernameValue = contact.value.trim();
              const passwordValue = password.value.trim();
              
              if(usernameValue === '') {
                setErrorFor(contact, 'Cannot be blank');
              }
              else if(usernameValue[0] !== "7" && usernameValue[1] !== "7") {
                setErrorFor(contact,"Enter valid number")
              }
              else if(usernameValue[0] !== "1" && usernameValue[1] !== "7") {
                setErrorFor(contact,"Enter  valid number")
              }
              else if(usernameValue.length < 8 || usernameValue.length > 8) {
                setErrorFor(contact,"It must be 8 digit")
              }
              else {
                setSuccessFor(contact);
              }
              
              if(passwordValue === '') {
                setErrorFor(password, 'Set the password');
              } else {
                setSuccessFor(password);
              }

              if(!check.checked) {
                alert("Check the checkbox");
              }
            }
      
            function setErrorFor(input, message) {
              const formControl = input.parentElement;
              const small = formControl.querySelector('small');
              formControl.className = 'formcontrol error';
              small.innerText = message;
            }
      
            function setSuccessFor(input) {
              const formControl = input.parentElement;
              formControl.className = 'formcontrol success';
            }
      
          </script> -->
    </body>
</html>