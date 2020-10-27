<?php
    $err_name = "";
    $err_username = "";
    $err_pass = "";
    $err_confPass = "";
    $err_email = "";
    $err_code = "";
    $err_num = "";
    $err_address = "";
    $err_city = "";
    $err_state = "";
    $err_postal = "";
    $err_gender = "";
    $err_about = "";
    $err_dob = "";
    $err_bio = "";
    $name = "";
    $username = "";
    $password = "";
    $confPassword = "";
    $email = "";
    $gender = "";
    $about = "";
    $day = "";
    $month = "";
    $year = "";
    $has_error = false;
    //$password = $_POST['pass'];
    if(isset($_POST['register'])) {
        if (empty($_POST['name'])) {
            $err_name = "Name cannot br empty!";
        }
        else{
            $name = htmlspecialchars($_POST['name']);
        }
        if (empty($_POST['username'])) {
            $err_username = "Username cannot be empty!";
        }
        if (!empty($_POST['username'])) {
            if(strlen($_POST['username']) < 6){
                $err_username = "Username cannot be less than 6 letter";
                $has_error = true;
            }
            if(strpos(""," ")){
                $err_username = "Spaces is not allowed in a sequence";
                $has_error = true;
            }
        }
        if (empty($_POST['pass'])) {
            $err_pass= "Password cannot be empty!";
            $has_error = true;
        }
        if (!empty($_POST['pass'])){
            if(strlen($_POST['pass']) < 8) {
                $err_pass= "Password cannot be less than 8 letter";
                $has_error = true;
            }
            else if(!strpos($_POST['pass'], "#")) {
                $err_pass= "Password must have a special character";
                $has_error = true;
            }
            else if(!strpos($_POST['pass'], "?")) {
                $err_pass= "Password must have a special character";
                $has_error = true;
            }
            else if(!ctype_upper($_POST['pass'])){
                $err_pass= "Password must have a Upper character";
            }
            else if(!ctype_lower($_POST['pass'])){
                $err_pass= "Password must have a Lower character";
                $has_error = true;
            }
            else{
                $password = htmlspecialchars($_POST['pass']);
            }
        }
        if (empty($_POST['conf_pass'])) {
            $err_confPass ="Confirm Password cannot be empty!";
            $has_error = true;
        }

        if (empty($_POST['email'])) {
            $err_email = "Email cannot be empty!";
        }
        if (empty($_POST['code'])) {
            $err_code = "Code cannot be empty!";
        }
        if (!empty($_POST['code'])){
            if(!is_numeric($_POST['code'])){
                $err_num = "Code must be numeric.";
            }
        }
        if (empty($_POST['number'])) {
            $err_num= "Number cannot be empty!";
        }
        if (!empty($_POST['number'])){
            if(!is_numeric($_POST['code'])){
                $err_code = "Phone number must be numeric.";
            }
        }
        if (empty($_POST['state'])) {
            $err_state= "State cannot be empty!";
        }
        else{
            if(ctype_space("  ")){
                $err_state= "Multiple spaces is not allowed in a sequence";
            }
        }
        if (empty($_POST['postal'])) {
            $err_postal= "Postal cannot be empty!";
        }
        else{
            if(ctype_space("  ")){
                $err_postal= "Multiple spaces is not allowed in a sequence";
            }
        }
        if (empty($_POST['address'])) {
            $err_address= "Address cannot be empty!";
        }
        else{
            if(ctype_space("  ")){
                $err_address= "Multiple spaces is not allowed in a sequence";
            }
        }
        if (empty($_POST['city'])) {
            $err_city= "City cannot be empty!";
        }
        else{
            if(ctype_space("  ")){
                $err_city= "Multiple spaces is not allowed in a sequence";
            }
        }
        if (empty($_POST['state'])) {
            $err_state= "State cannot be empty!";
        }
        else{
            if(ctype_space("  ")){
                $err_state= "Multiple spaces is not allowed in a sequence";
            }
        }
        if (empty($_POST['postal'])) {
            $err_postal= "Postal cannot be empty!";
        }
        else{
            if(ctype_space("  ")){
                $err_postal= "Multiple spaces is not allowed in a sequence";
            }
        }
        if(isset($_POST["day"])){
            $day=htmlspecialchars($_POST["dobDay"]);
        }
        elseif(isset($_POST["month"])){
            $month=htmlspecialchars($_POST["dobMonth"]);
        }
        elseif(isset($_POST["year"])){
            $year=htmlspecialchars($_POST["dobYear"]);
        }
        else{
            $err_dob = "Select your DOB";
        }
        if(!isset($_POST['gender'])){
            $err_gender = "Gender required";
        }
        if(!isset($_POST['about'])){
            $err_about = "At least on check is required";

        }
        if (empty($_POST['bio'])) {
            $err_bio = "Bio is reuired";
        }
        if (!empty($_POST['bio'])){
            if(ctype_space("  ")){
                $err_bio = "Multiple spaces is not allowed in a sequence";
            }
        }
    }
