<?php
// Connect to database
include("conn.php");

// Confirm server method POST
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    // Customer Info
    $pending_username = mysqli_real_escape_string($con, $_POST['username']);
    $pending_password = mysqli_real_escape_string($con, $_POST['password']);

    // If Admin
    if($pending_username == 'Admin' && $pending_password == 'admin')
    {
        session_start();
        $_SESSION['Admin_ID'] = '1';

        echo
        '<script>
        alert("Login successful. Welcome to Bean Bros Admin!");
        window.location.href = "adminhome.php";
        </script>';
    }
    else
    {
        // MySQL Queries
        $getID = "SELECT Customer_ID FROM customer WHERE Username = '$pending_username' AND Password = '$pending_password';";
            
        // Get customer ID
        $findID = mysqli_query($con, $getID);

        if($findID)
        {
            $rowCount = mysqli_num_rows($findID);
        
            if($rowCount == 1)
            {
                session_start();
                $fetchID = mysqli_fetch_assoc($findID);
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
        }
        else
        {
            echo
            '<script>
            alert("SQL Localhost Error.");
            window.location.href = "signuploginforgot.php";
            </script>';
        };
    };
};

// Close connection to database
mysqli_close($con);
?>