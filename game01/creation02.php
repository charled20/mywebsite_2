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
    <title>Bus Manager User Portal</title>

            <!-- --------------- Main CSS --------------------->
            <link href="game.css" rel="stylesheet">

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

        <script src="../js/jquery-3.4.1.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/jquery.easing.min.js"></script>
        <script src="../js/owl.carousel.min.js"></script>
        <script src="../js/headerscript.js"></script>
        <script src="games.js"></script>


</head>
<body id="creation02-body">

   <?php include "user-ver.php";?>  <!--invoke user-ver for game account details-->
   <?php include "user-data.php";?>

    <section id="game-creation-02">
        <!-- div for topbar -->
        <div class="game-container">
            
                <!-- navbar start -->
            <nav class="game-nav-style d-flex justify-content-between">
                <img id="01" src="game-img/rb-game-logo-reduced.png" alt="" >   <p style="font-size: 18px; color: #fff; font-weight: 600;"></p>

                <div>
                    <label for="03" class="ml-3" style="font-size: 8px; color: white;">Balance</label>
                    <p id="03" href="#" style="font-size: 12px; color: white;" >Php <?php echo number_format($user_balance,2);?></p>
                </div>
                
                <div>
                    <ul class="d-flex justify-content-around">
                    
                        <div>
                            <label for="02" clsas="mx-2" style="font-size: 8px; color: white;">Company Share</label>
                            <p id="02" class="mx-2" style="font-size: 12px; color: white;"><?php echo "$user_companyShare";?></p>
                        </div>
                        
                        <div>
                            <label for="04" class="mx-2"style="font-size: 8px; color: white;">Company Name</label>
                            <p id="04" class="mx-2" style="font-size: 12px; color: white;"><?php echo "$user_company";?></p>
                        </div>

                        <a href="../userpanel.php"><button class="btn btn-success mx-2 my-2" style="height: 50px;"><?php echo "$logged_user"; ?></button></a>    
                    </ul>
                    
                </div>
            </nav> 

            <!-- navbar end -->

        </div>
        <div class="col-lg-12 col-xs-4 row">
            <!-- div for left dashboard ## start -->
            <div style="width: 200px; height: 100vh;" class="alert alert-primary">

                    <ul>
                        
                        <a id="frame-links" class="btn btn-success" href="game-iframes/iframe-01.php"  target="games_iframe">Overview</a>
                                        
                        <div class="dropdown">
                            <button class="btn btn-success dropdown-toggle" type="button" id="garageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <a id="frame-links"  href="game-iframes/iframe-02.php" target="games_iframe">Garage</a>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="garageDropdown">
                                <a class="dropdown-item" href="game-iframes/iframe-02-01.php" target="games_iframe">Bus Market</a>
                                <a class="dropdown-item" href="game-iframes/iframe-02-02.php" target="games_iframe">Bus Depot</a>
                            </div>
                        </div>

                        
                        <a class="btn btn-success my-1" id="frame-links"  href="game-iframes/iframe-03.php" target="games_iframe">Fuel</a>
                        
                    
                        <div class="dropdown my-1">
                            <button class="btn btn-success dropdown-toggle" type="button" id="maintenanceDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <a id="frame-links"  href="game-iframes/iframe-04.php" target="games_iframe">Route</a>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="maintenanceDropdown">
                                <a class="dropdown-item" href="game-iframes/iframe-04-01.php" target="games_iframe">Create</a>
                                <a class="dropdown-item" href="game-iframes/iframe-04-02.php" target="games_iframe">Delete</a>
                            </div>
                        </div>

                        <div class="dropdown my-1">
                            <button class="btn btn-success dropdown-toggle" type="button" id="maintenanceDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <a id="frame-links"  href="game-iframes/iframe-05.php" target="games_iframe">Maintenance</a>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="maintenanceDropdown">
                                <a class="dropdown-item" href="game-iframes/iframe-05-01.php" target="games_iframe">Schedule</a>
                                <a class="dropdown-item" href="game-iframes/iframe-05-02.php" target="games_iframe">Quick</a>
                            </div>
                        </div>

                        
                       
                            <a class="btn btn-success my-1" id="frame-links"  href="game-iframes/iframe-06.php" target="games_iframe">Staff</a>
                        
                       
                
                        <div class="dropdown my-1">
                            <button class="btn btn-success dropdown-toggle" type="button" id="stocksDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <a id="frame-links"  href="game-iframes/iframe-07.php" target="games_iframe">Company</a>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="stocksDropdown">
                                <a class="dropdown-item" href="game-iframes/iframe-07-01.php" target="games_iframe">Company Shares</a>
                                <a class="dropdown-item" href="game-iframes/iframe-07-02.php" target="games_iframe">Investments</a>
                            </div>
                        </div>
                    
                    </ul>                 
            </div>
            <!-- div for left dashboard ## end -->


            <!-- div for viewing panel ## start-->
            <div class="col-lg-10 col-xs-4 alert alert-secondary" >
                        <div class="bm-content">
                                <iframe frameBorder=0 height=500px width=100% src="game-iframes/iframe-01.php" name="games_iframe">
       
                        </div>
            </div>
            <!-- div for viewing panel ## end -->
        </div>
                        <?php 
                        //echo "<div class=\"col-xs-12 text-center \"> Username: $logged_user </div>";
                        ?>
                            <!-- <a class="btn btn-danger"href="php/acct-logout.php">Logout</a>
                            <a class="btn btn-success"href="game01/creation01.php">Play Game</a> -->
    </section>

</body>
</html>