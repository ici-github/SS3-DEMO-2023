<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            font-size: 14px;
        }
        table {
            margin: 0 auto;
            width: auto;
        }
        input, td {
            padding: 5px;
        }
        button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            width: 100%;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <table border="1">
            <tr>
                <td colspan="2">My Profile</td>
            </tr>
            <tr>
                <td>Complete Name: </td>
                <td><input type="text" name="input_name" id="input_name" placeholder="Input the complete name" ></td>
            </tr>
            <tr>
                <td>Sex: </td>
                <td>
                    <input type="radio" name="radio_sex" id="radio_sex" value="Male" > Male<br>
                    <input type="radio" name="radio_sex" id="radio_sex" value="Female" > Female
                </td>
            </tr>
            <tr>
                <td>Birthdate: </td>
                <td><input type="date" name="birthdate" id="birthdate" ></td>
            </tr>
            <tr>
                <td>Favorite Color: </td>
                <td><input type="color" name="input_color" id="" ></td>
            </tr>
            <tr>
                <td>Course: </td>
                <td>
                    <select name="courses" id="" >
                        <option value="IT">Information Technology</option>
                        <option value="ABM">Accounting, Business & Management</option>
                        <option value="PN">Practical Nursing</option>
                        <option value="HUMSS">Humanities and Social Sciences</option>
                        <option value="STEM">Science, Technology, Engineering and Math</option>
                        <option value="EIM">Electrical Installation and Maintainance</option>
                        <option value="HRM">Hotel and Restaurant Management</option>
                        <option value="CE">Computer Engineering</option>
                        <option value="CA">Culinary Arts</option>
                        <option value="OM">Office Management</option>
                        <option value="GAS">General Academic Strand</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Upload Image</td>
                <td><input type="file" name="upload_image" id="" ></td>
            </tr>
            <tr>
                <td>Address</td>
                <td>
                    <textarea name="address" id="" cols="30" rows="10" ></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" name="save_profile">Save Profile</button>
                </td>
            </tr>
        </table>
    </form>
    <?php

        //check if the button is clicked
        // when TRUE: process the form
        // when FALSE: ignore the submission

        if(isset($_POST['save_profile'])) {
            $complete_name = trim($_POST['input_name']);
            $address = trim($_POST['address']);

            //error checking
            // if elseif else method
            if($complete_name == "") {
                echo "<script>alert('Please type in your name!');</script>";
            } elseif(!isset($_POST['radio_sex']) || $_POST['radio_sex'] == "") {
                echo "<script>alert('Please select in your sex!');</script>";
            } elseif(!isset($_POST['birthdate']) || $_POST['birthdate'] == "") {
                echo "<script>alert('Please select in your date of birth!');</script>";
            } elseif(!isset($_POST['input_color']) || $_POST['input_color'] == "") {
                echo "<script>alert('Please select in your favorite color!');</script>";
            } elseif(!isset($_POST['address']) || $_POST['address'] == "") {
                echo "<script>alert('Please type in your address!');</script>";
            } else {
                echo "<p> Hi I'm <strong>$complete_name</strong>, I live in <strong>$address</strong>, my birthday is ".$_POST['birthdate'].", I'm taking the course " . $_POST['courses'] . " in Iligan Computer Institute. By the way my favorite color is " . $_POST['input_color'] . ". My sex is " . $_POST['radio_sex'] . ". Nice to meet you. How about you?";
            }
        }
    ?>
</body>
</html>
