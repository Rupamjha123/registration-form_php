<!DOCTYPE html>
<head>

<script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>
<body>
<link rel="stylesheet" href="style.css">
<div class="container">
    <div class="container2">
        
    
        <h1>REGISTRATION FORM</h1>
    <form method="POST" >

<i class="fas fa-user-check"></i>:
<input type="text" name="name" placeholder="Enter your name" 
> <br><br>


<i class="fas fa-pencil-alt"></i>:
<input type="text" name="roll" placeholder="Enter your rollno"> <br><br>


<i class="fas fa-male"></i>:
<input type="text" name="fath" placeholder="Enter your father name"> <br><br>


<i class="fas fa-phone-alt"></i>:
<input type="text" name="contact" placeholder="Enter your contact"> <br><br>

<i class="fa fa-university"></i>:
<input type="text" name="clg" placeholder="Enter your universitry"> <br><br>


<i class="fas fa-book"></i>:
<input type="text" name="course" placeholder="Enter your course"> <br>

<button name="submit">submit</button>
</form>
</div>
</div>



<?php


$username="root";
$password ="";
$server ='localhost';

$db='project';

$con=mysqli_connect($server,$username,$password,$db);
/*$showquery="select * from student_reg where name={$nam}";


$showdata = mysqli_query($con,$showquery);

$arrdata= mysqli_fetch_array($showdata);
*/

if(isset($_POST['submit'])){
   


    $name=$_POST['name'];
    $rollno=$_POST['roll'];
    $father=$_POST['fath'];
    $course=$_POST['course'];
    $college=$_POST['clg'];
    $contact=$_POST['contact'];

    if(empty($name)){

        ?>
        <script>
            alert("name filed is empty");

        </script>
        <?php
    }


    
    else if(empty($rollno)){

        ?>
        <script>
            alert("rollno filed is empty");

        </script>
        <?php
    }


    else if(empty($father)){

        ?>
        <script>
            alert("father name filed is empty");

        </script>
        <?php
    }

    else if(empty($course)){

        ?>
        <script>
            alert("course must be enter");

        </script>
        <?php
    }

    else if(empty($college)){

        ?>
        <script>
            alert("college name is necessary");

        </script>
        <?php
    }

    else{
        $insert_q= "insert into `student_reg`(`name`, `rollno`, `father name`, `college name`, `course`, `contact no`) VALUES ('$name','$rollno','$father','$college','$course','$contact')";
        $ch = mysqli_query($con,$insert_q);
    
        if($ch){
            ?>
            <script>
                alert("data inserted");
    
            </script>
            <?php
        }
        else{
    
        ?>
        <script>
            alert("data not inserted");
    
        </script>
        <?php
        }
         }

}

else{


    echo "no";
}




?>

</body>

</html>