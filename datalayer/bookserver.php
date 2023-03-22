<?php  

$errors=array();
include ('server.php');

$mysqli = new mysqli("localhost","root","","registration");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}


if (isset($_POST['Book'])) {


	$Date 	=	 $mysqli -> real_escape_string($_POST['Date']);
	$Time 	= 	$mysqli -> real_escape_string($_POST['Time']);
	


if (empty($Date)) {
	array_push($errors,"Date is required");
	# code...
}


if (empty($Time)) {
	array_push($errors,"Time is required");
	# code...
}


if(count($errors)==0){


    $docID = $_REQUEST['docID'];


	$sql="select count(*) AS total from bookapp where time='$Time' and date='$Date' and docID='$docID'";
	$result8=$mysqli->query($sql);
	$data =  $result8->fetch_assoc();
	if ($data['total']==1){
	
		echo '<script>alert("This Date Was Taken By Another Patient")</script>';
	
	}else{
	
	  $sql1 = "INSERT INTO  bookapp ( Date, Time, patientID,docID) VALUES ('$Date','$Time','$userprofileID','$docID') ";
			 $result99=$mysqli ->query($sql1);
			 echo '<script>alert("Your Appointment Was Added")</script>';
			
	}
	
	


}


// 	  $_SESSION['AppoID']=$AppoID;
//   $_SESSION['success']="you are now logged in";
//   header('location:./Patientbookappointmet.php');


 

}





if (isset($_POST['cancel'])) {

		$AppoID2 =$mysqli -> real_escape_string($_POST['AppoID2']);

	if (empty($AppoID2)) {
	array_push($errors,"Appointment ID is required");
}
 if (count($errors)==0) {
 




	$query5="DELETE FROM bookapp WHERE AppoID='$AppoID2' AND patientID=('$userprofileID') ";
	if ($mysqli -> query($query5)) {

		if ($mysqli->affected_rows==0) {
			 array_push($errors,"Wrong Appointment ID");
			
			# code...
		}
		



	}
	  else {
	  
	  echo 'Book is Canceled';
	  


	  }

	 	
	




}
}


if (isset($_POST['Add'])) {

	



	$addID 				= $mysqli -> real_escape_string($_POST['addID']);
	$addname 			= $mysqli -> real_escape_string($_POST['addname']);
	$addAddress 		= $mysqli -> real_escape_string($_POST['addAddress']);
	$addContactNumber	= $mysqli -> real_escape_string($_POST['addContactNumber']);
	$addEmail 			= $mysqli -> real_escape_string($_POST['addEmail']);
	$addPassword 		= $mysqli -> real_escape_string($_POST['addpassword']);





	if (empty($addID)) {
	array_push($errors,"Doctor ID is required");
	# code...
}

if (empty($addname)) {
	array_push($errors,"Doctor Name is required");
	# code...
}


if (empty($addAddress)) {
	array_push($errors,"Address is required");
	# code...
}

if (empty($addContactNumber)) {
	array_push($errors,"Contact Number is required");
	# code...
}


if (empty($addEmail)) {
	array_push($errors,"Email is required");
	# code...
}

if (empty($addPassword)) {
	array_push($errors,"Password is required");
	# code...
}










if(count($errors)==0){

		$addcategory 	= $_REQUEST['addcategory'];


	$sqladd = "INSERT INTO  doctor (DoctorID, Doctorname, email, Address, ContactNumber, password,categorey) VALUES ('$addID','$addname','$addEmail','$addAddress','$addContactNumber','$addPassword','$addcategory') ";



	if ($mysqli -> query($sqladd)) {
  printf("%d Row inserted.\n", $mysqli->affected_rows);


 
}


  $_SESSION['addID']=$addID;
  $_SESSION['success']="you are now logged in";
  header('location:adminpage.php');





}
	


	# code...
}



if (isset($_POST['Delete'])) {

		$deleteID =$mysqli -> real_escape_string($_POST['deleteID']);

	if (empty($deleteID)) {
	array_push($errors,"Doctor ID is required");
}
 if (count($errors)==0) {
 




	$querydelete="DELETE FROM doctor WHERE DoctorID='$deleteID' ";
	if ($mysqli -> query($querydelete)) {

		if ($mysqli->affected_rows==0) {
			 array_push($errors,"Wrong Doctor ID");
			
			# code...
		}
		



	}
	  else {
	  
	  echo 'Book is Canceled';
	  


	  }

	}
}














?>

<!-- $query1="SELECT categorey FROM doctor";
   $result1= mysqli_query($mysqli, $query1);
   $opt="<select name='Categorey'>";
   while ($row= mysqli_fetch_assoc($result1)) {
   	$opt.="<option value ='{$row['categorey']}'>{$row['categorey']}</option>";
   }
   	$opt.="</select>";
   

 

  
   }

}
-->


