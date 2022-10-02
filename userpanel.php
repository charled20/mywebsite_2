<?php  
session_start();
$logged_user = $_SESSION['username'];
//var_dump($_SESSION);

if(isset($logged_user)==null){
  header("Location: main.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Panel</title>

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
<body id="userpanel-body">
        <section id="userpanel">
            <div class="container-fluid">
                <div id="header-topbar"></div>
                <div class="header-user">
                    <div>
                        <div class="user-dashboard justify-content-around">
                            <h4 style="color:red" class="mb-4 text-center"><b>RUSTYDEVS</b></h4>
                            <hr>
                        <?php 
                        echo "<div class=\"col-xs-12 text-center \" style=\"font-size: 13px;\"> <b>USERNAME:</b> <font style=\"color:blue; font-size: 13px;\">$logged_user </font></div>";
                        ?>
                        <hr>
                                <div class="col-md-12 text-left">
                                    <a id="dashboard-opt2" class="ml-4"  href="game01/creation01.php"><b>Play Game</b></a>
                                    <br><br><a id="dashboard-opt2"  class="ml-4" href="#">Option 1</a>
                                    <br><br><a id="dashboard-opt2" class="ml-4" href="#">Option 2</a>
                                    <hr>
                                    <a id="dashboard-opt" class="ml-4" href="php/acct-logout.php"><b>Logout</b></a>
                                </div>
                            </div>
                        <div class="user-menubar">
                                
                        </div>
                    </div>
                    
                    <div class="panel-content">
                            <iframe frameBorder=0 height=500px width=100% src="userpanel-pages/iframe-profile.php" name="accounts_iframe">
                            

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
        
</body>
</html>