<?php include '../datalayer/bookserver.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./doctornavbar.css"/>
    <link rel="stylesheet" href="./searchpatient.css"/>
    <title>Document</title>
</head>
<body>
    <section id="home">
        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fa-solid fa-bars"></i>
            </label>
            <label class="logo">Hospital</label>
            <ul>
                <li><a class="active" href="./doctorinfo.php">Myinfo</a></li>
                <li><a href="./doctorappoint.php">My Appointments</a></li>
                <li><a href="./searchpatient.php">Search Patients</a></li>
                <li><a href="./description.php">Add Description</a></li>
                <li><a href="./logout.php" tite="logout">Logout</a></li>
            </ul>
        </nav>
        <div class="bigsection">
            <div class="searchcard">
            <form method="post" action="searchpatient.php" class="patientsearch">

<?php include ('../datalayer/errors.php') ;?>
                    <br><br>          
                    <h3>Search by</h3>
                   
                        <h3>Patient Name</h3>
                        <input type="text" name="PID" id="Su">
                   
                    <div>
                    <button type="submit" name="SearchP" id="btns">Search</button>
                       
                    </div>
                </form>
            </div>
        </div>
        
    <?php 

if (isset($_POST['SearchP'])) {

?>	 <style><?php include './searchpatient.css'; ?></style>
<table class="newtable">
    <caption style="margin-left: 34px;padding: 10px;font-weight: bold;font-size: 30px;">Patient Information</caption>

<tr>
<!-- <th>PatientID</th> -->
    <th>Name</th>
    <th>Address</th>
    <th>Contact Number</th>
    <th>Email</th>
    <th>BloodGroup</th>
</tr> <?php  


$PID =$mysqli -> real_escape_string($_POST['PID']);

$sqlP="SELECT  * FROM  patients   WHERE 	UserID=('$PID') OR Name=('$PID') " ;
$resultP=$mysqli->query($sqlP);
if(mysqli_num_rows($resultP)==1){
   while ($rowP=$resultP->fetch_assoc()) {

       echo "<tr><td>".$rowP["Name"]."</td><td>".$rowP["Address"]."</td><td>".$rowP["ContactNumber"]."</td><td>".$rowP['Email']."</td><td>".$rowP['Bloodtype']."</td></tr>";
   }


  



}
}?>
</table>
   <?php 	
        if (isset($_POST['SearchP'])) {

?>	 <style><?php include './searchpatient.css'; ?></style>
<table class="newtable">
    <caption style="margin-left: 34px;padding: 10px;font-weight: bold;font-size: 30px;" class="asd">Treatment History</caption>
<tr>

<th>PatientName</th>
<th>Treatment</th>
<th>Doctor's Note</th>	


</tr> <?php  


$PID =$mysqli -> real_escape_string($_POST['PID']);

$sqlP2="SELECT  * FROM  description   WHERE descName=('$PID') and doctorIDdesc=('$doctorprofile1') " ;
$resultP2=$mysqli->query($sqlP2);
if(mysqli_num_rows($resultP2)>1){
   while ($rowP2=$resultP2->fetch_assoc()) {

       echo "<tr><td>".$rowP2["descName"]."</td><td>".$rowP2["treatment"]."</td><td>".$rowP2['Note']."</td></tr>";
   }


  



}
}?>
</table>
    </section>



</body>
</html>