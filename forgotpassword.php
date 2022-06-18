<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <style>
        .content {
            height: 100vh;
        }

        .innercontent {
            padding: 20px;
            box-shadow: 0 0 10px black;
        }
        .numberform{
           width: 60%;
        }

        .myform {
            margin-left: 30%;
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
    <div class="content d-flex justify-content-center align-items-center border border-primary">
        <div class="innercontent border border-dark">
            <div class = "text-center">
                <h1>SnapShop</h1>
                <hr>
                <h5>Forgot Your Password?</h5>
                <p>Please Enter Your Phone Number Registered On This Account</p>
            </div>
            <?php
                if(isset($_GET['error'])) { ?>
                    <p class = "error text-center"> <?php echo $_GET['error']; ?></p>
                <?php }
                ?>
            <form action="forgotpasswordvalidate.php" method = "post">
                <div class = "myform">
                    <input class = "phonenumber numberform form-control" name = "phonenumber" id = "number" type="text" placeholder="Eg: 77792293" maxlength = 8>
                </div>
                <div class = "text-center mt-4">
                    <input type="submit" style = "background-color: coral; border-radius: 20px;" name = "submit" value = "Submit">
                </div>
            </form>
            <div class = "text-center mt-5">
                <a class = "text-decoration-none text-dark" href="#">Terms of Use</a>
                <a class = "text-decoration-none text-dark ms-3" href="#">Privacy Policy</a>
            </div>
        </div>
    </div>

    <script>
        
        
      
      </script>
</body>
</html>