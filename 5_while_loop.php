<?php

    ini_set('error_reporting', E_ALL);
    error_reporting(E_ALL);
    // While loop, will execute the code block as long as the condition is true
    $i = 1;
    while($i <= 5) {
        echo "The first loop number is $i <br>";
        $i++;
        
        for($j = 1; $j <= 5; $j++) {
            echo "The second loop number is $j <br>";
        }

        do {
            echo "The third loop number is $k <br>";
            $k++;
        } while($k <= 5);
    }



    