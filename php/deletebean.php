<?php
    include("conn.php");

    $selectData = $_GET['Bean_ID'];

    $deleteQuery = mysqli_query($con, "DELETE FROM coffee_bean WHERE Bean_ID = '$selectData';");

    if ($deleteQuery) {
        echo '<script>
        alert ("Successfully delete coffee bean!");
        window.location.href= "bean_a.php";
        </script>';
        
    } else {
        echo '<script>
        alert ("Unable to delete coffee bean!");
        window.location.href= "bean_a.php";
        </script>';
    };

    mysqli_close($con);
?>