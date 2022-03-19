<?php
    include("conn.php");

    $selectData = $_GET['Customer_ID'];

    $deleteQuery = mysqli_query($con, "DELETE FROM customer WHERE Customer_ID = '$selectData';");

    if ($deleteQuery) {
        echo '<script>
        alert ("Successfully delete customer!");
        window.location.href= "checkcustomer.php";
        </script>';
        
    } else {
        echo '<script>
        alert ("Unable to delete customer!");
        window.location.href= "checkcustomer.php";
        </script>';
    };

    mysqli_close($con);
?>