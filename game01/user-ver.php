<?php
$con=mysqli_connect("localhost","root","","rusty_db_01");
$logged_user = $_SESSION['username'];

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$resultData = mysqli_query($con,"SELECT * FROM `game_accounts` WHERE bm_user='$logged_user'");

while($row = mysqli_fetch_array($resultData))
{
$user_id = $row['bm_id'];
$user_company = $row['bm_company'];
$user_region = $row['bm_region'] ;
$user_city = $row['bm_city'];

}
mysqli_close($con);
?>