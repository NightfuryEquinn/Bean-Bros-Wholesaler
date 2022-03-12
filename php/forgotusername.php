<?php
// Connect to database
include("conn.php");

// Start a session
session_start();

// Customer Info and Validation
$email = mysqli_real_escape_string($con, $_POST['email']);
$new_username = mysqli_real_escape_string($con, $_POST['new_username']);
$password = mysqli_real_escape_string($con, $_POST['password']);

// MySQL Queries
$check_email = "SELECT * FROM customer WHERE Email = '$email';";
$check_username = "SELECT * FROM customer WHERE Username = '$new_username';";
$check_password = "SELECT * FROM customer WHERE Password = '$password';";

$validate_email = mysqli_query($con, $check_email);
$validate_username = mysqli_query($con, $check_username);
$validate_password = mysqli_query($con, $check_password);

$update_username = "UPDATE customer SET Username = '$new_username' WHERE Email = '$email' AND Password = '$password';";

if(mysqli_num_rows($validate_email) == 1)
{
    if(mysqli_num_rows($validate_username) == 0) 
    {
        if(mysqli_num_rows($validate_password) == 1)
        {
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
                alert("Failed to change username. Please try again.");
                window.location.href = "signuploginforgot.php";
                </script>';
            }
        }
        else
        {
            echo
            '<script>
            alert("Password is incorrect. Please re-enter.");
            window.location.href = "signuploginforgot.php";
            </script>';
        }
    }
    else
    {
        echo
        '<script>
        alert("Username is already taken. Please re-enter.");
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

// Close connection to database
mysqli_close($con);
?>