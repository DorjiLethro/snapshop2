<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>set password</title>
    <script defer src="script.js"></script>
    <style>
        .wrapper {
            width: 100%;
            height: 100vh;
        }

        .innerwrapper {
            padding: 20px;
            box-shadow: 0 0 10px black;
        }
        .button {
            width: 50%;
        }

        .newpassword {
            height: 50px;
        }
        .confirmpassword{
            height: 50px;
        }

        .error {
            color: red;
            box-shadow:0 0 5px red;
            padding: 5px;
        }
      
    </style>
       
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <script>
       
        
    </script>
    <div id ="error"></div>
    <div class="wrapper d-flex align-items-center justify-content-center border border-dark">
        <div class="innerwrapper text-center">
            <h1>Set Password</h1>
            <hr>
            <h6>Enter new password and confirm</h6>
            <?php
                if(isset($_GET['error'])) { ?>
                   <?php $error = $_GET['error']; ?>
                   <?php if($error === 'k') { ?>
                        <div class = "error">
                            Input Fields Are Empty
                        </div>
                   <?php }elseif($error === 'i') { ?>
                        <div class = "error">
                            Password Not Matching
                        </div>
                  <?php }
                }
            ?>
            <div>
                <form action="setpassword.php" method = 'post'>
                    <?php
                        if(isset($_GET['number'])) { ?>
                           <?php $number = $_GET['number']; ?>
                            <input type="hidden" name = "phonenumber" value = "<?php echo $number ?>">
                       <?php }
                    ?>
                    <div class = "input-group mt-4">
                        <label class = "newpassword input-group-text" for="password"><i class = "bi bi-lock"></i></label>
                        <input name = 'password' class = "form-control"type="text" placeholder="Enter new password" id = "password">
                    </div>
                    <div class = "input-group mt-4">
                        <label class = "confirmpassword input-group-text" for="password"><i class = "bi bi-lock"></i></label>
                        <input name = "confirm" class = "form-control " type="text" placeholder="confirm new password">
                    </div>
                    <div class = "text-center mt-4">
                        <input type="submit" name = 'submit' class = 'btn btn-primary'>
                    </div>
                </form>
            </div>
                
                <div class = "text-center mt-5">
                    <a class = "text-decoration-none text-dark" href="#">Terms of Use</a>
                    <a class = "text-decoration-none text-dark ms-3" href="#">Privacy Policy</a>
                </div>
            </div>
        </div>
        
    </div>
    
</body>
</html>