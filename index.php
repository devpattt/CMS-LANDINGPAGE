<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bestlink College of the Philippines</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/bcp logo.png">
</head>
<style> 

.attraction {
    background: none; 
    padding: 110px 85px;
    color: #333; 
    margin-top: 0; 
}

.grouped-sections {
    background-image: 
        linear-gradient(to top, rgba(255, 255, 255, 0) 0%, rgb(0, 0, 0) 95%), 
        url('img/modify.png');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    padding: 20px 0;
}


.attraction .attract-items .item {
    background-color: #fff; 
    border-radius: 10px; 
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
    transition: transform 0.3s ease, box-shadow 0.3s ease; 
}

.attraction .attract-items .item:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); 
}

.attraction .attract-items .item .info h4 {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 10px;
    color: #000; 
}

.attraction .attract-items .item .info p {
    font-size: 14px;
    line-height: 1.6;
    margin-bottom: 15px;
    color: #000; 
}

.attraction .attract-items .item .info a {
    color: #007bff; 
    text-decoration: none;
    font-weight: bold;
    transition: color 0.3s ease; 
}

.attraction .attract-items .item .info a:hover {
    color: #0056b3; 
    text-decoration: underline; 
}

.about {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
    padding: 40px 20px; 
}

.about .left img {
    width: 500%; 
    max-width: 500px; 
    height: auto; 
    border-radius: 10px; 
}

.about .right {
    flex: 1; 
    padding-left: 20px; 
}

.about .right h5 {
    font-size: 50px; 
    margin-bottom: 15px;
    color: white; 
    padding: 20px; 
}

.about .right p {
    font-size: 16px; 
    line-height: 1.8;
    color: white; 
    padding: 10px 30px; 
    margin: 0; 
}
.about::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: inherit; 
    background-size: inherit;
    background-position: inherit;
    background-repeat: inherit;
    filter: blur(10px); 
    z-index: 1; 
    opacity: 0.7; 
}

.about .left,
.about .right {
    position: relative;
    z-index: 2; 
}
.about .left {
    background-color: transparent;
}

.login-link {
    position: absolute;
    top: 10px;
    right: 20px;
}

.login-link a {
    text-decoration: none;
    color: #fff; 
    font-size: 16px;
    font-weight: bold;
    padding: 5px 10px;
    border: 1px solid #333;
    border-radius: 5px;
    background-color: #333;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.login-link a:hover {
    background-color: #555; 
    color: #fff; 
}

footer {
    background-color: transparent !important; 
    color: #fff; 
    box-shadow: none; 
}

footer::before,
footer::after {
    content: '';
    background-color: transparent !important; 
}

@media (max-width: 768px) {
    .attraction .attract-items .item {
        flex: 1 1 calc(50% - 20px);
    }
}

@media (max-width: 480px) {
    .attraction .attract-items .item {
        flex: 1 1 100%; 
        margin: 10px 0; 
    }
}

