<?php 
    $title="For Loops";
    include 'includes/header.php'?>

<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer -  For Loop</title>
</head>
<body>-->
    <h1>For Loop</h1>

    <?php
        //for loops
        for($count = 0; $count < 10; $count++){
            echo '<p>Hello World</p>';
        }

        for($count = 0; $count < 10; $count++){
            echo "The count is: $count <br/>";
        }
        ?>
    
    <?php
    require 'includes/footer.php';
?>      

<!--</body>
</html>-->