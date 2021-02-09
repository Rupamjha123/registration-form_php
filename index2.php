<!DOCTYPE html>
<head>
<style>

h1{

    color:black;
}

h2{
    text-align:center;
    color:purple;

    background-color:aqua;
}


</style>

</head>
<body>

<?php

$i;
/*for($i=1;$i<=100;$i++){
//strlen() function to count the length of string
//str_word_count();
//str_replace();
//ex-str_replace("replace word","new word",$string);

    if($i%3==0)
    {
        echo "FIZZ"."<br>";
        
    }

    else if($i%5==0)
    {

       
        echo "BUZZ"."<br>";
    }

    else{
        echo $i."<br>";
    }
}
*/

$students = array("rupam","kumari","jha");
sort($students);
rsort($students);

foreach($students as $names){

    echo $names."<br>";
}

?>
</body>
</html>




