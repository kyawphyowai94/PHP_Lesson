<?php

    //function
    function myName(){
        echo "<h1>My Name is Kyaw Phyo Wai</h1>";
    }

    myName();

    //Function with Argument
    $brother = "Aung Aung";
    function myBro($name){
        echo "<h1>My Brother Name is $name.<?h1>";
    }

    myBro($brother);

    function sum($num1,$num2){
        $result = $num1 + $num2;
        echo "<h1>$result</h1>";
    }

    sum(123,321);

    function myArray($num){
        $result = $num[0] -$num[1];
        echo "<h1>$result</h1>";
    }
    myArray([32,21]);

    function myNumber($number1 = 50, $number2 = 100){
        $result = $number1 * $number2;
        echo "<h1>$result</h1>";
    }
    myNumber();
    myNumber(10,20);
?>