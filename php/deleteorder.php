<?php
    include("conn.php");

    $selectData = $_GET['Order_ID'];

    $deleteQuery = mysqli_query($con, "DELETE FROM customer_order WHERE Order_ID = '$selectData';");

    if ($deleteQuery) {
        echo '<script>
        alert ("Successfully delete order!");
        window.location.href= "checkorder.php";
        </script>';
        
    } else {
        echo '<script>
        alert ("Unable to delete order!");
        window.location.href= "checkorder.php";
        </script>';
    };

    mysqli_close($con);
?>