<?php
// Connect to database
include("conn.php");

// Customer Info and Validations
$username = mysqli_real_escape_string($con, $_POST['username']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$check_password = mysqli_real_escape_string($con, $_POST['check_password']);
$contact_work = mysqli_real_escape_string($con, $_POST['contact_work']);
$contact_personal = mysqli_real_escape_string($con, $_POST['contact_personal']);

// MySQL Queries
$insert = "INSERT INTO customer (Username, Email, Password, Company_Contact, Personal_Contact) VALUES ('$_POST[username]', '$_POST[email]', '$_POST[password]', '$_POST[contact_work]', '$_POST[contact_personal]');";
$check_username = "SELECT * FROM customer WHERE Username = '$username'";
$check_email = "SELECT * FROM customer WHERE Email = '$email'";

$validate_username = mysqli_query($con, $check_username);
$validate_email = mysqli_query($con, $check_email);

// PHP
if($password == $check_password)
{
    if(mysqli_num_rows($validate_email) == 0) 
    {
        if(mysqli_num_rows($validate_username) == 0)
        {
            if(mysqli_query($con, $insert))
            {
                echo 
                '<script>
                alert("Thank you for signing up with Bean Bros. Please proceed to login.");
                window.location.href = "signuploginforgot.php";
                </script>';
            }
            else
            {
                echo 
                '<script>
                alert("Sign up failed. Please try again. Sorry for the inconvience.");
                window.location.href = "signuploginforgot.php";
                </script>';
            }
        }
        else
        {
            echo 
            '<script>
            alert("Username is already taken. Please try a different username.");
            window.location.href = "signuploginforgot.php";
            </script>';
        }
    } 
    else
    {
        echo 
        '<script>
        alert("There is an existing email address similiar to what you typed. Please login or try a different email address.");
        window.location.href = "signuploginforgot.php";
        </script>';
    }
} else 
{
    echo 
    '<script>
    alert("Passwords are not matching.");
    window.location.href = "signuploginforgot.php";
    </script>';
}

// Close connection to database
mysqli_close($con);
?>