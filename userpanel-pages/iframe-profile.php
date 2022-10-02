<?php 
session_start();
$logged_user = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

                <!-- --------------- Main CSS --------------------->
                <link href="../css/main.css" rel="stylesheet">

                <!-- -------------- Bootstrap ----------------------->
                <link href="../css/bootstrap.min.css" rel="stylesheet">

                <!-- -------------- AOS ----------------------->
                <link href="../css/aos.css" rel="stylesheet">
                <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

                <!-- -------------- OWL ----------------------->
                <link href="../css/owl.carousel.min.css" rel="stylesheet">

                <!-- --------------- Open Sans Font --------------------->
                <!-- <link href="font/OpenSans-Regular.ttf" rel="stylesheet"> -->
                <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">



</head>
<body>
                        <div class="container mt-2" data-aos="fade-up" data-aos-duration="1000">
                            <div>
                                <div id="dboard-1" class="row">
                                    <div id="dboard-2" class="col-sm-8">
                                    
                                    </div>
                                    <div id="dboard-2" class="col-sm-4 mt-3 mb-3">
                                        <!-- displays login history -->
                                        <?php include "../php/login-display.php"?>
                                        <!-- displays login history --> 
                                    </div>
                                </div>
                            </div>
                        </div>

             
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        <script src="../js/jquery-3.4.1.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/jquery.easing.min.js"></script>
        <script src="../js/owl.carousel.min.js"></script>
        <script src="../js/headerscript.js"></script>
        
</body>
</html>