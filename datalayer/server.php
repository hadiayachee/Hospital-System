<?php 


session_start();
$errors=array();

$mysqli = new mysqli("localhost","root","","registration");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}




if (isset($_POST['Register'])) {

	



	// $UserID 	= $mysqli -> real_escape_string($_POST['UserID']);
	$Username 	= $mysqli -> real_escape_string($_POST['Name']);
	$Address 	= $mysqli -> real_escape_string($_POST['Address']);
	$ContactNumber	 = $mysqli -> real_escape_string($_POST['ContactNumber']);
	$Email 		=  $mysqli -> real_escape_string($_POST['Email']);
	$Password 	= $mysqli -> real_escape_string($_POST['password']);
	$bloodtype 	= $mysqli -> real_escape_string($_POST['bloodtype']);
    
   




// 	if (empty($UserID)) {
// 	array_push($errors,"UserID is required");
// 	# code...
// }

if (empty($Username)) {
	array_push($errors,"UserName is required");
	# code...
}


if (empty($Address)) {
	array_push($errors,"Address is required");
	# code...
}

if (empty($ContactNumber)) {
	array_push($errors,"Contact Number is required");
	# code...
}


if (empty($Email)) {
	array_push($errors,"Email is required");
	# code...
}

if (empty($Password)) {
	array_push($errors,"Password is required");
	# code...
}

if (empty($bloodtype)) {
	array_push($errors,"Bloodtype is required");
	# code...
}







if(count($errors)==0){


	$Password=md5($Password);

	$sql = "INSERT INTO  patients ( Name, Address, ContactNumber, Email, Password,Bloodtype) VALUES ('$Username','$Address','$ContactNumber','$Email','$Password','$bloodtype') ";
    
   


	if (!$mysqli -> query($sql)) {
  printf("%d Row inserted.\n", $mysqli->affected_rows);
    
 
}
    if(move_uploaded_file($_FILES['']))


  $_SESSION['UserID']=$UserID;
  $_SESSION['success']="you are now logged in";
  header('location:./PatientLogin.php');


}
	


	
}




if (isset($_POST['PatientLogin'])) {

	$UserID 	= $mysqli -> real_escape_string($_POST['Email']);
	$Password 	= $mysqli -> real_escape_string($_POST['password']);
if (empty($UserID)) {
array_push($errors,"UserID is required");
# code...
}
if (empty($Password)) {
array_push($errors,"Password is required");


	# code...
}


if (count ($errors)== 0) {

	$Password=md5($Password);
	


$query="SELECT * FROM patients WHERE Email=('$UserID')AND Password=('$Password')";
$result=mysqli_query($mysqli,$query);
if (mysqli_num_rows($result) ==1 )  {




$_SESSION['UserID']=$UserID;
  $_SESSION['success']="you are now logged in";
  header('location:./Pateintinfo.php');
}  else{
	array_push($errors,"The ID/Password not correct");
	
}
}
}

	# code...




	if (isset($_GET['My info'])) {
	header('location:index.php');
	}


	$userprofile=isset($_SESSION['UserID']);
	if(isset($_SESSION['UserID'])){
	$userprofile1=$_SESSION['UserID'];
	
$query="SELECT * FROM patients WHERE Email=('$userprofile1')";
 $result= mysqli_query($mysqli, $query);
 $col= mysqli_fetch_assoc($result);
 $userprofileID = $col['UserID'];

	}





		






 if (isset($_POST['doctorlogin'])) {

	$DoctorID2	= $mysqli -> real_escape_string($_POST['doctorID']);
	$DoctorPassword2= $mysqli -> real_escape_string($_POST['doctorpassword']);
if (empty($DoctorID2)) {
array_push($errors,"Doctor ID is required");
# code...
}
if (empty($DoctorPassword2)) {
array_push($errors,"Password is required");


	# code...
}


if (count ($errors)== 0) {


	


$queryD="SELECT * FROM doctor WHERE DoctorID=('$DoctorID2')AND password=('$DoctorPassword2')";
$resultD=mysqli_query($mysqli,$queryD);
if (mysqli_num_rows($resultD) ==1 )  {




$_SESSION['DoctorID']=$DoctorID2;
  $_SESSION['success']="you are now logged in";
  	header('location:./doctorinfo.php'); 
}  else{
	array_push($errors,"The ID/Password not correct");
	
}
}
}




$doctorprofile=isset($_SESSION['DoctorID']);
if (isset($_SESSION['DoctorID'])){
$doctorprofile1=($_SESSION['DoctorID']);

$querydoctor="SELECT * FROM doctor WHERE DoctorID=('$doctorprofile1')";
$resultdoctor= mysqli_query($mysqli, $querydoctor);
$colD= mysqli_fetch_assoc($resultdoctor);

}





 if (isset($_POST['treatmentHistory'])) {
		  
			 ?>
		  <style><?php include './Pateintinfo.css'; ?></style>
		  
		<table class="newtable" >
         	<caption style="margin-left: 34px;padding: 10px;font-weight: bold;font-size: 30px;" class="asd">Treatment History</caption>
		<tr>
		<th>DoctorID</th>  
		<th>DoctorName</th>
		<th>Treatment</th>
		<th>Doctor's Note</th>	


		</tr> 
		
	<?php  
		$sql11="SELECT  * FROM  description,doctor WHERE descID=('$userprofileID') AND doctorIDdesc=DoctorID" ;
		$result11=$mysqli->query($sql11);
		if(mysqli_num_rows($result11)>=1){
			while ($row11=$result11->fetch_assoc()) {

				echo "<tr><td>".$row11['DoctorID']."</td><td>".$row11['Doctorname']."</td><td>".$row11['treatment']."</td><td>".$row11['Note']."</td></tr>";
			}


			echo "</table";
	


		}

	}



		  ?>





<?php  

if (isset($_POST['AdminLogin'])) {

		$adminID	= $mysqli -> real_escape_string($_POST['adminID']);
		$adminpassword= $mysqli -> real_escape_string($_POST['adminpassword']);
if (empty($adminID)) {
	array_push($errors,"Admin ID is required");
	# code...
}
if (empty($adminpassword)) {
	array_push($errors,"Password is required");
	

		# code...
	}


	if (count ($errors)== 0) {

	
		
	

	$queryA="SELECT * FROM admin WHERE AdminID=('$adminID')AND adminpassword=('$adminpassword')";
	$resultA=mysqli_query($mysqli,$queryA);
	if (mysqli_num_rows($resultA) ==1 )  {
	
	

	
	$_SESSION['AdminID']=$adminID;
  	$_SESSION['success']="you are now logged in";
  	header('location:./adminpage.php'); 
}  else{
		array_push($errors,"The ID/Password not correct");
		
	}
}
}


	

 if (isset($_POST['sendfeedback'])) {
 $feedback2	= $mysqli -> real_escape_string($_POST['feedx']);




$sqlfeed = "INSERT INTO  feedback (pID,feedback) VALUES ('$userprofile','$feedback2') ";

	if (!$mysqli -> query($sqlfeed)) {
  printf("%d Row inserted.\n", $mysqli->affected_rows);

}


 
}






 $mysqli -> close();



   
 ?>