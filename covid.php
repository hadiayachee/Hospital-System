<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="./covid.css"/>
    <link rel="stylesheet" href="./navbar.css"/>
    <title>Document</title>
</head>
<body>
    <section id="CovidHome">
        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fa-solid fa-bars"></i>
            </label>
            <label class="logo">Hospital</label>
            <ul>
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="./covid.php">COVID</a></li>
                <li><a href="./admin/Admin.php">Admin</a></li>
                <li><a href="./Doctor/doctorlogin.php">Doctor</a></li>
                <li><a href="./Patient/PatientLogin.php">Patient</a></li>
               
            </ul>
        </nav>
        <div class="covidlive">
            <div class="covid-box">
                <div class="part-one">
                    <div class="part-title">
                        <h1>Total-Cases</h1>
                    </div>
                    <div class="part-data">
                        <h2 class="cases">0</h2>
                    </div>
                </div>
                <div class="part-two">
                    <div class="part-title">
                        <h1>Total-death</h1>
                    </div>
                    <div class="part-data">
                        <h2 class="deaths">0</h2>
                    </div>
                </div>
                <div class="part-three">
                    <div class="part-title">
                        <h1>Total-Recoverd</h1>
                    </div>
                    <div class="part-data">
                        <h2 class="recover">0</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="searchcovid">
        <div class="search-box">
            <div class="search-title">
                <input type="text" class="search" placeholder="Enter your country...">
            </div>
            <div class="search-cards">
                <div class="search-card">
                    <div class="seti">
                        <h3>Code</h3>
                    </div>
                    <div class="sevalue">
                        <h1 class="Code">0</h1>
                    </div>
                </div>
                <div class="search-card">
                    <div class="seti">
                        <h3>New-Confirmed</h3>
                    </div>
                    <div class="sevalue">
                        <h1 class="conf">0</h1>
                    </div>
                </div>
                <div class="search-card">
                    <div class="seti">
                        <h3>New-Deaths</h3>
                    </div>
                    <div class="sevalue">
                        <h1 class="dea">0</h1>
                    </div>
                </div>
                <div class="search-card">
                    <div class="seti">
                        <h3>New-Recover</h3>
                    </div>
                    <div class="sevalue">
                        <h1 class="rec">0</h1>
                    </div>
                </div>
                <div class="search-card">
                    <div class="seti">
                        <h3>Population</h3>
                    </div>
                    <div class="sevalue">
                        <h1 class="population">0</h1>
                    </div>
                </div>
                <div class="search-card">
                    <div class="seti">
                        <h3>Continent</h3>
                    </div>
                    <div class="sevalue">
                        <h1 class="continent">0</h1>
                    </div>
                </div>
                <div class="search-card">
                    <div class="seti">
                        <h3>long</h3>
                    </div>
                    <div class="sevalue">
                        <h1 class="long">0</h1>
                    </div>
                </div>
                <div class="search-card">
                    <div class="seti">
                        <h3>Location</h3>
                    </div>
                    <div class="sevalue">
                        <h1 class="Loca">0</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>



<!-- <script src="./covid.js"></script> -->
<script src="./covidjq.js"></script>
</body>
</html>