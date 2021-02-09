<?php


$username="root";
$password ="";
$server ='localhost';

$db='project';

$con=mysqli_connect($server,$username,$password,$db);

$database=mysqli_select_db($con,$db);

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