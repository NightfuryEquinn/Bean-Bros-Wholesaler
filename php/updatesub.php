<?php
    include("conn.php");

    include("session.php");

    $customerID = $_SESSION['Customer_ID'];

    $getSub = mysqli_real_escape_string($con, $_POST['sub']);

    $check_sub = "SELECT Subscription FROM customer WHERE Customer_ID = '$customerID';";

    $validateSub = mysqli_query($con, $check_sub);

    $row = mysqli_fetch_assoc($validateSub);

    $updateSub = "UPDATE customer SET Subscription = '$getSub' WHERE Customer_ID = '$customerID';";

    $updateSubQuery = mysqli_query($con, $updateSub);

    if($getSub == $row["Subscription"])
    {
        echo
        '<script>
        alert("Your subscription is the same as previous.");
        window.location.href = "customerprofile.php";
        </script>';
    }
    else
    {
        if($updateSubQuery)
        {
            echo
            '<script>
            alert("Subscription has changed. Bean Bros thanks for your support.");
            window.location.href = "customerprofile.php";
            </script>';
        }
        else
        {
            echo
            '<script>
            alert("Failed to change subscription. Please try again.");
            window.location.href = "customerprofile.php";
            </script>';
        }
    }
?>