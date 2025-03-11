<!DOCTYPE html>
<html lang="en">

<head>
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
            <div class="nav-links" id="nav-links">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="events.php">EVENTS</a></li>
                    <li><a href="contact.php">CONTACT US</a></li>
                    <li><a href="register.php">REGISTER</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h2>REGISTER NOW</h2>
    </section>

    <section class="register-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="register-container">
                        <h1 class="text-center">Register</h1>
                        <p class="text-center">Fill in the details to register for our programs.</p>
                        <form action="Registers.php" method="POST" onsubmit="return validateForm()">
                            <div class="mb-3">
                                <label for="fullname" class="form-label">Full Name</label>
                                <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Enter your full name" pattern="[A-Za-z\s]+" title="Only letters and spaces are allowed" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" id="address" name="address" class="form-control" placeholder="Enter your address" required>
                            </div>
                            <div class="mb-3">
                                <label for="contact" class="form-label">Contact Number</label>
                                <input type="tel" id="contact" name="contact" class="form-control" placeholder="Enter your contact number" pattern="[0-9]{10}" title="Enter a valid 10-digit contact number" required>
                            </div>
                            <div class="mb-3">
                                <label for="graduation-year" class="form-label">Graduation Year</label>
                                <input type="number" id="graduation-year" name="graduation-year" class="form-control" placeholder="Enter your graduation year" min="1900" max="2099" required>
                            </div>
                            <div class="mb-3">
                                <label for="degree" class="form-label">Degree Program</label>
                                <input type="text" id="degree" name="degree" class="form-control" placeholder="Enter your degree program" required>
                            </div>
                            <button type="submit" class="btn w-100" style="background-color: #007bff; color: #ffffff; border: none; padding: 10px 15px; border-radius: 5px; font-size: 16px; transition: background-color 0.3s ease;" 
    onmouseover="this.style.backgroundColor='#0056b3'" 
    onmouseout="this.style.backgroundColor='#007bff'">
    Register
</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include('footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>