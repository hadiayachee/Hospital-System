<?php include ('../datalayer/server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./doctornavbar.css"/>
    <link rel="stylesheet" href="./doctorinfo.css"/>
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
            <div class="info-card">
                <div class="title">
                    <h1>My-INFO</h1>
                </div>
                <form method="post" action="doctorinfo.php" >
                <div class="doc-info">
                <br><br><br><br>
                    <div class="in">
                        <h1>ID:<?php echo ($_SESSION['DoctorID']);?></h1>
                    </div>
                    <br>
                    <br>
                    <div class="in">
                        <h1>Email: <?php  echo $colD['email']; ?></h1>
                    </div>
                    <br>
                    <br>
                    <div class="in">
                        <h1>Name: <?php echo $colD['Doctorname']; ?></h1>
                    </div>
                    <br>
                    <br>
                    <div class="in">
                        <h1>Address:<?php echo $colD['Address']; ?></h1>
                    </div>
                    <br>
                    <br>
                    <div class="in">
                        <h1>Contact Number:<?php echo $colD['ContactNumber']; ?></h1>
                    </div>
                    <br>
                    <br>
                    <div class="in">
                        <h1>Specialized In : <?php echo $colD['categorey']; ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>