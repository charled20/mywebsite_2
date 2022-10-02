
<?php  
session_start();
$logged_user = $_SESSION['username'];
//var_dump($_SESSION);

//creates tanginang query to the db to check for ACCOUNT + GAME ID
$con = mysqli_connect("localhost","root","","rusty_db_01");

if(isset($_SESSION["username"])){
    $query = "SELECT '(bm_id)' FROM `game_accounts` WHERE bm_user='$logged_user'";
    $result = mysqli_query($con,$query) or die(mysql_error());
    $game_id = mysqli_num_rows($result);
    //if game id and session is not null -- transfer to creation02
    if(($game_id && $logged_user) != null){
        header("Location: creation02.php");
    }
}
else{
    session_unset();
    session_destroy();
    header("Location: main.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Your Bus Company</title>

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


            <!-- --------------- Favicon --------------------->
            <?php include "../php/favicon.php"; ?>

</head>
<body id="bs-mgr-body">

    <section id="registration-style">
            <div class="col-lg-12 d-flex justify-content-center">
                <div class="registration-panel col-lg-12">

                    <div class="reg-topbar text-right">
                        <?php 

                        echo "
                        <div class=\"row d-flex justify-content-between col-lg-12 col-xs-4 game-topbar\"> <a class=\"btn btn-danger\" href=\"/mywebsite2/userpanel.php\">USERPANEL</a><input class=\"col-xs-1\" type=\"text\" id=\"bm-user\" value=\"$logged_user\" disabled>  </div>
                        ";
                        ?>
                    </div>

                    <div class="registration-core align-items-center col-lg-4">
                    <form action="" method="post">
                        <div class="bs-mgr-panel">
                                <h4 class="text-center bs-mgr-h4">Bus Manager PH</h4>
                                <p style="font-size: 11px;">v1.1103</p>
                                <input type="text" class="text-center form-control bs-mgr-txt01"  placeholder="Enter Company Name" id="comp-name"> 
                                
                                <select class="form-control" name="region-list" id="region-list">
                                    <option value="01">Select Region</option>
                                    <option value="Caraga Region">Caraga Region</option>
                                </select>

                                <select class="form-control" name="city-list" id="city-list">
                                    <option value="01">Select Founding City</option>
                                    <option value="Butuan City">Butuan City</option>
                                </select>

                                <select class="form-control" name="lang-list" id="lang-list">
                                    <option value="English (Default)">English (Default)</option>
                                </select>   
                        </div>
                    
                    <hr class="my-3">
                        <div class="container">
                            <button class="btn btn-success reg-button col-lg-12 col-xs-4" type="submit" id="start-btn" ><a href="creation02.php">Start Game</a></button>
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
        <script src="../js/jquery-3.4.1.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/jquery.easing.min.js"></script>
        <script src="../js/owl.carousel.min.js"></script>
        <script src="../js/headerscript.js"></script>
        <script src="../js/register.js"></script>
        
</body>
</html>