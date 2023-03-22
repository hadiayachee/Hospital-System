<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style><?php include 'C:/xampp/htdocs/coviddoc.css'; ?></style>


    <link rel="stylesheet" href="./coviddoc.css"/>
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

        <div class="covid-header">
            <div class="covid-intro">
                <div class="covid-structure">
                    <div class="covid-struc-title">
                        <h1> <span class="iconify" data-icon="fa6-solid:virus-covid"></span>Covid-19</h1>
                    </div>
                    <div class="covid-struc-parg">
                        <p>Coronavirus disease 2019 (COVID-19) is a contagious disease caused by severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2). The first known case was identified in Wuhan, China, in December 2019.[7] The disease has since spread worldwide, leading to an ongoing pandemic.[8] Symptoms of COVID‑19 are variable, but often include fever,[9] cough, headache,[10] fatigue, breathing difficulties, loss of smell, and loss of taste.[11][12][13] Symptoms may begin one to fourteen days after exposure to the virus. At least a third of people who are infected do not develop noticeable symptoms.[14] Of those people who develop symptoms noticeable enough to be classed as patients, most (81%) develop mild to moderate symptoms (up to mild pneumonia), while 14% develop severe symptoms (dyspnea, hypoxia, or more than 50% lung involvement on imaging), and 5% suffer critical symptoms (respiratory failure, shock, or multiorgan dysfunction).[15] Older people are at a higher risk of developing severe symptoms. Some people continue to experience a range of effects (long COVID) for months after recovery, and damage to organs has been observed. Multi-year studies are underway to further investigate the long-term effects of the disease.
                        </p>
                    </div>
                </div>
                <div class="covid-img">
                    <img src="photo/covid.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="Posters">
        <div class="gallery">
            <div class="cards-one">
                    <!-- <img src="./home.jpg"> -->
                <div class="overview">
                    <div class="overview-title">
                    <h3>Preventive measures</h3>
                    </div>
                    <div  class="overview-p">
                        <p>Preventive measures to reduce the chances of infection include getting vaccinated,
                            staying at home, wearing a mask in public, avoiding crowded places, keeping distance from others,
                             ventilating indoor spaces, managing potential exposure durations,
                              washing hands with soap and water often and for at least twenty seconds, 
                           practising good respiratory hygiene, and avoiding touching the eyes, nose, or mouth with unwashed hands.</p>
                    </div>
                </div>
            </div>
            <div class="cards-two">
                <div class="overview">
                    <div class="overview-title">
                        <h3>A COVID‑19 vaccine</h3>
                    </div>
                    <div style="overflow:auto;" class="overview-p">
                        <p>A COVID‑19 vaccine is a vaccine intended to provide acquired immunity against severe acute respiratory syndrome coronavirus 2 (SARS‑CoV‑2), the virus that causes coronavirus disease 2019 (COVID‑19).

                            Prior to the COVID‑19 pandemic, an established body of knowledge existed about the structure
                             and function of coronaviruses causing diseases like severe acute respiratory syndrome
                              (SARS) and Middle East respiratory syndrome (MERS). This knowledge accelerated the development of various vaccine platforms 
                              during early 2020.</p>
                    </div>
                </div>
            </div>
            <div class="cards-three">
                <div class="overview">
                    <div class="overview-title">
                        <h3>Masks</h3>
                    </div>
                    <div class="overview-p">
                        <p>Masks are also strongly recommended for those who may have been infected and those taking care of someone
                            who may have the disease.
                             When not wearing a mask, the CDC recommends covering the mouth and nose with a tissue when coughing or
                              sneezing and recommends using the inside of the elbow if no tissue is available. Proper hand hygiene after 
                              any cough or sneeze is encouraged. Healthcare professionals interacting directly with people who have COVID‑19 are advised to
                            use respirators at least as protective as NIOSH-certified N95 or equivalent, in addition to other personal protective equipment.</p>
                    </div>
                </div>
            </div>
            <div class="cards-four">
                <div class="overview">
                    <div class="overview-title">
                        <h3>Hand Hygiene</h3>
                    </div>
                    <div class="overview-p">
                        <p>Thorough hand hygiene after any cough or sneeze is required.
                            The WHO also recommends that individuals wash hands often with soap and water for at least twenty seconds,
                             especially after going to the toilet or when hands are visibly dirty,
                              before eating and after blowing one's nose. When soap and water are not available,
                               the CDC recommends using an alcohol-based hand sanitiser with at least 60% alcohol.
                                For areas where commercial hand sanitisers are not readily available.</p>
                    </div>
                </div>
            </div>
            <div class="cards-five">
                <div class="overview">
                    <div class="overview-title">
                        <h3>Self-isolation</h3>
                    </div>
                    <div class="overview-p">
                        <p>Self-isolation at home has been recommended for those diagnosed with COVID‑19 and
                            those who suspect they have been infected. Health agencies have issued detailed instructions for proper self-isolation.
                            Many governments have mandated or recommended self-quarantine for entire populations. The strongest self-quarantine
                             instructions have been issued to those in high-risk groups.
                              Those who may have been exposed to someone with COVID‑19 and those who have recently travelled to a country.
                          </p>
                    </div>
                </div>
            </div>
            <div class="cards-six">
                <div class="overview">
                    <div class="overview-title">
                        <h3>Healthy</h3>
                    </div>
                    <div class="overview-p">
                        <p>The Harvard T.H. Chan School of Public Health recommends a healthy diet, being physically active, managing psychological stress, and getting enough sleep.[211]

                            Consistently meeting scientific guidelines of 150+ minutes per week of exercise or similar physical activity was shown to be associated with a smaller risk of hospitalisation and death due to COVID‑19, even when considering likely risk factors such as elevated Body mass index (BMI).
                            
                           </p>
                    </div>
                </div>
            </div>
        </div>
</section>
</body>
</html>