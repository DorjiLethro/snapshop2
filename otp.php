<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>OTP verification</title>
</head>
<body>
    <style>
       .height-100 {
    height: 100vh
}

.card {
    width: 400px;
    border: none;
    height: 600px;
    box-shadow: 0px 5px 20px 0px #d2dae3;
    display: flex;
    justify-content: center;
    align-items: center
}

.card h6 {
    
    font-size: 20px
}

.inputs input {
    width: 40px;
    height: 40px
}


.form-control:focus {
    box-shadow: none;
    
}

.validate {
    border-radius: 20px;
    height: 40px;
    background-color: #5371FF;
    width: 140px
}
    </style>
   <div class="container height-100 d-flex justify-content-center align-items-center">
    <div class="position-relative">
        <div class="card p-2 text-center">
            <img src="otp.png" class="img-fluid" alt="Responsive image" width="100px" height="100px">
            <h6>OTP Verification <br><br> Enter the OTP sent to your Phone number</h6>
            
            <form action="otpvalidate.php" method = 'post'>
                <?php
                    if(isset($_GET['number'])) { ?>
                       <?php $number = $_GET['number']; ?>
                            <input type="hidden" name = "phone" value = "<?php echo $number ?>" readOnly = "true"/>
                   <?php }
                ?>
                
                <div id="otp" class="inputs d-flex flex-row justify-content-center mt-2"> 
                    <input name = '1' class="m-2 text-center form-control rounded" type="text" id="first" maxlength="1" /> 
                    <input name = '2' class="m-2 text-center form-control rounded" type="text" id="second" maxlength="1" /> 
                    <input name = '3' class="m-2 text-center form-control rounded" type="text" id="third" maxlength="1" /> 
                    <input name = '4' class="m-2 text-center form-control rounded" type="text" id="fourth" maxlength="1" /> 
                    
                </div>
                <div class="mt-4 ">
                    <button class="btn  px-4 validate" name = 'submit'>Confirm</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function(event) {

    function OTPInput() {
    const inputs = document.querySelectorAll('#otp > *[id]');
    for (let i = 0; i < inputs.length; i++) {
        inputs[i].addEventListener('keydown', function(event)
        { if (event.key==="Backspace" )
        { inputs[i].value='' ; if (i !==0) inputs[i - 1].focus(); } 
        else { if (i===inputs.length - 1 && inputs[i].value !=='' ) { return true; } 
        else if (event.keyCode> 47 && event.keyCode < 58) { inputs[i].value=event.key; 
        if (i !==inputs.length - 1) inputs[i + 1].focus(); event.preventDefault(); }
            else if (event.keyCode> 64 && event.keyCode < 91) { inputs[i].value=String.fromCharCode(event.keyCode); 
            if (i !==inputs.length - 1) inputs[i + 1].focus(); event.preventDefault(); } } }); } } OTPInput(); });
</script>
</body>