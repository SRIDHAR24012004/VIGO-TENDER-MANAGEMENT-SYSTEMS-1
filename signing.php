<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // check if the username and password are correct
    // if yes, redirect to the home page
    // if no, display an error message
}

    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "vigo tender";
   

?>

<form method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username">
    <br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password">
    <br>
    <label for="retype password" name="password" id=" password"></label>
    <br>
    <input type="submit" value="Sign In">
</form>