</style>
<body>
    <header>
        <div class="logo">BCP</div>
        <ul class="menu">
        <li><a href="#list">Home</a></li>
           <!--  <li><a href="#about">About</a></li>
            <li><a href="#att">More</a></li>-->
            <a href="aboutus.php">About us</a>
        </ul>
            <div class="login-link">
                <a href="../index2.php">Log-in</a>
             </div>
    </header>

    <!-- slider -->
    <div class="slider">
        <!-- list Items -->
        <div class="list">
            <div class="item active">
                <img src="img/earth.png">
                <div class="content">   
                    <p>Bestlink College of the Philippines</p>
                    <h2>Clinic Management System</h2>
                    <p>
                    Clinic Management System (CMS) is designed to make school healthcare more personal and efficient. 
                    By streamlining administrative tasks, it allows healthcare staff to focus more on caring for students.
                    </p>
                </div>
            </div>
            <div class="item">
            <img src="img/earth.png">
                <div class="content">
                    <p>Bestlink College of the Philippines</p>
                    <h2>Vision</h2>
                    <p>
                    To revolutionize school healthcare by providing an intuitive and comprehensive Clinic Management System that empowers 
                    medical staff, enhances student well-being, and fosters a healthier educational environment.
                    </p>
                </div>
            </div>
            <div class="item">
            <img src="img/earth.png">
                <div class="content">
                    <p>Bestlink College of the Philippines</p>
                    <h2>Mission</h2>
                    <p>                
                    Our mission is to deliver a user-friendly, secure, and efficient platform for school clinics to manage medical 
                    records, monitor patient visits, and track health trends. By integrating AI-powered anomaly detection, medical 
                    supply tracking, and data visualization, we aim to streamline administrative tasks, ensure timely interventions, 
                    and support proactive healthcare decisions, ultimately contributing to the overall health and success of students.
                    </p>
                </div>
            </div>
           
            
        </div>
        <!-- button arrows -->
        <div class="arrows">
            <button id="prev"><</button>
            <button id="next">></button>
        </div>
        <!-- thumbnail -->
        <div class="thumbnail">
            <div class="item active">   
            <img src="img/black.png">
                <div class="content">
                CMS
                </div>
            </div>
            <div class="item">
            <img src="img/black.png">
                <div class="content">
                Vision
                </div>
            </div>
            <div class="item">
            <img src="img/black.png">
                <div class="content">
                Mission
                </div>
            </div>
        </div>
    </div>


    <div class="grouped-sections">
    <div class="about" id="about">
        <div class="left">
            <img src="img/aaa.webp">
        </div>
        <div class="right">
            <h5>Clinic Management System</h5>
            <p>The implementation of the Clinic Management System (CMS) has significantly enhanced the efficiency, organization, 
                and data-driven capabilities of the clinic, effectively improving the quality of healthcare services provided to students. 
                By automating record-keeping, the system has minimized errors, streamlined data entry, and ensured quick access to accurate 
                medical information, allowing clinic staff to focus more on patient care.</p>
        </div>
    </div>
    <div class="attraction" id="att">
        <div class="header">
            <div class="info">
                <h5>View More</h5>
            </div>
        </div>

        <div class="attract-items">
            <div class="item">
                <img src="img/red.png">
                <div class="info">
                    <h4>Importance of adopting AI in CMS</h4>
                    <p>
                    Adopting AI in our system enhances efficiency, accuracy, and decision-making by automating processes, detecting anomalies, and predicting potential issues. It improves data analysis, streamlines operations, and provides valuable insights, ultimately leading to better performance and proactive problem-solving.
                    </p>
                    <a href="https://www.youtube.com/watch?v=reUZRyXxUs4">View in Youtube <i class='bx bx-link-external'></i></a>
                </div>
            </div>
            <div class="item">
                <img src="img/1111.png">
                <div class="info">
                    <h4>Early Detection and Preventions</h4>
                    <p>       
                    Early detection and prevention are crucial in reducing risks, improving outcomes, and minimizing costs. Identifying issues at an early stage allows for timely intervention, preventing complications and ensuring better health, safety, and efficiency. Proactive measures help avoid emergencies and enhance overall well-being.
                    </p>
                    <a href="https://www.youtube.com/watch?v=AYqaQyYYqVo">View in Youtube <i class='bx bx-link-external'></i></a>
                </div>
            </div>
            <div class="item">
                <img src="img/7.png">
                <div class="info">
                    <h4>The Importance of Health in Every Student</h4>
                    <p>
                    The health and well-being of every student are vital for their academic success and personal development. When students are physically
                     and mentally healthy and perform well academically. A strong foundation in health emotional resilience,
                    fostering a positive school environment and future opportunities.
                    </p>
                    <a href="https://www.youtube.com/watch?v=YYaU38B7LzU">View in Youtube <i class='bx bx-link-external'></i></a>
                </div>
            </div>
        </div>
    </div>
    <footer>
    <h5>Bestlink College of the Philippines</h5>
        <div class="top">
            <div class="social-links">
                <a href="#"><i class='bx bxl-facebook'></i></a>
                <a href="#"><i class='bx bxl-instagram'></i></a>
                <a href="#"><i class='bx bxl-twitter'></i></a>
                <a href="#"><i class='bx bxl-linkedin-square'></i></a>
            </div>
        </div>
        <div class="separator"></div>
        <div class="bottom">
            <div class="links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
                <a href="#">Cookies Setting</a>
            </div>
        </div>
    </footer>

</div>
    <script src="script.js"></script>
</body>
</html>