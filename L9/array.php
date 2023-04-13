<?php
    $employees = array(
        array(
            "name" => "Cyrus",
            "age"  => 17,
            "brgy" => "Balo-i"
        ),
        array(
            "name" => "John Jolo",
            "age"  => 17,
            "brgy" => "Unahan Kurbada"
        ),
        array(
            "name" => "Nachi John",
            "age"  => "18",
            "brgy" => "Suarez"
        )
    );

    
    echo "<pre>";
        var_dump($employees);
    echo "</pre>";

    foreach($employees as $key_employee => $employee) {
        echo "Employee ID: " . $key_employee;

        echo "<ul>";
        echo "<li> Employee Name " . $employee["name"] . "</li>";
        echo "<li> Age: " . $employee["age"] . "</li>";
        echo "<li> Brgy: " .$employee["brgy"] . "</li>";
        echo "</ul>";
    }

?>