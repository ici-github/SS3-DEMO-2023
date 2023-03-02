<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
    * {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
</style>
</body>
    <?php
        ini_set("display_errors", 1);
        // echo "<h1> " . $_GET['input_firstname'] . " " . $_GET['input_lastname'] . "</h1>";

        $username = $_POST['input_username'];
        $password = $_POST['input_password'];

        echo "Username: $username <br>";
        echo "Password: $password ";
    ?>

</html>