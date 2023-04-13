<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="checkbox" name="fruits[]" value="Apple"> Apple <br>
        <input type="checkbox" name="fruits[]" value="Banana"> Banana <br>
        <input type="checkbox" name="fruits[]" value="Orange"> Orange <br>
        <input type="submit" name="select_fruit_button" value="Submit">
    </form>

    <?php
        if(isset($_POST['select_fruit_button'])) {
            $selected_fruits = $_POST['fruits'];

            foreach($selected_fruits as $fruit) {
                echo "$fruit <br>";
            }
        }
    ?>
</body>
</html>
