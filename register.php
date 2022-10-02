<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>

        <!-- --------------- Main CSS --------------------->
        <link href="css/main.css" rel="stylesheet">

        <!-- -------------- Bootstrap ----------------------->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- -------------- AOS ----------------------->
        <link href="css/aos.css" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <!-- -------------- OWL ----------------------->
        <link href="css/owl.carousel.min.css" rel="stylesheet">

        <!-- --------------- Open Sans Font --------------------->
        <!-- <link href="font/OpenSans-Regular.ttf" rel="stylesheet"> -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">


        <!-- --------------- Favicon --------------------->
        <?php include "php/favicon.php"; ?>

</head>
<body class="reg-body">

    <section id="registration-style">
            <div class="col-lg-12 d-flex justify-content-center">
                <div class="registration-panel col-lg-8">
                    <div class="reg-topbar"></div>
                    <div class="registration-core align-items-center col-lg-6">
                    <form action="" method="post">
                        <div>
                                <h3 class="text-center">Create Account</h3>
                                <input type="text" class="form-control" id="username" placeholder="username">
                                <input type="password" class="form-control" id="password" placeholder="********">
                                <input type="password" class="form-control" id="confirmPassword" placeholder="********">
                                <input type="email" class="form-control" id="email-acct" placeholder="sample@email.com">    
                        </div>
                    
                    <hr class="my-3">
                        <div class="row justify-content-end">
                            <button class="btn btn-secondary reg-button"><a href="main.php">Back</a></button>
                            <button class="btn btn-primary reg-button" type="submit" id="register-btn">Register</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
    </section>

        
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/headerscript.js"></script>
        <script src="js/register.js"></script>
        
    
</body>
</html>