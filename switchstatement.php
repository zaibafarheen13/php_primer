<?php 
    $title="Switch Statements";
    include 'includes/header.php'?>
    <!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Switch Statements</title>
</head>
<body>-->
    <h1>Switch Statements</h1>
    <?php
        $grade='C';

        switch($grade){
            case 'A':
                echo '<h2 style="color: green">YOU ARE A SUPERSTAR</h2>';
                break;
            case 'B':
                echo '<h2 style="color: blue">YOU DID WELL</h2>';
                break;
            default:
                 echo '<h2 style="color: red">YOU HAVE FAILED...</h2>';
                 break;

            }
        
    ?>
    
<?php
    require 'includes/footer.php';
?>      

<!--</body>
</html>-->