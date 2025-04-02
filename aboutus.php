
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Page</title>
    <link rel="stylesheet" href="aboutus.css">
    <link rel="icon" href="img/bcp logo.png">
   <style>
        body {
            background-image: url('img/sss.png'); 
            background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat; 
            color: white; 
        }

        .image-slots-container {
            display: flex;
            justify-content: center;
            gap: 25px;
            align-items: center;
            margin: 15px 0;
            flex-wrap: wrap; 
        }

        .image-slot {
            width: 200px;
            height: 230px;
            background-color: rgba(244, 244, 244, 0.8);
            border: 2px solid #ccc;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease; 
            text-align: center;
        }

        .image-slot:hover {
            transform: scale(1.05); 
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
            background-color: rgba(244, 244, 244, 1); 
        }

        .image-slot img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            transition: transform 0.3s ease; 
        }

        .image-slot:hover img {
            transform: scale(1.1); 
        }

        .slot-info {
            padding: 10px;
            text-align: center; 
        }

        .slot-info .name {
            font-weight: bold; 
            font-size: 16px;
            margin: 5px 0; 
            color: black; 
        }

        .slot-info .position {
            font-style: italic; 
            font-size: 14px; 
            color: #666; 
            margin: 0; 
        }
        .development-team-title {
            font-family: 'Heebo', sans-serif;
            text-align: center;
        }

        @media (max-width: 768px) {
            .image-slots-container {
                gap: 15px; 
            }

            .image-slot {
                width: 120px;
                height: 180px;
            }

            .image-slot img {
                height: 120px; 
            }

            .slot-info .name {
                font-size: 12px; 
            }

            .slot-info .position {
                font-size: 10px; 
            }
        }

        @media (max-width: 480px) {
            .image-slots-container {
                flex-direction: column; 
                align-items: center;
            }

            .image-slot {
                width: 100%; 
                max-width: 300px; 
            }
        }
</style>
</head>

<body>

    <nav>
        <div class="logo">
            <a href="index.php">BCP</a>
        </div>
        <div class="nav-links">
            <a href="index.php">Home</a>
        </div>
    </nav>
<br>
     <h1 class="development-team-title" style="margin-top: 0px;">The Development Team</h1>

<div class="image-slots-container">
<div class="image-slot">
    <img src="img/pat.jpg" alt="Slot 1">
    <div class="slot-info">
        <p class="name">Patrick Nobleza</p>
        <p class="position">Project Manager</p>
    </div>
</div>
<div class="image-slot">
    <img src="img/zar.jpg" alt="Slot 2">
    <div class="slot-info">
        <p class="name">John Nathaniel Bazar</p>
        <p class="position">Assistant Programmer</p>
    </div>
</div>
<div class="image-slot">
    <img src="img/dumo.jpg" alt="Slot 3">
    <div class="slot-info">
        <p class="name">Alexa Dumo</p>
        <p class="position">Document Specialist</p>
    </div>
</div>
<div class="image-slot">
    <img src="img/chelle.jpg" alt="Slot 4">
    <div class="slot-info">
        <p class="name">Marichelle Marilao</p>
        <p class="position">Document Specialist</p>
    </div>
</div>
<div class="image-slot">
    <img src="img/mark.jpg" alt="Slot 5">
    <div class="slot-info">
        <p class="name">Mark Baguinon</p>
        <p class="position">Network Administrator</p>
    </div>
</div>
</div>


    <div class="content">
        <div class="container">
        <img src="img/clinic.png" alt="Clinic Image">
            <div class="about">
                <h2>Clinic Management System</h2>
                <p>Schools are more than just places of learning—they are communities where health and safety matter for everyone. Clinic Management System (CMS) is built to serve students, faculty, and staff by providing seamless medical record management, early health risk detection, and real-time communication between school healthcare teams and individuals. With a focus on prevention, efficiency, and care, we empower schools to take a proactive approach to the well-being of their entire community.</p>
                <p class="email">Contact Us : bcpclinicmanagement@gmail.com</p>
            </div>
        </div>
    </div>

 

    <footer>
        <div class="socials">
            <i class='bx bxl-facebook-square'></i>
            <i class='bx bxl-instagram'></i>
            <i class='bx bxl-twitter'></i>
            <i class='bx bxl-linkedin-square'></i>
        </div>
        <p>Copyright ©2025, All rights reserved.</p>
    </footer>

</body>

</html>