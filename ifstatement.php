<?php 
    $title="If Statement";
    include 'includes/header.php'?>

<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - If Statement</title>
</head>
<body>-->
    <h1>If Statement</h1>
    
    <?php
    //an if statement that will carry out an action based on the value of the variable
    $grade=50;
    //===,==,>=,<=,<,>
    if($grade >=50){
        echo '<h3 style="color: red">YOU HAVE PASSED</h3>';
    }else{
        echo '<h3 style="color: green">YOU HAVE FAILED</h3>';
    }

    //if-else-if statement
    $grade='B';
    if($grade=='A'){
        echo '<h2 style="color: green">YOU ARE A SUPERSTAR</h2>';
    }
    elseif($grade=='B'){
        echo '<h2 style="color: blue">YOU DID WELL</h2>';
    }
    else{
        echo '<h2 style="color: red">YOU HAVE FAILED...</h2>';
    }


    ?>
<?php
    require 'includes/footer.php';
?>      

<!--</body>
</html>-->