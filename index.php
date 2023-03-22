<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./navbar.css"/>
    <link rel="stylesheet" href="./style.css"/>
    <script src="https://code.iconify.design/2/2.2.0/iconify.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="./responsive.css"/>
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
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="./covid.php">COVID</a></li>
                <li><a href="./admin/Admin.php">Admin</a></li>
                <li><a href="./Doctor/doctorlogin.php">Doctor</a></li>
                <li><a href="./Patient/PatientLogin.php">Patient</a></li>
               
            </ul>
        </nav>
        <div class="home-back">
            
            </div>
        </section>
        <section id="Services">
            <div class="services-cards">
                <div class="servic-card">
                    <div class="services-logo">
                        <span class="iconify" id="servi-logo" data-icon="fa-solid:bed"></span>
                    </div>
                    <div class="services-info">
                        <h1>250+</h1>
                        <h3>Nurses at works</h3>
                    </div>
                </div>
                <div class="servic-card">
                    <div class="services-logo">
                        <span class="iconify" id="servi-logo" data-icon="wpf:doctors-bag"></span>
                    </div>
                    <div class="services-info">
                        <h1>120+</h1>
                        <h3>Pharmacy</h3>
                    </div>
                </div>
                <div class="servic-card">
                    <div class="services-logo">
                        <span class="iconify" id="servi-logo" data-icon="eva:people-fill"></span>
                    </div>
                    <div class="services-info">
                        <h1>200+</h1>
                        <h3>Doctors at works</h3>
                    </div>
                </div>
                <div class="servic-card">
                    <div class="services-logo">
                        <span class="iconify" id="servi-logo" data-icon="fontisto:bed-patient"></span>
                    </div>
                    <div class="services-info">
                        <h1>250+</h1>
                        <h3>Hospital beds</h3>
                    </div>
                </div>
            </div>
        </section>
        <section id="work-data">
            <div class="work-data-container">
                <div class="work-data-title">
                    <h3><font style="color: rgb(6, 175, 175);">Our</font> Services</h3>
                </div>
                <div class="work-data-section">
                    <div class="work-data-cards">
                        <div class="work-data-one">
                            <span class="iconify" id="cal" data-icon="uis:calender"></span>
                            <h3>Book an appointment</h3>
                        </div>
                        <div class="work-data-two">
                            <p>Book an appointment any time for any Doctor</p>
                            <a href="./Patient/PatientLogin.php">Learn More</a>
                        </div>
                    </div>
                    <div class="work-data-cards">
                        <div class="work-data-one">
                            <span class="iconify" id="nurse" data-icon="fontisto:nurse"></span>
                            <h3>Private Nurses</h3>
                        </div>
                        <div class="work-data-two">
                            <p>Search for a private nurse for your patients in house.</p>
                            <a href="nursedoc.php">Learn More</a>
                        </div>
                    </div>
                    <div class="work-data-cards">
                        <div class="work-data-one">
                            <span class="iconify" id="stu" data-icon="healthicons:doctor-outline"></span>
                            <h3>Training for Students</h3>
                        </div>
                        <div class="work-data-two">
                            <p>Registration For Training Students in our hospital.</p>
                            <a href="StudentReg.php">Learn More</a>
                        </div>
                    </div>
                    <div class="work-data-cards">
                        <div class="work-data-one">
                            <span class="iconify" id="workdata-logo" data-icon="fontisto:hospital"></span>
                            <h3>Medicine Courses</h3>
                        </div>
                        <div class="work-data-two">
                            <p>Medical courses from top universities and industry leaders.</p>
                            <a href="https://www.coursera.org/courses?query=medical">Learn More</a>
                        </div>
                    </div>
                    <div class="work-data-cards">
                        <div class="work-data-one">
                            <span class="iconify" id="med" data-icon="ic:twotone-medical-services"></span>
                            <h3>Medical Services</h3>
                        </div>
                        <div class="work-data-two">
                            <p> UCLA Health for medical help.</p>
                            <a href="https://www.uclahealth.org/conditions-we-treat/medical-services">Learn More</a>
                        </div>
                    </div>
                    <div class="work-data-cards">
                        <div class="work-data-one">
                            <span class="iconify" id="room" data-icon="fluent:device-meeting-room-remote-32-filled"></span>
                            <h3>Book a room</h3>
                        </div>
                        <div class="work-data-two">
                            <p>Book A room in hospital.</p>
                            <a href="ROOM.php">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="About">
            <div class="about-container">
                <div class="about-title">
                    <h1><font style="color: rgb(6, 175, 175);">About</font> Us</h1>
                </div>
                <div class="about-info">
                    <div class="about-info-one">
                        <h2>We take care of your health</h2>
                    </div>
                    <div style="height:400px;display:flex;align-items:space-around;justify-content:space-around" class="about-info-two">
                        <p style="letter-spacing: 6px;">“Faithful to our tradition, we provide the highest possible standard of care and treatment in a professional and compassionate manner to every person who avails of our services”.
    
                            Our Services is to help Peoples to Book at appointment from your house and give a private nurse for us also we making a stage for universtiy students to give them an expreinces ,we making an medince courses and free medical services.
                            To build a first class patient focused service based on high quality and evidence based practice throughout the organisation.
    To provide this service as close to the patient as possible, in a well-managed and appropriate environment.
    To promote a culture that will:
    Ensure high quality care/service is provided.
    Ensure that decisions regarding delivery of care/service are patient focused and evidence based.
    Support and invest in education and training, thereby promoting the continuous development of the workforce in order to maximise the potential of staff at all levels
                            Our goals are to Continuously improve all our services through quality management and Focus on our patients and deliver high quality service also Involve all our partners in our quality improvement activities and Empower em ployees to make appropriate decisions and Have the highest degree of respect for one another and value diversity
                            Use training, teamwork and open communication to enable all employees to achieve their full potential.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="Book">
            <div class="book-container">
                <div class="book-title">
                    <h1><font style="color: rgb(6, 175, 175);">Plogs</font></h1>
                </div>
                <div class="book-section">
                    <div class="book-card">
                        <div class="book-img">
                            <img src="photo/covid.jpg">
                        </div>
                        <div style="overflow:auto;" class="book-info">
                            <p>Coronavirus disease 2019 (COVID-19) is a contagious disease caused by severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2). The first known case was identified in Wuhan, China, in December 2019.[7] The disease has since spread worldwide, leading to an ongoing pandemic.</p>
                        </div>
                        <div class="book-btn">
                            <a href="coviddoc.php">Learn More</a>
                        </div>
                    </div>
                    <div class="book-card">
                        <div class="book-img">
                            <img src="photo/blood.jpg">
                        </div>
                        <div style="overflow:auto;" class="book-info">
                            <p>Blood banking is the process that takes place in the lab to make sure that donated blood, or blood products, are safe before they are used in blood transfusions and other medical procedures. Blood banking includes typing the blood for transfusion and testing for infectious diseases.</p>
                        </div>
                        <div class="book-btn">
                            <a href="blooddoc.php">Learn More</a>
                        </div>
                    </div>
                    <div class="book-card">
                        <div class="book-img">
                            <img src="photo/GettyImages-472291161_gnblublk.jpg">
                        </div>
                        <div style="overflow:auto;" class="book-info">
                            <p>In pharmacology, a drug is a chemical substance, typically of known structure, which, when administered to a living organism, produces a biological effect. A pharmaceutical drug, also called a medication or medicine, is a chemical substance used to treat, cure, prevent, or diagnose a disease or to promote well-being.</p>
                        </div>
                        <div class="book-btn">
                            <a href="drugdoc.php">Learn More</a>
                        </div>
                    </div>
                    <div class="book-card">
                        <div class="book-img">
                            <img src="photo/general-anesthetics-affects-human-brain.png">
                        </div>
                        <div style="overflow:auto;" class="book-info">
                            <p>There are different types of anesthetics that may be used for your surgery. The decision as to which type of anesthesia that will be used will be dependent upon your personal medical history, the type of surgery you are scheduled for, your surgeon's preference and your anesthesiologist.</p>
                        </div>
                        <div class="book-btn">
                            <a href="anesthetics.php">Learn More</a>
                        </div>
                    </div>
                    <!-- <div class="book-card"> -->
                        <!-- <div class="book-img">
                            <img src="photo/home.jpg">
                        </div> -->
                        <!-- <div class="book-info">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, inventore corporis! Dolorem error doloribus nam iusto quaerat illum maiores nihil repudiandae! Provident eum culpa commodi voluptatum tempora!.</p>
                        </div> -->
                        <!-- <div class="book-btn">
                            <a href="">Learn More</a>
                        </div> -->
                    <!-- </div> -->
                    <!-- <div class="book-card"> -->
                        <!-- <div class="book-img">
                            <img  src="photo/home.jpg">
                        </div>
                        <div class="book-info">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, inventore corporis! Dolorem error doloribus nam iusto quaerat illum maiores nihil repudiandae! Provident eum culpa commodi voluptatum tempora!.</p>
                        </div>
                        <div class="book-btn">
                            <a href="">Learn More</a>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="alert">
                <div class="alert-one">
                    <h3>Attention: Masks On!</h3>
                    <button id="close"><span class="iconify" id="close-logo" data-icon="akar-icons:circle-x-fill"></span></button>
                </div>
                <div class="alert-two">
                    <p>If you're a patient or visitor in one of our hospitals or clinics, you're required to wear a mask indoors.</p>
                </div>
            </div>
        </section>
        <script src="./covidjq.js"></script>
    </body>
    </html>