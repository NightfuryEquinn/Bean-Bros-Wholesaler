<?php
    include("conn.php");

    $selectData = $_GET['Order_ID'];

    $updateQuery = mysqli_query($con, "UPDATE customer_order SET Status = 'Completed' WHERE Order_ID = '$selectData';");

    if ($updateQuery) {
        echo '<script>
        alert ("Successfully change the order status!");
        window.location.href= "checkorder.php";
        </script>';
        
    } else {
        echo '<script>
        alert ("Unable to change the order status!");
        window.location.href= "checkorder.php";
        </script>';
    };

    mysqli_close($con);
?>