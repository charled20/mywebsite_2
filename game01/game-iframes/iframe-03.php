<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I-Frame 03</title>

    <link href="../game.css" rel="stylesheet">
</head>
<body>
<?php include "../user-data.php";?>
    <div>
        <div>
            <div class="bx-style">
                <div class="bx-title">Fuel Price</div>
                    <table>
                        <tr>
                            <td>Current Price</td>
                            <td>Php7,000 / barrel</td>
                        </tr>

                        <tr>
                            <td>Previous Price</td>
                            <td>Php4,200 / barrel</td>
                        </tr>
                    </table>
            </div>

            <div class="bx-style">
                <div class="bx-title">Company Fuel</div>
                    <table>
                        <tr>
                            <td>Fuel Available</td>
                            <td><?php echo number_format($fuel_available,2);?> Liters</td>
                        </tr>

                        <tr>
                            <td>Fuel Capacity</td>
                            <td><?php echo number_format($fuel_capacity,2);?> Liters</td>
                        </tr>
                    </table>
            </div>

        </div>
    </div>
</body>
</html>