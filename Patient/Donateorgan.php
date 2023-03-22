<?php include '../datalayer/bookserver.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./DonateOrgan.css"/>
    <link rel="stylesheet" href="./pateintnavbar.css"/>
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
            <div class="donate-card">
                <div class="title">
                    <h1>Donate</h1>
                </div>
                <div class="do-info">
                   
	<form method="post" action="Donateorgan.php">

<?php include ('../datalayer/errors.php'); ?>

<?php  
if (isset($_POST['Donate'])) {

	// $DUserID 			= $mysqli -> real_escape_string($_POST['DUserID']);
	$DUsername 			= $mysqli -> real_escape_string($_POST['DName']);
	$DAddress 			= $mysqli -> real_escape_string($_POST['DAddress']);
	$DContactNumber		= $mysqli -> real_escape_string($_POST['DContactNumber']);
	$DEmail 			= $mysqli -> real_escape_string($_POST['DEmail']);
	$Dbloodtype 		= $mysqli -> real_escape_string($_POST['Dbloodtype']);
	$Dorgan				= $mysqli -> real_escape_string($_POST['Organ']);
	




// 	if (empty($DUserID)) {
// 	array_push($errors,"UserID is required");
// 	# code...
// }

if (empty($DUsername)) {
	array_push($errors,"UserName is required");
	# code...
}


if (empty($DAddress)) {
	array_push($errors,"Address is required");
	# code...
}

if (empty($DContactNumber)) {
	array_push($errors,"Contact Number is required");
	# code...
}


if (empty($DEmail)) {
	array_push($errors,"Email is required");
	# code...
}


if (empty($Dbloodtype)) {
	array_push($errors,"Bloodtype is required");
	# code...
}







if(count($errors)==0){



	$sql7 = "INSERT INTO  donor (donarname,donaraddress,donarnumber,donaremail,donarblood,organ) VALUES ('$DUsername','$DAddress','$DContactNumber','$DEmail','$Dbloodtype','$Dorgan') ";
	if ($mysqli -> query($sql7)) { ?>

	<h2> <?php printf("Thanks For Donation",$mysqli->affected_rows);?></h2>
			
			
		<?php 



	}
}
}














?>
<!-- 
                        <div>
                            <h3>User ID</h3>
                            <input type="text" id="Su" name="DUserID" value=" <?php echo "" .isset($_SESSION['UserID']);?> " >
                        </div> -->
                        <div>
                            <h3>Name</h3>
                            <input type="text" id="Su" name="DName" value="<?php echo $col['Name']; ?> ">
                        </div>
                        <div>
                            <h3>Address</h3>
                            <input type="text" id="Su"  name="DAddress" value="<?php echo $col['Address']; ?>">
                        </div>
                        <div>
                            <h3>Contact Number</h3>
                            <input type="text" id="Su" name="DContactNumber" value=" <?php echo $col['ContactNumber']; ?>">
                        </div>
                        <div>
                            <h3>Email Address</h3>
                            <input type="text" id="Su"  name="DEmail" value="<?php echo $col['Email']; ?>">
                        </div>
                        <div>
                            <h3>Blood type</h3>
                            <input type="text" id="Su" name="Dbloodtype" value="<?php echo $col['Bloodtype']; ?>">
                        </div>
                        <div>
                            <h3>type of organ</h3>
                            <select name="Organ" id="s">
                            <option value="Blood">Blood</option>
                            <option value="Heart">Heart</option>
                            <option value="kidney">kidney</option>
                            <option value="Eye">Eye</option>
                            </select>
                        </div>
                        <div>
                        <button type="submit" name="Donate" id="btns">Donate</button>
                        
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>