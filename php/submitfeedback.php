<?php
// Connect to database
include("conn.php");

// Customer Info and Feedback and Date
$customerID = $_SESSION['Customer_ID'];
$feedback = mysqli_real_escape_string($con, $_POST['feedback']);
$date = date('Y-m-d');

// MySQL Queries
$insertQuery = "INSERT INTO feedback (Customer_ID, Feedback, Date) VALUES ('$customerID', '$feedback', '$date');";

$insert = mysqli_query($con, $insertQuery);

if($insert)
{
    echo
    '<script>
    alert("Feedback submitted. Thank you for your time.");
    window.location.href = "feedback.php";
    </script>';
}
else
{
    echo
    '<script>
    alert("Failed to submit feedback. Please try again");
    
    </script>';
}

// Close connection to database
mysqli_close($con);
?>