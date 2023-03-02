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
        <h1>Login</h1>
        <form action="" method="post">
            Username: <input type="text" name="input_username" id="input_username" placeholder="Please enter username" required> <br>
            Password: <input type="password" name="input_password" id="input_password" placeholder="Please enter password" required> <br><br>

            Sex: <br>
            Male: <input type="radio" name="radio_sex" id="radio_sex" value="Male" required> <br>
            Female: <input type="radio" name="radio_sex" id="radio_sex" value="Female" required><br><br>

            Block: <br>
            <select name="select_block" id="select_block" required>
                <option value="IT1">IT1</option>
                <option value="IT2">IT2</option>
                <option value="IT3">IT3</option>
                <option value="IT4">IT4</option>
            </select>
            <br>
            <button type="submit" name="submit_login">Login</button>
        </form>

    <?php 
        ini_set("display_errors", 1);
        // echo "<h1> " . $_GET['input_firstname'] . " " . $_GET['input_lastname'] . "</h1>";

        if(isset($_POST['submit_login'])) {
            $username = trim($_POST['input_username']);
            $password = trim($_POST['input_password']);
            $sex = $_POST['radio_sex'];
            $block = $_POST['select_block'];

            if(!empty($username) && !empty($password)) {
                echo "Username: $username <br>";
                echo "Password: $password <br>";
                echo "You are $sex <br>"; 
                echo "From: $block";
            } else {
                echo "Invalid username/password combination.";
            }
        }
    ?>
    </center>
</body>
</html>