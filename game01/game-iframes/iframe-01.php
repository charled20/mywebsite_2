<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I-Frame 01</title>

     <!-- --------------- Games CSS --------------------->
     <link href="../game.css" rel="stylesheet">

    <!-- --------------- Open Sans Font --------------------->
    <!-- <link href="font/OpenSans-Regular.ttf" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">


</head>
<body>
<?php include "../user-data.php";?>
        <!-- body of frame 01 starts -->

        <section id="frame-01">
            <div> 
                <div style="display: flex; flex-direction: row; justify-content: space-around;">
                    <div class="bx-style">
                        <div class="bx-title">Company Stats</div>
                            <table>
            
                                <tr>
                                    <td>Company Reputation</td>
                                    <td><?php echo "$user_comp_rep%";?></td>
                                </tr>

                                <tr>
                                    <td>Fuel Cost</td>
                                    <td>Php 7,500 per 400kg</td>
                                </tr>
            
                                <tr>
                                    <td>Bus Number</td>
                                    <td><?php echo "$user_bus_total";?></td>
                                </tr>
            
                                <tr>
                                    <td>Bus Pending Delivery</td>
                                    <td>0</td>
                                </tr>

                                <tr>
                                    <td>Active Routes</td>
                                    <td>0</td>
                                </tr>
            
                                <tr>
                                    <td>Bus Pending Maintenance</td>
                                    <td>0</td>
                                </tr>

                                <tr>
                                    <td>Sale Value</td>
                                    <td>50%</td>
                                </tr>
            
                            </table>
                    </div>

                    <div class="bx-style">
                        <div class="bx-title">Company Name</div>
                            <canvas id="myChart"></canvas>
                            <table>
                                <tr>
                                        <td>Current Share Value</td>
                                        <td><?php echo "$user_companyShare";?></td>
                                </tr>
                                <tr>
                                        <td>Change (%)</td>
                                        <td>+ 0%</td>
                                </tr>
                                <tr>
                                        <td>Change (Php)</td>
                                        <td>+ 0.00</td>
                                </tr>
                            </table>
                    </div>
                </div>
                <div style="display: flex; flex-direction: row; justify-content: space-around;">
                    <div class="bx-style" style="width:80vw;">
                        <div class="bx-title">Company Actions</div>
                            <table>
                                <tr>
                                        <td>Bus # 1</td>
                                        <td>Php1,233.00</td>
                                        <td>02:00:34</td>
                                </tr>

                                <tr>
                                        <td>Bus # 2</td>
                                        <td>Php3,089.50</td>
                                        <td>04:53:09</td>
                                </tr>
                            </table>
                    </div>

                    
                </div>
            </div>
        </section>

        <!-- body of frame 01 ends -->

      
        

        <script src="../../js/chart.js"></script>
        
        <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var share = <?php echo "$user_companyShare";?>;
        
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: ['10-21-2020','10-22-2020'],
                datasets: [{
                    label: 'Company Progress',
                    backgroundColor: 'rgb(3, 19, 243,0.0)',
                    borderColor: 'rgb(3, 19, 243)',
                    data: [share]
                }]
            },

            // Configuration options go here
            options: {}
        });
        </script>
</body>
</html>