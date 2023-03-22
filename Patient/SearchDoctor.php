<?php include '../datalayer/bookserver.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./pateintnavbar.css"/>
    <link rel="stylesheet" href="./SearchDoctor.css"/>
    <title>Document</title>
</head>
<body>
    <section id="home">
        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fa-solid fa-bars"></i>
            </label>
            <label class="logo">HOSPITAL</label>
            <ul>
                <li><a class="active" href="./Pateintinfo.php">MyInfo</a></li>
                <li><a href="./Patientbookappointmet.php">Bookapp</a></li>
                <li><a href="./viewappointment.php">Viewapp</a></li>
                <li><a href="./cancelbook.php">Cancel</a></li>
                <li><a href="./SearchDonar.php">SearchDonor</a></li>
                <li><a href="./Donateorgan.php">Donateorgan</a></li> 
                <li><a href="./SearchDoctor.php">Searchdoctor</a></li> 
                <li><a href="./logout.php" tite="logout">Logout</a></li>
            </ul>
        </nav>
        <div class="bigsection">
            <div class="searchcard">
            <form method="post" action="SearchDoctor.php">

<?php include ('../datalayer/errors.php') ;?>
                    <h3>Search by</h3>
                   
                    <h3>Doctor Name</h3>
                    <div id="or">
                        <h3>Category</h3>
                        <input type="text" name="dID" id="Su" >
                    </div>
                    <div>
                    <button type="submit" name="Search" id="btns">Search</button>
                        
                    </div>
               
            </div>
        </div>
        
		<?php 

if (isset($_POST['Search'])) {

?>
 <style><?php include './SearchDoctor.css'; ?></style>
 <table class="newtable">
<tr>

<th>Doctor Name</th>
<th>Address</th>
<th>Contact Number</th>
<th>Category</th>

</tr>

<?php  



$dID =$mysqli -> real_escape_string($_POST['dID']);

$sql6="SELECT  * FROM  doctor   WHERE 	Doctorname=('$dID') OR DoctorID=('$dID') OR categorey=('$dID') " ;
$result6=$mysqli->query($sql6);
if(mysqli_num_rows($result6)>=1){
   while ($row6=$result6->fetch_assoc()) {

       echo "<tr><td>".$row6["Doctorname"]."</td><td>".$row6["Address"]."</td><td>".$row6["ContactNumber"]."</td><td>".$row6['categorey']."</td></tr>";
   }


  



}
}?>
</table>
</form>  
    </section>
    
</body>
</html>