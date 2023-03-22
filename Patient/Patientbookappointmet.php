<?php include '../datalayer/bookserver.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./pateintnavbar.css"/>
    <link rel="stylesheet" href="./Patientbookappointment.css"/>
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>  
    $(document).ready(function () {
        var dtToday = new Date();

        var month = dtToday.getMonth() + 1;
        var day = dtToday.getDate();
        var year = dtToday.getFullYear();

        if (month < 10)
            month = '0' + month.toString();
        if (day < 10)
            day = '0' + day.toString();

        var maxDate = year + '-' + month + '-' + day;
        $('#txtDate').attr('min', maxDate);
      
       
  
    });
</script>
<script>

        $(document).ready(function () {
            $(".toggle-password").click(function () {
                $(this).toggleClass("fa-eye fa-eye-slash");
                if ($("#passwordExternal").attr("type") == "password") {
                    $("#passwordExternal").attr("type", "text");
                } else {
                    $("#passwordExternal").attr("type", "password");
                }
            });
         
                $('#x').addClass('field-icon-en');
               
            
        });
    </script>
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
            <div class="book-card">
                <div class="title">
                    <h1>Book-Appointment</h1>
                </div>
                <div class="book-info">
                <form method="post" action="Patientbookappointmet.php">

<?php include ('../datalayer/errors.php');?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                        <div>
                            <h3>category</h3>
                            <select id="SS" name="categorey">
                            <option value="bone" >bone</option>
	   		<option value="heart">heart</option>
	   		<option value="Dentistry">Dentistry</option>
	   		<option value="MentalHealth">Mental Health</option>
	   		<option value="Surgery">Surgery</option>

                            </select>
                        </div>
                        <button type="submit" name="Search" id="btns">Search</button>
                       
                   
                </div>
            </div>
        </div>
        <style><?php include './Patientbookappointment.css'; ?></style>
        <?php  

if (isset($_POST['Search'])) {

$categorey = mysqli_real_escape_string($mysqli,$_POST['categorey']);

$query2="SELECT * FROM doctor WHERE categorey=('$categorey')";
$result2=mysqli_query($mysqli,$query2);
?>
<div class="treatment">
<div class="box1">

      <label>Doctor Name</label>
      

  <select  name="docID" id="drop" >
      
<?php   while ($row2=mysqli_fetch_assoc($result2)) {?>
  


  
  <option value=<?php echo $row2['DoctorID'] ?>> <?php echo $row2['Doctorname'] ?> </option>

 <?php 

} ?>
</select>
</div>



<!-- <div>
  <label>Appointment ID</label>
  <input type="text" name="AppoID" >

</div> -->





    <div class="box1">
        <label>Date</label>
        <input type="Date" name="Date" id = "txtDate" class="form-control" max="date('Y-m-d')" >
    </div>

     <div class="box1">
        <label>Time</label>
        <input type="Time" name="Time"  step="1800" max="18:00" min="10:00" id="drop">
    </div>

  
        
			<button type="submit" name="Book" id="btns">BOOK</button>
</div>
	 
	 <?php  
}


	    ?>








</form>
    </section>
    

</body>
</html>