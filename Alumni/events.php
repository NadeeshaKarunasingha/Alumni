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
         <h1> Events</h1>

        </section>

        <!--  -->
        <section class="container my-5">
            <!-- <h2 class="text-center mb-4">Upcoming Events</h2><br><br> --><br><br>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <!-- Event 1 -->
                <div class="col">
                    <div class="card event-card">
                        <img src="img/DSC08965-scaled.webp" class="card-img-top" alt="Event 1">
                        <div class="card-body">
                            <h5 class="card-title">Sinhala And Tamil new year Celebration</h5>
                            <p class="card-text">The activities of the event commenced with traditional Avurudu rituals, including lighting the oil lamp and sharing Avurudu 
                                sweetmeats and followed by a series of traditional Avurudu games which added an unforgettable experience for all the participants. 
                                Also, the event which comprised various games and colourful activities created a delightful festive mood as the staff members and Students indulged in the joy of Avurudu.</p>
                            <a href="https://niibs.lk/iduwara-2024-thovil-pole-awurudda/" class="btn btn-primary">See More</a><br><br>
                        </div>
                    </div>
                </div><br><br><br><br>
                <!-- Event 2 -->
                <div class="col">
                    <div class="card event-card">
                        <img src="img/1705304909061.jpeg" class="card-img-top" alt="Event 2">
                        <div class="card-body">
                            <h5 class="card-title">Inaugural meeting in Cyber Crew of SICT</h5>
                            <p class="card-text">The "Cyber Crew of SICT" inaugural meeting was held on the 14th of January 2024 at NIIBS premises, located in Manelwatta, Bollegala, 
                                Kelaniya. The Cyber Crew of SICT aimed to support students in their quest of being a significant IT Professional.
        
                                Attendees discussed the objectives, mission and future plans of the Cyber Crew of SICT, 
                                emphasizing the importance of collaboration and knowledge-sharing within the rapidly evolving field of Information Technology.</p>
                            <a href="https://www.linkedin.com/posts/cybercrewsict_cybercrewofsict-niibs-sict-activity-7157590858744127488--WW5?utm_source=share&utm_medium=member_desktop" class="btn btn-primary">See More</a><br><br>
                        </div>
                    </div>
                </div><br><br><br><br>
                <!-- Event 3 -->
                <div class="col">
                    <div class="card event-card">
                        <img src="img/DO7A3685.webp" class="card-img-top" alt="Event 3">
                        <div class="card-body">
                            <h5 class="card-title">Open Day</h5>
                            <p class="card-text">The eagerly anticipated NIIBS Open Day unfolded with resounding success on October 2nd, 2023. The event offered a remarkable
                                insight into the institution’s offerings, garnering enthusiastic participation from prospective Students, Parents and curious visitors. 
                                It was a day filled with informative sessions, campus tours and the chance to engage with our dedicated Faculties. Thank you to all who 
                                joined us to make this “Open Day” a thriving memorable occasion and Special thanks to our Chief Guests.</p>
                            <a href="https://niibs.lk/niibs-open-day-2023-3/" class="btn btn-primary">See More</a><br><br>
                        </div>
                    </div>
                </div>
            </div><br><br>
        </section>


        <?php
        include ('footer.php');
        ?>