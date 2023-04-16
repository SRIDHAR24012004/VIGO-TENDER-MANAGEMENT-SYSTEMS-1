<?php
// Start the session
session_start();

// Set up variables for form fields
$host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "vigo tender";
   
// Set up an error message variable
$error = "";

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate the form fields
    if (empty($_POST["username"])) {
        $error = "Name is required";
    } else {
        $name = test_input($_POST["username"]);
        // Check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
            $error = "Only letters and white space allowed for name";
        }
    }
    if (empty($_POST["email"])) {
        $error = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // Check if email address is valid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = "Invalid email format";
        }
    }
    if (empty($_POST["password"])) {
        $error = "Password is required";
    } else {
        $password = test_input($_POST["password"]);
        // Check if password meets minimum length requirements
        if (strlen($password) < 8) {
            $error = "Password must be at least 8 characters long";
        }
    }

    // If there are no errors, create a new user account
    if ($error == "") {
        // Connect to database and insert new user account
        $conn = mysqli_connect("localhost", "username", "password", "database name");
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        mysqli_query($conn, $sql);
        mysqli_close($conn);

        // Redirect to the login page
        header("Location: SIGNING PAGE.HTML");
        exit();
    }
}

// Function to sanitize form input data
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
</head>
<body>
    <h1>Sign Up</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        User Name: <input type="text" name="user name" value="<?php echo $username;?>"><br>
        Email: <input type="text" name="email" value="<?php echo $email;?>"><br>
        Password: <input type="password" name="password"><br>
        <span class="error"><?php echo $error;?></span><br>
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>
