<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Hour Picker -->
    <?php 
        $hour = date('H');
        echo $hour
    ?>
    <!-- Basic Hour If Statement -->
    <?php
        $hour = rand(1,24);
        echo $hour;

        if($hour >= 5 && $hour <= 12 ){
            echo " Good morning";
        }elseif($hour >= 12  && $hour <= 18){
            echo "Good afternoon";
        }elseif($hour >= 18 && $hour <= 24){
            echo "Good evening";
        }else{
            echo "Good night";
        }
    ?>

    <!-- FizzBuzz Example -->
    <?php

        $number = rand(1,100);
        $output = "";
       
        if($number % 3 !== 0 || $number % 5 !== 0){
            echo $number;
        }else{
            if($number % 3 === 0 ){
                $output = "Fizz";
            }
            if($number % 5 === 0){
                $output .= "Buzz";
            }
            echo $output;
        }
    ?>
   
    
</body>
</html>