<?php include '../datalayer/bookserver.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./newnavbar.css"/>
    <link rel="stylesheet" href="./viewapppoint.css"/>
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
                <li><a class="active" href="./adminpage.php">Add</a></li>
                <li><a href="./viewdoctr.php">ViewDoctors</a></li>
                <li><a href="./viewpateint.php">Viewpateints</a></li>
                <li><a href="./viewapppoint.php">ViewAppoitments</a></li>
                <li><a href="./searchdonar.php">SearchDonor</a></li> 
                <li><a href="./training.php">Training</a></li> 
                <li><a href="./room.php">ViewRoom</a></li> 
                <li><a href="./logout.php" tite="logout">Logout</a></li>
            </ul>
        </nav>
        <div class="bigsection">
            <div class="classone">
               
                <h2 style="margin-left:45% ;margin-top:80px">Appointment</h2>
        <style><?php include './viewdoctr.css'; ?></style>
<table class="newtable">
            <tr>
            <th>Appointments ID</th>
            <th>Doctor Name</th>
            <th>Patient Name</th>
            <th>Date</th>
            <th>Time</th>
            

            </tr>

            <?php $sql3="select bookapp.AppoID, doctor.Doctorname, patients.Name,bookapp.Time, bookapp.Date
    from (bookapp inner join patients on bookapp.patientID=patients.UserID ) inner join doctor on doctor.DoctorID=bookapp.docID
    order by bookapp.Time " ;
            $result3=$mysqli->query($sql3);
            if(mysqli_num_rows($result3)>=1){
                while ($row3=$result3->fetch_assoc()) {

                    echo "<tr><td>".$row3["AppoID"]."</td><td>".$row3["Doctorname"]."</td><td>".$row3["Name"]."</td><td>".$row3["Date"]."</td><td>".$row3['Time']."</td></tr>";
                }


               
        


            }

            ?>
            
        </table>
                
            </div>
        </div>
    </section>
</body>
</html>