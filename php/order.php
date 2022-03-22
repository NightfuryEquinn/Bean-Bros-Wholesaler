<?php
    include("conn.php");

    $customerID = '2';

    $beanID = mysqli_real_escape_string($con, $_POST['coffee-bean']);
    $beanAmount = mysqli_real_escape_string($con, $_POST['amount']);

    // MySQL Queries
    $getDate = date('Y-m-d');

    $getBeanData = mysqli_query($con, "SELECT * FROM coffee_bean WHERE Bean_ID = '$beanID';");

    $row = mysqli_fetch_assoc($getBeanData);

    $insertData = "INSERT INTO customer_order (Customer_ID, Bean_ID, Coffee_Bean, Amount, Price_Per_kg, Total, Status, Order_Date) 
    VALUES 
    ('$customerID', '$beanID', '$row[Coffee_Bean]', '$beanAmount', '$row[Price_Per_kg]', ('$beanAmount' * '$row[Price_Per_kg]'), 'Pending', '$getDate');";

    $insertQuery = mysqli_query($con, $insertData);

    if($insertQuery)
    {
        echo 
        '<script>
        alert("Your order has been confirmed. You can view it in your order history\nBean Bros invites you to come to our factory and inspect the coffee beans you ordered.\nPayment will be made face-to-face, no online transaction available to ensure payment is successful and valid.");
        window.location.href = "customerprofile.php";
        </script>';
    }
    else
    {
        echo 
        '<script>
        alert("Failed to make order. Please try again later.");
        
        </script>';
    }

    mysqli_close($con);
?>