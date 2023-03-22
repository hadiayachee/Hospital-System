<?php include ('../datalayer/server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./pateintnavbar.css"/>
    <link rel="stylesheet" href="./Pateintinfo.css"/>
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
            <div class="pat-card">
                <div class="title">
                    <h1>My-INFO</h1>
                </div>
                <div class="info-sec">
                <form method="post" style="width:100%;height:100%;display:flex;align-items:center;justify-content:space-around;flex-direction:column;" action="Pateintinfo.php">
                    <!-- <div>
                        <h1>ID: <?php echo $_SESSION['UserID'];?></h1>
                    </div> -->
                    <div>
                        <h1>Email: <?php echo $col['Email']; ?></h1>
                    </div>
                    <div>
                        <h1>Name:<?php echo $col['Name']; ?></h1>
                    </div>
                    <div>
                        <h1>Address: <?php echo $col['Address']; ?></h1>
                    </div>
                    <div>
                        <h1>Contact Number:<?php echo $col['ContactNumber']; ?></h1>
                    </div>
                    <div>
                        <h1>Blood Type: <?php echo $col['Bloodtype']; ?></h1>
                    </div>
                    <div>

                      
                    <button type="submit" name="treatmentHistory" id="S">MyTreatMentHistort</button>
<!-- 
                    <button type="submit" name="feedback" id="S">sendFeedback</button> -->
                           
                        </form>


                    </div>
                </div>
            </div>
        </div>
        <?php  


if (isset($_POST['feedback'])) {
    
?>
<style><?php include './Pateintinfo.css'; ?></style>
<form method="post" action="" >
<div class="treatment">
<div class="box1">
<label>FeedBack</label>

<textarea name="feedx" placeholder="Write something.." ></textarea>
</div>
<button type="submit" name="sendfeedback" id="b"  >Send</button>



</div>


<?php 

}




?>






</form>
    </section>
    
</body>
</html>