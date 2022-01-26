<?php 
    $title="Arrays and Printouts";
    include 'includes/header.php'?>

<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Arrays</title>
</head>
<body>-->
    <h1>Arrays</h1>
    <?php
        //a variable
        $num=3;

        //an array
        //only one datatype
        $numbers=array(1,2,3,4,5,6,7,8,9,10);
        //you can access the value in a subscript of the array using the index
        echo $numbers[5];

        echo "<p>$numbers[9]</p>";

        $size=count($numbers);
        echo "<p>Array Number is: $size</p>";

        for($count = 0; $count < $size; $count++){
            echo "<p>$numbers[$count]</p>";
        }
        ?>
<?php
    require 'includes/footer.php';
?>      


<!--</body>
</html>-->