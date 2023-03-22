<?php include '../datalayer/bookserver.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./pateintnavbar.css"/>
    <link rel="stylesheet" href="./viewappointment.css"/>
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
            <div class="title">
                <h1>Appointment</h1>
            </div>
            <style><?php include './viewappointment.css'; ?></style>
        <table class="newtable">
		<tr>
            <th>Appointment ID</th>
            <th>DATE</th>
            <th>TIME</th>
            <th>Doctor Name</th>
            <th>Address</th>
            <th>Contact Number</th>
            <th>Category</th>
		</tr>

		<?php $sql3="SELECT  * FROM bookapp , doctor   WHERE patientID=('$userprofileID') and  docID=DoctorID "  ;
            $result3=$mysqli->query($sql3);
            if(mysqli_num_rows($result3)>=1){
                while ($row3=$result3->fetch_assoc()) {
                    

                    echo "<tr><td>".$row3["AppoID"]."</td><td>".$row3["Date"]."</td><td>".$row3["Time"]."</td><td>".$row3['Doctorname']."</td><td>".$row3['Address']."</td><td>".$row3['ContactNumber']."</td><td>".$row3["categorey"]."</td></tr>";
                }
                
		}

		?>
        <?php /*$sql4="SELECT Doctorname,Address,ContactNumber,category FROM doctor " ;
		$result4=$mysqli->query($sql4);
        
		if(mysqli_num_rows($result4)>=1){
			while ($row4=$result4->fetch_assoc()) {

				echo "<tr><td>".$row4["Doctorname"]."</td><td>".$row4["Address"]."</td><td>".$row4["ContactNumber"]."</td><td>".$row4["category"]."</td></tr>";
			}
			echo "</table";


	


		}

		*/?>
		
	</table>
            <!-- </div> -->
        </div>
    </section>
</body>
</html>