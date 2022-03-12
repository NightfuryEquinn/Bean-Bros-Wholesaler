<?php
// Connect to database
include("conn.php");

// Start a session
session_start();

// Customer Info and Validation
$email = mysqli_real_escape_string($con, $_POST['email']);
$username = mysqli_real_escape_string($con, $_POST['new_username']);
$password = mysqli_real_escape_string($con, $_POST['password']);

// MySQL Queries
$check_email = "SELECT * FROM customer WHERE Email = '$email';";

$validate_email = mysqli_query($con, $check_email);

if(mysqli_num_rows($validate_email) == 1)
{
    $update_username = "UPDATE customer SET Username = '$username' WHERE Email = '$email';";

    if(mysqli_query($con, $update_username))
    {
        echo
        '<script>
        alert("Username has changed. Please login again.");
        window.location.href = "signuploginforgot.php";
        </script>';
    }
    else
    {
        echo
        '<script>
        alert("Email address is incorrect. Please re-enter.");
        window.location.href = "signuploginforgot.php";
        </script>';
    }
}

// Close connection to database
mysqli_close($con);
?>