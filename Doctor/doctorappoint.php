<?php include '../datalayer/bookserver.php '; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./doctornavbar.css"/>
    <link rel="stylesheet" href="./doctorappoint.css"/>
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
            <div class="title">
                <div class="cir">
                    <h1>APPOINTMENT</h1>
                </div>
            </div>
            <style><?php include './doctorappoint.css'; ?></style>
<table class="newtable">
		<tr>
            <th>Appointment ID</th>
            <th>DATE</th>
            <th>TIME</th>
            
            <th>PatientName</th>
            <th>PatientAddress</th>
            <th>PatientEmail</th>
            <th>PatientContactNumber</th>
            <th>BloodGroup</th>
		</tr>
		<?php $sqldoc="SELECT  * FROM bookapp , patients   WHERE docID=('$doctorprofile1') AND  patientID=UserID "  ;
		$resultdoc=$mysqli->query($sqldoc);
		if(mysqli_num_rows($resultdoc)>= 1){
			while ($rowdoc=$resultdoc->fetch_assoc()) {

				echo "<tr><td >".$rowdoc["AppoID"]."</td><td>".$rowdoc["Date"]."</td><td>".$rowdoc["Time"]."</td> <td>".$rowdoc['Name']."</td><td>".$rowdoc['Address']."</td><td>".$rowdoc['Email']."</td><td>".$rowdoc["ContactNumber"]."</td><td>".$rowdoc["Bloodtype"]."</td></tr>";
			}
			
		}
		?>
		
	</table>

        </div>
    </section>
</body>
</html>