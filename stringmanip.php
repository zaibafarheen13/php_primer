<?php 
     $title="String Manipulation";
    include 'includes/header.php'?>

<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - String Manipulation</title>
</head>
<body>-->
    <?php
        //concatenation of strings
        $phrase1="Student who came late";
        $phrase2="in class, stand with Rock";
        $name="zaiba farheen";
        echo $phrase1 . ", named Tiffany, ". $phrase2;
        //echo $phrase2;
        echo '<br/>';
        echo '<hr/>';
        //string transformation
        echo 'Uppercase first letter: '.ucfirst($name).'<br/>';
        echo 'Uppercase first letter of each word: '.ucwords($name).'<br/>';
        echo 'Upper Case: '.strtoupper($name).'<br/>';
        echo 'Lower Case: '.strtolower($name).'<br/>';
        echo 'Lower Case: '.strtolower("THIS WAS ALL UPPER CASE").'<br/>';
        echo '<hr/>';
        echo 'Repeat String: ' .str_repeat('a',10) . '<br/>';
        echo 'Repeat String in Upper Case: ' .strtoupper(str_repeat('a',10)) . '<br/>';
        echo 'Get a Substring: '.substr($name,5,10).'<br/>';
        echo 'Get a Substring: '.substr($name,3,5).'<br/>';

        echo 'Get position of string: '.strpos($name,'h').'<br/>';
        //reutrns null
        echo 'Get position of string: '.strpos($name,'x').'<br/>';

        echo 'Find Character "e": '.strchr($name,'e').'<br/>';
        echo 'Find Character "e": '.strchr($name,'n').'<br/>';
        echo 'Find Character "e": '.strchr($name,'i').'<br/>';

        echo 'Find Length of String: '.strlen($name).'<br/>';

        echo 'Without Trim: '."A"."B C D"."E". '<br/>';
        echo 'Trim on  both sides: '."A".trim(" B C D ")."E". '<br/>';
        echo 'Trim spaces to the left: '."A".ltrim(" B C D ")."E". '<br/>';
        echo 'Trim spaces to the right: '."A".rtrim(" B C D ")."E". '<br/>';

        echo 'Replace string with another: '.str_replace("stand","sit",$phrase2).'<br/>';
        

    
        ?>
<?php
    require 'includes/footer.php';
?>      

<!--</body>
</html>-->