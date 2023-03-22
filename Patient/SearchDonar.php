<?php include '../datalayer/bookserver.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./pateintnavbar.css"/>
    <link rel="stylesheet" href="./SearchDonar.css"/>
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
            <form method="post" action="SearchDonar.php">

<?php include ('../datalayer/errors.php') ;?>
                    <h3>Search by</h3>
                    <h3>Blood Group</h3>
                    <div id="or">
                        <h3>Organ</h3>
                        <input type="text" name="dID3" id="Su">
                    </div>
                    <div>
                    <button type="submit" name="SearchD" id="btns">Search</button>
                        
                    </div>
                </form>
            </div>
        </div>
        <?php 

if (isset($_POST['SearchD'])) {

?>	<style><?php include './SearchDoctor.css'; ?></style>
<table class="newtable">
<tr>

<th>DonorName</th>
<th>DonorAddress</th>
<th>DonorContactNumber</th>
<th>DonorEmail</th>
<th>DonorBloodGroup</th>
<th>DonorOrgan</th>



</tr> <?php  


$dID3 =$mysqli -> real_escape_string($_POST['dID3']);

$sql8="SELECT  * FROM  donor   WHERE donarblood=('$dID3') OR organ=('$dID3') ";
$result8=$mysqli->query($sql8);
if(mysqli_num_rows($result8)>=1){
   while ($row8=$result8->fetch_assoc()) {

       echo "<tr><td>".$row8["donarname"]."</td><td>".$row8["donaraddress"]."</td><td>".$row8["donarnumber"]."</td><td>".$row8['donaremail']."</td><td>".$row8['donarblood']."</td><td>".$row8['organ']."</td></tr>";
   }


  



}
}?>
</table>
</form> 
    </section>
    
   
</body>
</html>