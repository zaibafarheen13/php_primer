<?php 
    $title="Functions";
    include 'includes/header.php'?>

<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Functions</title>
</head>
<body>-->
    <h1>Functions</h1>
    <?php
    //defining a function
    function writeMessage(){
        echo "You are really a nice person, Have a nice time! <br/>";
    }

    //calling a function
    writeMessage();
    echo "<hr/>";
    writeMessage();
    echo "<br/>";
    //functions with parameters

    function addFunction($num1,$num2){
        $sum = $num1 + $num2;
        $num2=$num2+1;
        echo "The sum of $num1 and $num2 is: $sum <br/>";
    }

    function chnageNum(&$num){
        $num=$num+10;

    }

    function returnProduct($num1,$num2){
      $prod=$num1*$num2;
      return $prod;  

    }

    $num=500;
    addFunction(10,20);
    addFunction(10,$num);
    
    addFunction('10',"50");
    chnageNum($num);
    echo $num.'<br/>';

    $return_value=returnProduct(10,200);
    echo $return_value;
  
    ?>
<?php
    require 'includes/footer.php';
?>      

<!--</body>
</html>-->