?>
<html>
    <head>
    </head>
    <body>
        <fieldset>
            <legend>
                <h1>Club Member Registration</h1>
            </legend>
                <form action="" method="post">
                    <table>
                        <tr>
                        <td align="right">Name:</td>
                        <td><input type="text" name="name">
                            <?php
                            echo $err_name;
                            ?>
                        </td>
                        </tr>
                        <tr>
                        <td align="right">
                            Username:</td>
                        <td><input type="text" name="username">
                            <?php
                            echo $err_username;
                            ?>
                        </td>
                        </tr>
                        <tr>
                        <td align="right">Password:</td>
                        <td><input type="password" name="pass">
                            <?php
                                echo $err_pass;
                            ?>
                        </td>
                        </tr>
                        <tr>
                        <td align="right">
                            Confirm Password:</td>
                        <td><input type="password" name="conf_pass">
                            <?php
                            echo $err_confPass;
                            ?>
                        </td>
                        </tr>
                        <tr>
                            <td align="right">
                                Email:</td>
                            <td><input type="text" name="email">
                                <?php
                                    echo $err_email;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">Phone:</td>
                            <td><input type="text" size="3" placeholder="code" name="code"> <?php
                                echo $err_code;
                                ?>
                                - <input type="text" size="10" placeholder="Number" name="number">

                                <?php
                                echo $err_num;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td align="right" valign="top">
                                Address:</td>
                            <td><input type="text" placeholder="Street Address" name="address">
                                <?php
                                echo $err_address;
                                ?>
                            </td>
                        <tr>
                            <td> </td>
                            <td>
                                <input type="text" placeholder="City" size="7" name="city">
                                <?php
                                echo $err_city;
                                ?>
                                -<input type="text" placeholder="State" size="7" name="state">
                                <?php
                                echo $err_state;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td> </td>
                            <td>
                                <input type="text" placeholder="Postal/ZIP Code" name="postal">
                                <?php
                                echo $err_postal;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                Birth Date:
                            </td>
                            <td>
                                <select name="day">
                                    <option disabled selected> Day </option>"
                                    <?php

                                        for($i = 1; $i < 32; $i++) {
                                            echo "<option value=" . $i . ">" . $i . "</option>";
                                        }
                                    ?>
                                </select>
                                <select name="month">
                                    <option disabled selected> Month </option>"
                                    <?php
                                    $month = array("Jan", "Feb","March","April", "May", "June", "July", "Aug", "Sep", "Oct", "Nov", "Dec");
                                    for($i = 0; $i <= 11; $i++){
                                        echo "<option value=" . $i . ">" . $month[$i] . "</option>";
                                    }
                                    ?>

                                </select>
                                <select name="year">
                                    <option disabled selected> Year </option>"
                                    <?php
                                    for($i = 1997; $i <= 2007; $i++){
                                        echo "<option value=" . $i . ">" . $i . "</option>";
                                    }
                                    ?>
                                </select>
                                <?php
                                echo $err_dob;
                                ?>
                            </td>
                        <tr>
                            <td align="right">
                                Gender
                            </td>
                            <td>
                                <input type="radio" name="gender" value="Male"/> Male
                                <input type="radio" name="gender" value="Female"/> Female
                                <?php
                                echo $err_gender;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td valign="middle">
                                Where did you hear<br/> about us
                            </td>
                            <td>
                                <input type="checkbox" name="about" value="1"> A find or Colleague<br/>
                                <input type="checkbox" name="about" value="2"> Google<br/>
                                <input type="checkbox" name="about" value="3"> Blog Post<br/>
                                <input type="checkbox" name="about" value="4"> New Article<br/>
                                <?php
                                echo $err_about;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                Bio:
                            </td>
                            <td>
                                <textarea name="bio"></textarea>
                                <?php
                                    echo $err_bio;
                                ?>
                            </td>
                        </tr>
                        <tr align="center">
                            <td colspan="2"><input type="submit" value="register" name="register"></td>
                        </tr>
                    </table>
                </form>
        </fieldset>
    </body>
</html>