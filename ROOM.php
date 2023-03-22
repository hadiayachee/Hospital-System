


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
        <a href="./index.php" style="text-decoration: none;color:white"><h1>Booking A Room</h1></a>
           
        </div>
        <div class="reg-info">
        <form method="post" action="" enctype="multipart/form-data">


                <div>
                    <h3>FirstName</h3>
                    <input  type="text"  name="FN" required id="Su">
                </div>
                <div>
                    <h3>LastName</h3>
                    <input  type="text" name="LN" required id="Su">
                </div>
                <div>
                    <h3>Address</h3>
                    <input  type="text" name="Address" required id="Su">
                </div>
                
                <div>
                    <h3>Date of Birth</h3>
                    <input style="width:175px;" type="date" name="datebirth" required id="Su">
                </div>
<div>
                    <h3>Contact Number</h3>
                    <input  type="text" name="ContactNumber" required id="Su">
                </div>
                <div>
                    <h3>Start of Date</h3>
                    <input style="width:175px;" type="date" name="from" required id="Su">
                </div>
                <div>
                    <h3>End of Date</h3>
                    <input style="width:175px;" type="date" name="to" required id="Su" >
                </div>

                <div>
                <h3>Number of Bed</h3>

<select style="width:175px;" name="bed" id="Su">
  <option value="volvo">one</option>
  <option value="saab">two</option>
</select>
                </div>
                <div>
                    <h3>Cause of Booking</h3>
                    <input  type="text" name="cause" id="Su">
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
                        $from = $_POST['from']; 
                        $to = $_POST['to']; 
						$yu = $_POST['bed'];
                        $nu = $_POST['cause']; 
						

                        

						 $query = "Insert Into Bed (FirstName,LasttName,Address,Datebirth,ContactNumber,StartDate,EndDate,NumberBed,Cause) values ('$FN','$LN', '$Address', '$datebirth', '$ContactNumber', ' $from', ' $to', ' $yu', '$nu')";
						mysql_query($query,$idCon);
                        echo '<script>alert("The Room was Appotement")</script>';
}
?>