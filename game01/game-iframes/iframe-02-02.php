<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iframe-02-02</title>

    <link href="../game.css" rel="stylesheet">
</head>
<body>
<?php include "../user-data.php";?>
    <div style="display: flex; flex-direction: row; justify-content: space-around;">
        <div class="bx-style">
            <div class="bx-title">Bus Availability</div>
                <table>
                    <tr>
                        <td>Bus Vacant</td>
                        <td><?php echo "$user_bus_vacant";?></td>
                    </tr>

                    <tr>
                        <td>Bus Enroute</td>
                        <td><?php echo "$user_bus_used";?></td>
                    </tr>
                </table>
        </div>

        <div class="bx-style">
            <div class="bx-title">Bus Garage Capacity</div>
                <table>
                    <tr>
                        <td>Current Capacity</td>
                        <td><?php echo "$garage_capacity";?></td>
                    </tr>
                    <tr>
                        <td>Used Slots</td>
                        <td><?php echo "$user_bus_total"; ?></td>
                    </tr>
                    <tr>
                        <td>Available Slots</td>
                        <td><?php $garage_av = $garage_capacity - $user_bus_total; echo "$garage_av";?></td>
                    </tr>
                </table>
        </div>

        
    </div>
    <div style="display: flex; flex-direction: row; justify-content: space-around; margin-top: 10px;">
        <button style="height: 120px; width: 120px; background-color: green; cursor: pointer; color: white;">Increase to 24 Slots</button>
        <button style="height: 120px; width: 120px; background-color: blue; cursor: pointer; color: white;">Increase to 36 Slots</button>
    </div>
</body>
</html>