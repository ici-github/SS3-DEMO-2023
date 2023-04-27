<?php

    session_start();

    $person = array(
        "lastname" => "Lawas",
        "firstname" => "Ivy",
        "middlename" => "Echavez"
    );

    $sum_of_all_arrays = array(1,2,3,4,5,6,7,8,9,10);

    echo array_sum($sum_of_all_arrays); 
    $_SESSION['persons'] = $person;

    foreach($_SESSION['persons'] as $key => $the_person) {
        if($key == 'middlename') {
            echo $the_person . "<br>";
        }
    }