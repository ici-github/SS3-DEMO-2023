<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function sayHello() {
            echo "Hello, world war 3! <br>";
        }

        sayHello();
        sayHello();
        sayHello();
        sayHello();
        sayHello();
        sayHello();
        sayHello();

        echo "<br><hr>";

        // function addNumbers($num1, $num2) {
        //     $sum = $num1 + $num2;
        //     echo "The sum of $num1 and $num2 is $sum <br>";
        // }
        
        $sum = 0;
        function addNumbers($num1, $num2) {
            $sum = $num1 + $num2;
            return $sum;
        }

        echo $sum;
        /**
         *  $num1 = 5;
         *  $num2 = 7;
         */
        addNumbers(5, 7);
        addNumbers(7, 11);
        addNumbers(69, 21);

        $result = addNumbers(69, 21);

        echo "The result is: $result";
        
    ?>
</body>
</html>
