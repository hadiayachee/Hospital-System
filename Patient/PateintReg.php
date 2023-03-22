
<?php include('../datalayer/server.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./PatientReg.css"/>
    <link rel="stylesheet" href="circle.css"/>
    <title>Document</title>
</head>
<body>
    <div class="Pat-Reg-Card">
        <div class="title">
            <h1>Registration</h1>
        </div>
        <div class="reg-info">
        <form method="post" action="PateintReg.php" enctype="multipart/form-data">

<?php include ('../datalayer/errors.php'); ?>
                <!-- <div>
                    <h3>User ID</h3>
                    <input  type="text"  name="UserID"  id="Su">
                </div> -->
                <div>
                    <h3>Name</h3>
                    <input  type="text" name="Name" id="Su">
                </div>
                <div>
                    <h3>Address</h3>
                    <input  type="text" name="Address" id="Su">
                </div>
                <div>
                    <h3>Contact Number</h3>
                    <input  type="text" name="ContactNumber" id="Su">
                </div>
                <div>
                    <h3>Email Address</h3>
                    <input  type="text" name="Email" id="Su">
                </div>
                <div>
                    <h3>Password</h3>
                    <input  type="text" name="password" id="Su">
                </div>
                <div>
                    <h3>Blood Type</h3>
                    <input  type="text" name="bloodtype" id="Su">
                </div>
                <div>
                <button type="submit" name="Register" id="btns">Register</button>
                  
                </div>
                <div>
                    <p>Already a member?<a href="./PatientLogin.php">Sign in</a></p>
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