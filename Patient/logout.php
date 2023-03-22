
<?php 


session_start();



session_destroy();
unset($_SESSION['UserID']);
header('location:PatientLogin.php');
exit();

?>

