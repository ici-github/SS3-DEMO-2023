<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
</style>
<body>
    <center>
        <h1>Form</h1>
        <!-- <form action="6_process_form.php" method="GET">
            Firstname: <input type="text" name="input_firstname" id="input_firstname" required> <br>
            Lastname: <input type="password" name="input_lastname" id="input_lastname" required> <br>

            <input type="submit" value="Submit registration">
        </form> -->

        <form action="6_process_form.php" method="post">
            Username: <input type="text" name="input_username" id="input_username" required> <br>
            Password: <input type="password" name="input_password" id="input_password" required> <br>

            <button type="submit">Login</button>
        </form>
    </center>
</body>
</html>