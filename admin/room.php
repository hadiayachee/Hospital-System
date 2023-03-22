<?php include '../datalayer/bookserver.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./newnavbar.css"/>
    <link rel="stylesheet" href="./training.css"/>
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
                <li><a class="active" href="./adminpage.php">Add</a></li>
                <li><a href="./viewdoctr.php">ViewDoctors</a></li>
                <li><a href="./viewpateint.php">Viewpateints</a></li>
                <li><a href="./viewapppoint.php">ViewAppoitments</a></li>
                <li><a href="./searchdonar.php">SearchDonor</a></li> 
                <li><a href="./training.php">Training</a></li> 
                <li><a href="./room.php">ViewRoom</a></li> 
                <li><a href="./logout.php" tite="logout">Logout</a></li>
            </ul>
        </nav>
        <div class="title">
        <h1  class="cir">Room Information</h1>
</div>
        <style><?php include './training.css'; ?></style>
<table class="newtable">
		<tr>
		<th>FirstName</th>
		<th>LastName</th>
        <th>Address</th>
        <th>DateBirth</th>
        <th>Contact Number</th>
		<th>StartDate</th>
		<th>EndDate</th>
        <th>NumberBed</th>
        <th>Cause</th>
        
		</tr>

		<?php $sql3="SELECT  * FROM  bed " ;
            $result3=$mysqli->query($sql3);
            if(mysqli_num_rows($result3)>=1){
                while ($row3=$result3->fetch_assoc()) {

                    echo "<tr><td>".$row3["FirstName"]."</td><td>".$row3["LasttName"]."</td><td>".$row3["Address"]."</td><td>".$row3["Datebirth"]."</td><td>".$row3["ContactNumber"]."</td><td>".$row3["StartDate"]."</td><td>".$row3['EndDate']."</td><td>".$row3["NumberBed"]."</td><td>".$row3["Cause"]."</td></tr>";
                }
                

            }
		?>
		
	</table>
    </section>


</body>
</html>