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
        /*
            If statements - to check the condition when TRUE, the TRUE block executes

            Determining factors - comparison operators

            == - equal to. Ex: 5 == 5 (TRUE)
            != - not equal to. Ex: 5 != 5 (FALSE)
            < - less than. Ex: 5 < 6 (TRUE)
            > - greater than. Ex: 6 > 5 (TRUE)
            <= - less than or equal to. Ex: 5 <= 5 (TRUE)
            >= - greater than or equal to. Ex: 5 >= 5 (TRUE)
        */

        $first_digit = 10;
        $second_digit = 20;
        //      10             20
        if($first_digit == $second_digit) {
            echo $first_digit . " is less than or equal to " . $second_digit;
        } else {
            echo $first_digit . " is not equal to " . $second_digit;
        }

        // Else = if the condition is FALSE, the FALSE block executes

        // If-Elseif-else - multiple instances of conditions to be checked/verified, if TRUE, the TRUE block executes.
        //                - If FALSE, the next condition is checked, if TRUE, the TRUE block executes.

        $category = "";


        if($category == "entertainment") {
            echo "Welcome to entertainment news";
        } else if($category == "sports") {
            echo "Welcome to sports news";
        } else if($category == "politics") {
            echo "Welcome to politics news";
        } else {
            echo "Welcome to general news";
        }
    ?>  
</body>
</html>