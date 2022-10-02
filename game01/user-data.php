<?php
$con=mysqli_connect("localhost","root","","rusty_db_01");
$logged_user = $_SESSION['username'];

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$resultData = mysqli_query($con,"SELECT * FROM `user_data` WHERE ud_user='$logged_user'");

while($row = mysqli_fetch_array($resultData))
{
$user_balance = $row['ud_bal'];
$user_companyShare = $row['ud_comp_share'];
$user_bus_total = $row['ud_bus_total'];
$user_bus_used = $row['ud_bus_used'];
$user_bus_vacant = $row['ud_bus_vacant'];
$user_comp_rep = $row['ud_comp_rep'];
$staff_driver_total = $row['ud_staff_driver_tot'];
$staff_assist_total = $row['ud_staff_assist_tot'];
$staff_mechanic_total = $row['ud_staff_mech_tot'];
$staff_utility_total = $row['ud_staff_util_tot'];
$staff_driver_available = $row['ud_staff_driver_av'];
$staff_assist_available = $row['ud_staff_assist_av'];
$staff_mech_available =$row['ud_staff_mech_av'];
$staff_util_available = $row['ud_staff_util_av'];
$staff_driver_used = $row['ud_staff_driver_used'];
$staff_assist_used = $row['ud_staff_assist_used'];
$staff_mech_used = $row['ud_staff_mech_used'];
$staff_util_used = $row['ud_staff_util_used'];
$garage_capacity = $row['ud_garage_cap'];
$fuel_available = $row['ud_fuel_av'];
$fuel_capacity = $row['ud_fuel_cap'];
}
mysqli_close($con);
?>