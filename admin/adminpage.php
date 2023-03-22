<?php include ('../datalayer/bookserver.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./admincss.css"/>
    <link rel="stylesheet" href="./newnavbar.css"/>
    <script src="https://code.iconify.design/2/2.2.0/iconify.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        <div class="newforms">
            <div class="classone">
                <div class="addcard">
                    <div class="title">
                        <h3>Add Doctor</h3>
                    </div>
                    <div class="forminfo">
                    <form method="post" action="adminpage.php">

<?php include ('../datalayer/errors.php'); ?>
                            <div>
                                <h3>Doctor ID</h3>
                                <input type="text" name="addID" id="Su">
                            </div>
                            <div>
                                <h3>Doctor Name</h3>
                                <input type="text" name="addname" id="Su">
                            </div>
                            <div>
                                <h3>address</h3>
                                <input type="text" name="addAddress" id="Su">
                            </div>
                            <div>
                                <h3>Contact Number</h3>
                                <input type="text" name="addContactNumber" id="Su">
                            </div>
                            <div>
                                <h3>Eamil Address</h3>
                                <input type="text" name="addEmail" id="Su">
                            </div>
                            <div>
                                <h3>password</h3>
                                <input type="Password" name="addpassword" id="Su">
                            </div>
                            <div>
                                <h3>Category</h3>
                                <select name="addcategory" id="sele">
                                <option value="bone" >bones</option>
                                <option value="heart">heart</option>
                                <option value="Dentistry">Dentistry</option>
                                <option value="MentalHealth">Mental Health</option>
                                <option value="Surgery">Surgery</option>
                                </select>
                            </div>
                            <div>
                            <button type="submit" name="Add"id="btns">Add Doctor</button>
                               
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="classtwo">
                <div class="deletecard">
                    <div class="title-dele">
                        <h3>Delete Doctor</h3>
                    </div>
                    <div class="deleinfo">
                    <form method="post" action="adminpage.php">
                            <div>
                                <h3>Docotr ID</h3>
                                <input type="text" name="deleteID" >
                            </div>
                            <div>
                            <button type="submit" name="Delete" id="sudele">Delete</button>
                               
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>