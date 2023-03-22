
<?php 



session_start();



session_destroy();
unset($_SESSION['AdminID']);
header('location:admin.php');
exit();

?>