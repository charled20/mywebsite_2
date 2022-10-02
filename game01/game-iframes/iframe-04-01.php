<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I-Frame 04-01</title>

    <link href="../game.css" rel="stylesheet">

</head>
<body>
<?php include "../user-data.php";?>
    <div>
        <div>
            <div>

                <div class="bx-style">
                    <div class="bx-title">Route Bus</div>
                        <table>
                            <tr>
                                <td>Available Bus</td>
                                <td><?php echo "$user_bus_total";?></td>
                            </tr>
                        </table>
                </div>

                <select style ="margin-top: 10px;" name="bus" id="bus">
                    <option value="bus1">bus1</option>
                    <option value="bus2">bus2</option>
                    <option value="bus3">bus3</option>
                    <option value="bus4">bus4</option>
                </select>

                <select style ="margin-top: 10px;" name="destination" id="destination" onchange="destination()">
                    <option value="Select Destination">Select Destination</option>
                    <option value="1">Bayugan City</option>
                    <option value="2">Cagayan de Oro City</option>
                    <option value="3">Gingoog City</option>
                    <option value="4">Iligan City</option>
                    <option value="5">Marawi City</option>
                    <option value="6">Prosperidad</option>
                    <option value="7">Surigao City</option>
                    <option value="8">Tandag City</option>
                </select>

                <button>Create Route</button>

                <!-- <div class="bx-style">
                    <div class="bx-title">Current Route</div>
                        <table>
                            <tr>
                                <td>Fleet Bus</td>
                                <td>Destination</td>
                                <td>Time Left</td>
                            </tr>
                            <tr>
                                <td>King Long</td>
                                <td>Cagayan de Oro</td>
                                <td>03:43:14</td>
                            </tr>
                            <tr>
                                <td>Hino</td>
                                <td>Surigao City</td>
                                <td>02:31:09</td>
                            </tr>
                            <tr>
                                <td>Isuzu</td>
                                <td>Davao City</td>
                                <td>06:12:50</td>
                            </tr>
                        </table>
                </div> -->

                <div style="height: 400px; width: 100vw;">
                    <img id="map" src="../game-img/maps/bxu_01.jpg" alt="" style="background-size: cover;">
                </div>

            </div>
        </div>
    </div>

    <script>
        function destination() {
        var selectedDestination = document.getElementById("destination").value;
        if(selectedDestination > 0){
            document.getElementById('map').src='../game-img/maps/'+selectedDestination+'.jpg';
        }
        else{
            document.getElementById('map').src='../game-img/maps/bxu_01.jpg';
            }
        }
    </script>
</body>
</html>