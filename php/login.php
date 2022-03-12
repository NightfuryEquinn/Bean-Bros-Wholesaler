<?php
// Connect to database
include("conn.php");

// Start a session
session_start();

// Confirm server method POST
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    // Customer Info
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];

    $pending_username = mysqli_real_escape_string($con, $input_username);
    $pending_password = mysqli_real_escape_string($con, $input_password);

    // MySQL Queries
    $login = "SELECT * FROM customer WHERE Username = '$pending_username' AND Password = '$pending_password';";
    $getID = "SELECT Customer_ID FROM customer WHERE Username = '$pending_username';";

    // Get customer ID
    $findID = mysqli_query($con, $getID);

    if($findID)
    {
        $fetchID = mysqli_fetch_assoc($findID);
     
        if($result = mysqli_query($con, $getID))
        {
            $rowCount = mysqli_num_rows($result);
        
            if($rowCount == 1)
            {
                session_start();
                $_SESSION['Customer_ID'] = $fetchID['Customer_ID'];

                echo
                '<script>
                alert("Login successful. Welcome to Bean Bros!");
                window.location.href = "home.php";
                </script>';
            }
            else
            {
                echo
                '<script>
                alert("Either username or password is incorrect. Please try again.");
                window.location.href = "signuploginforgot.php";
                </script>';
            };
        };
    };
};

// Close connection to database
mysqli_close($con);
?>