<!DOCTYPE html>
<html>
    <head>
        
        <!-- <meta charset="UTF-8">
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title>Alumni of NIIBS</title>
        <link rel="stylesheet" href="AlumniNIIBS.css"> -->

        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni of NIIBS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="AlumniNIIBS.css">
   


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        function showMenu() {
            document.getElementById("nav-links").style.right = "0";
        }

        function hideMenu() {
            document.getElementById("nav-links").style.right = "-200px";
        }
    </script>
       
    </head>

    <body>
        <section class="sub-header">
         <nav>
            <!-- <a href="index.html"><img src="img/favicon.png"></a> -->
            <div class="nav-links" id="nav-links">
                <!--  closing tag for small device(small screen ex: phone ) viewer -->
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <!------------------------------------------------------------------->
                <ul>
                <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="events.php">EVENTS</a></li>
                    <li><a href="contact.php">CONTACT US</a></li>
                    <li><a href="register.php">REGISTER</a></li>
                </ul>
            </div>
            <!-- menu bar in small device(small screen ex: phone ) viewer-->
            <i class="fa fa-bars" onclick="showMenu()"></i>
            <!-------------------------------------------------------------->

         </nav>
         <h1> About US</h1>

        </section>

        <!--------------about us content----------------------------------->
       
        <section class="about-us">
            <div class="row">
                <div class="about-col">
                    <h1>Nagananda International Institute for Buddhist Studies</h1>
                    <p>NIIBS is a degree-awarding institute recognized by the Government of Sri Lanka under the provisions of
                        the Universities Act No.16 of 1978. NIIBS aspires to the development, protection, and dissemination of Buddhist culture.<br><br>
                        NIIBS intends on educating, inspiring, and preparing students to engage in global human health,
                        cultural and social well-being with continuously lifelong learning, critical thinking, personal accomplishments, and teamwork spirit.</p><br><br>
                    <h1>Our Vision</h1>
                    <img src="img/mission-vision-values-web-page-260n.jpg" alt="Our Vision">
                    <p>To be a centre of excellence in creating and dissemination of knowledge in Information Communication Technology.</p><br><br>
                    <h1>Our Mission</h1>
                    <img src="img/mission-vision-values-web-page-260nw-1534864916.jpg" alt="Our Mission">
                    <p>To advance and disseminate knowledge for creating a knowledge economy through Information Communication Technology
                        professionals with innovative and entrepreneurial skills that will best serve the global village.</p><br><br>
                    <a href="https://www.youtube.com/watch?v=f3bJ0QZrleA&pp=ygUFbmlpYnM%3D" class="hero-btn red-btn">EXPLORE NOW</a><br><br>
                </div><br><br>
                <div class="about-col">
                    <video src="img/Nāgānanda International Institute for Buddhist Studies  NIIBS  2023.mp4" controls></video>
                </div>
            </div>
           
        </section>

        <?php
        include ('footer.php');
        ?>