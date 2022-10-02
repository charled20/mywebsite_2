<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I-Frame 06</title>

    <link href="../game.css" rel="stylesheet">
</head>
<body>
<?php include "../user-data.php";?>
    <div>
        <div>
            <div>
                <div style="display: flex; flex-direction: row; justify-content: space-around;">
                    <a href="hire-pages/hire_driver.php"><button style="background-color: red; width: 100px; height: 100px; cursor: pointer; color: white;">Hire Driver</button></a>
                    <a href="hire-pages/hire_assist.php"><button style="background-color: orange; width: 100px; height: 100px; cursor: pointer; color: white;">Hire Bus Driver Assistant</button></a>
                    <a href="hire-pages/hire_mech.php"><button style="background-color: blue; width: 100px; height: 100px; cursor: pointer; color: white;">Hire Mechanic</button></a>
                    <a href="hire-pages/hire_util.php"><button style="background-color: green; width: 100px; height: 100px; cursor: pointer; color: white;">Hire Utility</button></a>
                </div> 

                <div class="bx-style">
                    <div class="bx-title">Company Staff</div>
                        <table>
                            <tr>
                                <td>Bus Driver</td>
                                <td><?php echo "$staff_driver_total";?></td>
                            </tr>

                            <tr>
                                <td>Bus Assistant</td>
                                <td><?php echo "$staff_assist_total";?></td>
                            </tr>

                            <tr>
                                <td>Mechanic</td>
                                <td><?php echo "$staff_mechanic_total";?></td>
                            </tr>

                            <tr>
                                <td>Utility</td>
                                <td><?php echo "$staff_utility_total";?></td>
                            </tr>
                        </table>
                </div>

                <div class="bx-style">
                    <div class="bx-title">Staff Availability</div>
                        <table>
                            <tr>
                                <td>Available Bus Driver</td>
                                <td><?php echo "$staff_driver_available";?></td>
                            </tr>

                            <tr>
                                <td>Available Bus Assistant</td>
                                <td><?php echo "$staff_assist_available";?></td>
                            </tr>

                            <tr>
                                <td>Available Mechanic</td>
                                <td><?php echo "$staff_mech_available";?></td>
                            </tr>

                            <tr>
                                <td>Available Utility</td>
                                <td><?php echo "$staff_util_available";?></td>
                            </tr>
                        </table>
                </div>

                <div class="bx-style">
                    <div class="bx-title">Staff Currently On-Duty</div>
                        <table>
                            <tr>
                                <td>Bus Driver On-Duty</td>
                                <td><?php echo "$staff_driver_used";?></td>
                            </tr>

                            <tr>
                                <td>Bus Assistant On-Duty</td>
                                <td><?php echo "$staff_assist_used";?></td>
                            </tr>

                            <tr>
                                <td>Mechanic On-Duty</td>
                                <td><?php echo "$staff_mech_used";?></td>
                            </tr>

                            <tr>
                                <td>Utility On-Duty</td>
                                <td><?php echo "$staff_util_used";?></td>
                            </tr>
                        </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>