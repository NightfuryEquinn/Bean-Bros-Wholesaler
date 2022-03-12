<?php
// Connect to database
include("conn.php");

// Start a session
session_start();

// Customer Info
$email = mysqli_real_escape_string($con, $_POST['email']);
$username = mysqli_real_escape_string($con, $_POST['username']);
$new_password = mysqli_real_escape_string($con, $_POST['new_password']);
$confirm_password = mysqli_real_escape_string($con, $_POST['confirm_password']);

if($new_password !== $confirm_password)
{
    echo
    '<script>
    alert("Passwords are not matching. Please re-enter.");
    window.location.href = "signuploginforgot.php";
    </script>';
}
else
{
    // MySQL Queries
    $update_password = "UPDATE customer SET Password = '$new_password' WHERE Username = '$username' AND Email = '$email';";

    if(mysqli_query($con, $update_password))
    {
        echo
        '<script>
        alert("Password has changed. Please login again.");
        window.location.href = "signuploginforgot.php";
        </script>';
    }
    else
    {
        echo
        '<script>
        alert("Either username or email is incorrect. Please re-enter.");
        window.location.href = "signuploginforgot.php";
        </script>';
    }
}

// Close connection to database
mysqli_close($con);
?>