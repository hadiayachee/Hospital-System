<?php include ('../datalayer/bookserver.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./doctornavbar.css"/>
    <link rel="stylesheet" href="./description.css"/>
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
            <div class="search-card">
            <form method="post" action="description.php" >







<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<?php
        $query1="SELECT * FROM patients INNER JOIN bookapp on patients.UserID=bookapp.patientID
WHERE bookapp.docID=('$doctorprofile1')";
$result3=mysqli_query($mysqli,$query1);
?>
<style><?php include './description.css'; ?></style>

  <label>Patient Name</label>
  
  
  <select  name="docname" id="drop">
      
<?php   while ($row2=mysqli_fetch_assoc($result3)) {?>
  <option  value=<?php echo $row2['UserID'] ?>> 
  <?php echo $row2['Name'] ?> </option>

 <?php 

} ?>
</select>
                    <div>
                    <button type="submit" name="SearchPA" id="btns">Search</button>
                       
                    </div>
                
            </div>
        </div>

       





<?php 


if (isset($_POST['SearchPA'])) {

$Patientsearch = mysqli_real_escape_string($mysqli,$_POST['docname']);

$query="SELECT * FROM patients WHERE UserID=('$Patientsearch')";
$result2=mysqli_query($mysqli,$query);

$_SESSION['x']=$Patientsearch;

  
while ($row2=mysqli_fetch_assoc($result2)) {
?>



<style><?php include './description.css'; ?></style>


<div class="treatment">
    <div class="box1">
        <label>Name:</label>
        <input type="text" name="descName" value="<?php echo $row2['Name']; ?>"> 
    </div>
    <div class="box1">
        <label>Treatment:</label>
        <input type="text" name="Treatment"> 
    </div>
    <div class="box1">
        <label>Note:</label>
        <input style="" type="text" name="Note">
    </div>
    <button type="submit" name="AddD" id="b" >Add</button>
</div>

<?php  

}
?>

	   </div>


<?php 
}


  ?>




 
	    <?php  


if (isset($_POST['AddD'])) {
	include ('../datalayer/errors.php');
	    	$errors=array();

	// $descID 			= $mysqli -> real_escape_string($_POST['descID']);
	$descName 			= $mysqli -> real_escape_string($_POST['descName']);
	$treatment 			= $mysqli -> real_escape_string($_POST['Treatment']);
	$note				= $mysqli -> real_escape_string($_POST['Note']);

	







if (empty($treatment)) {
	array_push($errors,"Treatment is required");
	# code...
}

if (empty($note)) {
	array_push($errors,"Your note is required");
	# code...
}








if(count($errors)==0){


$v=$_SESSION['x'];

	$sql7 = "INSERT INTO  description (descID,descName,treatment,note,doctorIDdesc) VALUES ('$v','$descName','$treatment','$note','$doctorprofile1') ";
	if ($mysqli -> query($sql7)) { ?>

<center>	<h2 class="thanks"> <?php printf("Your Description Is Added",$mysqli->affected_rows);?></h2></center>
			
			
		<?php 



	}
}
}














?>
</form>
</form>
    </section>
  
</body>
</html>