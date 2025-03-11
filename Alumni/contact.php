<!DOCTYPE html>
<html>
    <head>
        
        <!-- <meta charset="UTF-8">
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title>Alumni of NIIBS</title>
        <link rel="stylesheet" href="AlumniNIIBS.css">
         -->

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
         <h1> Contact us </h1>

        </section>

        <!--  -->

        <section class="contact-section">
            <div class="contact-container">
                <h1>Contact Us</h1>
                <p>We’d love to hear from you! Please reach out if you have any questions or need assistance.</p>
                
                <div class="contact-form">
                    <form action="#" method="POST">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter your name" required>
                        
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email" required>
                        
                        <label for="message">Your Message</label>
                        <textarea id="message" name="message" placeholder="Write your message here" rows="5" required></textarea>
                        
                        <button type="submit" class="submit-btn">Send Message</button>
                    </form>
                </div>
            </div>
        </section>
        
        <?php
        include ('footer.php');
        ?>