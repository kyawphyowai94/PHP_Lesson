<?php

    //for loop
    $a = 0;
    $b = 0;
    for($i = 0; $i < 15; $i++){
        $a += 10;
        $b += 5;
    }
    
    echo "<h3>The Looping end is a = $a and b = $b.</h3>";

    //while loop
    $j = 0;
    $num = 50;

    while($j < 10){
        $num--;
        $j++;
    }


    echo "<h3>The loopin end at j= $j and num = $num</h3>.";

    //do while loop
    $k = 10;
    $n = 50;
    do{
        $k++;
        $n++;
    }while($k < 10);

    echo "<h3>The loopin end at k= $k and n = $n</h3>.";

    //for each loop
    $laptops = ["Apple","Dell","Hp","Asus","Lenovo"];
    print_r($laptops);

    foreach($laptops as $key => $value){
        echo "<h3>Key is $key and value is $value.</h3>";
    }
?>