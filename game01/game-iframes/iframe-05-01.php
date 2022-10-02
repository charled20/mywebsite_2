<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I-Frame 05-01</title>

    <link href="../game.css" rel="stylesheet">
</head>
<body>
<?php include "../user-data.php";?>
    <div>
        <div>
            <div>
                <div class="bx-style">
                        <div class="bx-title">Staff Availability</div>
                            <table>
                                <tr>
                                    <td>Available Mechanics</td>
                                    <td><?php echo "$staff_mech_available";?></td>
                                </tr>
                                <tr>
                                    <td>Repairable Bus</td>
                                    <td>1</td>
                                </tr>
                            </table>
                </div>

 
            </div>
        </div>
    </div>
</body>
</html>