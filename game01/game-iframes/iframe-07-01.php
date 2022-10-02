<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I-Frame 7-01</title>

    <link href="../game.css" rel="stylesheet">
</head>
<body>
<?php include "../user-data.php";?>
    <div>
        <div>
            <div>
                <div class="bx-style">
                    <div class="bx-title">Company Shares</div>
                        <table>
                            <tr>
                                <td>Current Shares</td>
                                <td><?php echo "$user_companyShare";?></td>
                            </tr>

                            <tr>
                                <td>Previous Shares</td>
                                <td>200.08</td>
                            </tr>

                            <tr>
                                <td>Change %</td>
                                <td>+24.96%</td>
                            </tr>

                        </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>