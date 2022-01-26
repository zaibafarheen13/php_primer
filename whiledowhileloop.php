<?php 
    $title="While/Do-While Loops";
    include 'includes/header.php'?>

<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - While/Do-While Loops</title>
</head>
<body>-->
    <h1>While Loop</h1>
    <?php
    $grade=0;
        while($grade < 10){
            echo '<p>I AM LESS THAN 10!</p>';
            $grade++;
        }

        echo 'EXIT LOOP!';

    
    ?>
    <h1>Do-While Loop</h1>
    <?php
        //post-condition loop
        $grade=0;
        do{
            echo '<p>I AM DO WHIE LOOP!</p>';
            $grade++; 
        }while($grade <10);
    ?>

<?php
    require 'includes/footer.php';
?>      

<!--</body>
</html>-->