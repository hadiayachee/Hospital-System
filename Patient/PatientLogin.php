<?php include('../datalayer/server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./PatientLogin.css"/>
    <link rel="stylesheet" href="circle.css"/>
    <title>Document</title>
</head>
<body>
<script>

$(document).ready(function () {
    $(".toggle-password").click(function () {
        $(this).toggleClass("fa-eye fa-eye-slash");
        if ($(".test").attr("type") == "password") {
            $(".test").attr("type", "text");
        } else {
            $(".test").attr("type", "password");
        }
    });
 console.log(1);
        $('.toggle-password').addClass('field-icon-en');
       
    
});
</script>

    <div class="patient-card">
        <div class="title">
        <a href="../index.php" style="text-decoration: none;color:white" ><h2>Patient Login</h2></a>
        </div>
        <div class="pat-info">
        <form method="post" action="PatientLogin.php">

<?php include ('../datalayer/errors.php')?>
                <div>
                    <h3>Email</h3>
                    <input  type="text" name="Email" id="Su">
                </div>
                <div>
                    <h3>Password</h3>
                    <input  type="password" name="password" id="Su"  class="test">
                   <center> <span  toggle="#test" class="fa fa-fw fa-eye field-icon toggle-password" ></center></span>
                </div>
                <div>
                <button type="submit" name="PatientLogin" id="btns"> Login</button>
                   
                </div>
                <div>
                    <p>Not a member?<a href="./PateintReg.php">Sign up</a></p>
                </div>
            </form>
        </div>
    </div>
    <div class="circle1"></div>
    <div class="circle2"></div>
    <div class="circle3"></div>
    <div class="circle4"></div>
    <div class="circle5"></div>
    <div class="circle6"></div>
</body>
</html>