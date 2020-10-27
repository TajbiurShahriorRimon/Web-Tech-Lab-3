<?php
    echo "sfda";
?>
<html>
    <head>
    </head>
    <body>
        <fieldset>
            <legend>
                <h1>Club Member Registration</h1>
            </legend>
                <form action="">
                    <table>
                        <tr>
                        <td align="right">Name:</td>
                        <td><input type="text"></td>
                        </tr>
                        <tr>
                        <td align="right">
                            Username:</td>
                        <td><input type="text"></td>
                        </tr>
                        <tr>
                        <td align="right">Password:</td>
                        <td><input type="password"></td>
                        </tr>
                        <tr>
                        <td align="right">
                            Confirm Password:</td>
                        <td><input type="password"></td>
                        </tr>
                        <tr>
                            <td align="right">
                                Email:</td>
                            <td><input type="text"></td>
                        </tr>
                        <tr>
                            <td align="right">
                                Phone:</td>
                            <td><input type="text" size="3" placeholder="code"> - <input type="text" size="10" placeholder="Number"></td>
                        </tr>
                        <tr>
                            <td align="right" valign="top">
                                Address:</td>
                            <td><input type="text" placeholder="Street Address"><br/>
                                <input type="text" placeholder="City" size="6"> - <input type="text" placeholder="State" size="7"><br/>
                                <input type="text" placeholder="Postal/ZIP Code">
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                Birth Date:
                            </td>
                            <td>
                                <select name="dob">
                                    <option disabled selected> Day </option>"
                                    <?php

                                        for($i = 1; $i < 32; $i++) {
                                            echo "<option value=" . $i . ">" . $i . "</option>";
                                        }
                                    ?>
                                </select>
                                <select>
                                    <option disabled selected> Month </option>"
                                    <?php
                                    $month = array("Jan", "Feb","March","April", "May", "June", "July", "Aug", "Sep", "Oct", "Nov", "Dec");
                                    for($i = 0; $i <= 11; $i++){
                                        echo "<option value=" . $i . ">" . $month[$i] . "</option>";
                                    }
                                    ?>

                                </select>
                                <select>
                                    <option disabled selected> Year </option>"
                                    <?php
                                    for($i = 1997; $i <= 2007; $i++){
                                        echo "<option value=" . $i . ">" . $i . "</option>";
                                    }
                                    ?>
                                </select>
                            </td>
                        <tr>
                            <td align="right">
                                Gender
                            </td>
                            <td>
                                <input type="radio" name="gender" value="Male"/> Male
                                <input type="radio" name="gender" value="Female"/> Female
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
                            </td>
                        </tr>
                        <tr>
                            <td valign="right" align="right">
                                Bio:
                            </td>
                            <td>
                                <textarea name="bio">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit">register</td>
                        </tr>
                    </table>
                </form>
        </fieldset>
    </body>
</html>