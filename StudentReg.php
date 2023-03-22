


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./StudentReg.css"/>
    <link rel="stylesheet" href="circle.css"/>
    <title>Document</title>
</head>
<body>
    <div class="Pat-Reg-Card">
        <div class="title">
        <a href="./index.php" style="text-decoration: none;color:white"><h1>Registration For Training</h1></a>
           
           
        </div>
        <div class="reg-info">
        <form method="post" action="" enctype="multipart/form-data">


                <div>
                    <h3>FirstName</h3>
                    <input  type="text"  name="FN"  id="Su">
                </div>
                <div>
                    <h3>LastName</h3>
                    <input  type="text" name="LN" id="Su">
                </div>
                <div>
                    <h3>Address</h3>
                    <input  type="text" name="Address" id="Su">
                </div>
                <div>
                <div>
                    <h3>Date of Birth</h3>
                    <input  type="date" name="datebirth" id="Su">
                </div>

                    <h3>Contact Number</h3>
                    <input  type="text" name="ContactNumber" id="Su">
                </div>
                <div>
                    <h3>Email Address</h3>
                    <input  type="text" name="Email" id="Su">
                </div>
                <div>
                    <h3>Year in University</h3>
                    <input  type="text" name="yu" id="Su">
                </div>
                <div>
                    <h3>Name of University</h3>
                    <input  type="text" name="nu" id="Su">
                </div>
                <div>
                    <h3>Blood Type</h3>
                    <input  type="text" name="bloodtype" id="Su">
                </div>

                <div>
                <button type="submit" name="Register" id="btns">Submit</button>
                  
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
<?php
error_reporting(E_ALL ^ E_DEPRECATED);
    
if(isset ($_POST["Register"]))
{





	$Server = 'localhost';
                     $UserName = 'root';
                     $PassWord = '';
                      $idCon = mysql_connect($Server,$UserName,$PassWord);  
                      $DataBase = "registration";
                      $idBase = mysql_select_db("registration");
                     
					
						$FN=$_POST['FN']; 	
						$LN = $_POST['LN']; 
						$Address = $_POST['Address']; 	
						$datebirth = $_POST['datebirth']; 
						$ContactNumber = $_POST['ContactNumber'];
                        $Email = $_POST['Email']; 
						$yu = $_POST['yu'];
                        $nu = $_POST['nu']; 
						$bloodtype = $_POST['bloodtype'];

                        

						 $query = "Insert Into Training (FirstName,LasttName,Address,ContactNumber,EmailAddress,YearinUniversity,NameofUniversity,BloodType,DateofBirth) values ('$FN','$LN', '$Address', '$ContactNumber', ' $Email', ' $yu', ' $nu', '$bloodtype', '$datebirth')";
						mysql_query($query,$idCon);
                        echo '<script>alert("WE CALL YOU LATER THANK YOU AND GOOD LUCK")</script>';
                        
	
}
?>