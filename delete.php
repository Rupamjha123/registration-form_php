<?php

$username="root";
$password ="";
$server ='localhost';

$db='project';

$con=mysqli_connect($server,$username,$password,$db);

$database=mysqli_select_db($con,$db);


$nam = $_GET['na'];
echo $nam;

$deletequery = "DELETE FROM student_reg WHERE name='$nam'";


$query = mysqli_query($con,$deletequery);

if($query)
{

    echo "yes";
}

else{

    echo "no";
}
?>