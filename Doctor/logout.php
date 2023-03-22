
<?php 


session_start();



session_destroy();
unset($_SESSION['DoctorID']);
header('location:doctorlogin.php');
exit();

?>