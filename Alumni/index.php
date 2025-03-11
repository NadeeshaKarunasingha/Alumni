<!DOCTYPE html>
<html>
    <head>
        <!-- <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title>Alumni of NIIBS</title>
        <link rel="stylesheet" href="AlumniNIIBS.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css"> -->

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
        <section class="header">
         <nav>
            <a href="index.html"></a>
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
                    <li><a href="Retrieve.php">LOGIN</a></li>
                </ul>
            </div>
            <!-- menu bar in small device(small screen ex: phone ) viewer-->
            <i class="fa fa-bars" onclick="showMenu()"></i>
            <!-------------------------------------------------------------->

         </nav>

         <div class="text-box">
            <h1>Welcome To SICT Students Alumni</h1>
            <p>.............................................</p>
            <a href="" class="hero-btn">Visit Us To know More</a>
         </div>
        </section>
        <br><br><br><br>

         <!------------------ campus ------------------------------------------>

         <section class="campus">
            <h1>Our Campus</h1>
            <p> "Nāgānanda International Institute for Buddhist Studies intents on educating, inspiring and preparing students to engage in global human health, 
                cultural and social well-being with continuously lifelong learning, critical thinking, 
                personal accomplishments and teamwork spirit. This is a degree awarding institute recognized by 
                the government of Sri Lanka under the provisions of the Universities Act No.16 of 1978."</p>

            <div class="row">
                <div class="campus-col">
                    <img src="img/images (1).jpeg">
                    <div class="layer">
                        <h3>Enterence</h3>
                    </div>
                </div>
                <div class="campus-col">
                    <img src="img/DSC04357-1024x683.webp">
                    <div class="layer">
                        <h3>Graduation</h3>
                    </div>
                </div>
                <div class="campus-col">
                    <img src="img/images.jpeg">
                    <div class="layer">
                        <h3>lecter hall</h3>
                    </div>
                </div>
            </div>

        </section>


        <!-------------------- committe members ------------------------------------>
        <section class="committe">
            <h1>Our Committee Members</h1>
            <div class="row">
                <div class="committe-col">
                    <img src="img/pngtree-avatar-icon-profile-icon-member-login-vector-isolated-png-image_1978396.jpg" alt="President">
                    <h3>President</h3>
                    <p>Mr.Jayasinghe</p>
                </div>
                <div class="committe-col">
                    <img src="img/pngtree-avatar-icon-profile-icon-member-login-vector-isolated-png-image_1978396.jpg" alt="Secretary">
                    <h3>Secretary</h3>
                    <p>Miss.Amali perera</p>
                </div>
                <div class="committe-col">
                    <img src="img/pngtree-avatar-icon-profile-icon-member-login-vector-isolated-png-image_1978396.jpg" alt="Treasurer">
                    <h3>Treasurer</h3>
                    <p>Mrs.Sandali</p>
                </div>
                <div class="committe-col">
                    <img src="img/pngtree-avatar-icon-profile-icon-member-login-vector-isolated-png-image_1978396.jpg" alt="Auditor">
                    <h3>Auditor</h3>
                    <p>Mr.Thilanka </p>
                </div>
            </div>
        </section>


        
         <!-- Noticeboard Section -->
<section class="noticeboard">
    <h1>Noticeboard</h1>
    <div class="notices">
        <div class="notice-item">
            <h3>Annual trip</h3>
            <p>Date: 12 jan 2025
                Destination: Nuwara Eliya
                Registration Deadline: 31 Dec 2024</p>
            <p class="date">Published on: 11 dec 2024</p>
        </div>
        <div class="notice-item">
            <h3>board meeting</h3>
            <p>Date: 28 Dec 2024
                Time: 1.00 pm
                Venue: Lab 5 at NIIBS</p>
            <p class="date">Published on: 20 Dec 2024</p>
        </div>
        <div class="notice-item">
            <h3>open day</h3>
            <p>Date: 10 Nov 2024
                Time: 9.00 am
                Venue: auditorium</p>
            <p class="date">Published on: 15 oct 2024</p>
        </div>
    </div>
</section>
        
 <!---------------- call to Action-------------------------------------->

<section class="cta">
    <h1>"Join Our Alumni Network!"</h1>
    <a href="register.php"  class="hero-btn">REGISTER</a>


</section>


       <?php
        include ('footer.php');
        ?>