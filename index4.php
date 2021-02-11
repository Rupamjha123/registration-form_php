<!DOCTYPE html>
<head>
    

<script src="https://kit.fontawesome.com/a076d05399.js"></script>

<style>


    table{

       
        font-size:20px;
        
        border:2px black;
    }


th{
    border:2px solid black;
    background-color:blue;
    color:white;
}

td{
    border:2px solid black;
background-color:yellow;

}
</style>

</head>
<body>


<table>
    <thead>
    <tr>
    <th>name</th>
    <th>rollno</th>
    <th>father name</th>
    <th>course</th>
    <th>collge name</th>
    <th>contact no</th>
    <th>Delete</th>
  
    </tr>
</thead>

<tbody>


<?php


$username="root";
$password ="";
$server ='localhost';

$db='project';

$con=mysqli_connect($server,$username,$password,$db);

$database=mysqli_select_db($con,$db);

$selectquery = "select * from student_reg";

$query =mysqli_query($con,$selectquery);

$nums =mysqli_num_rows($query);

while($res =mysqli_fetch_array($query)){



    ?>
    <tr>
        <td><?php   echo $res['name']?></td>
        <td><?php   echo $res['rollno']?></td>
        <td><?php   echo $res['father name']?></td>
        <td><?php   echo $res['course']?></td>
        <td><?php   echo $res['college name']?></td>
        <td><?php   echo $res['contact no']?></td>
        <td><a href="delete.php?na=<?php  echo $res['name'] ?>"><i class="fa fa-trash"></i></td>
        
    </tr>
    <?php
}


?>

    
</tbody>
</table>





</body>

</html>