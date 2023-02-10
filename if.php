<?php
    $secretNumber = 453;
    $guess = "453";

    echo "<pre>";
        var_dump($secretNumber);
        var_dump($guess);
    echo "</pre>";
    // Is equal to ==
    if ($guess == $secretNumber) {
        echo "<p>Congratulations!</p>";
    }

    // Is identical to 
    if ($guess === $secretNumber) {
        echo "<p>Congratulations!</p>";
    }

    if("var" === "VAR") {
        echo "EQUAL";
    }

    if( 50 >= 50) {
        echo "The statement is true";
    }
?>
