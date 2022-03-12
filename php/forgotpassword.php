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

// MySQL Queries
$check_email = "SELECT * FROM customer WHERE Email = '$email';";
$check_username = "SELECT * FROM customer WHERE Username = '$username';";

$validate_email = mysqli_query($con, $check_email);
$validate_username = mysqli_query($con, $check_username);

$update_password = "UPDATE customer SET Password = '$new_password' WHERE Username = '$username' AND Email = '$email';";

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
    if(mysqli_num_rows($validate_email) == 1)
    {
        if(mysqli_num_rows($validate_username) == 1)
        {
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
                alert("Failed to change password. Please try again.");
                window.location.href = "signuploginforgot.php";
                </script>';
            }
        }
        else
        {
            echo
            '<script>
            alert("Username is incorrect. Please login again.");
            window.location.href = "signuploginforgot.php";
            </script>';
        }
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