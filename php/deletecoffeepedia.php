<?php
    include("conn.php");

    $selectData = $_GET['Coffeepedia_ID'];

    $deleteQuery = mysqli_query($con, "DELETE FROM coffeepedia WHERE Coffeepedia_ID = '$selectData';");

    if ($deleteQuery) {
        echo '<script>
        alert ("Successfully delete coffeepedia article!");
        window.location.href= "coffeepedia_a.php";
        </script>';
        
    } else {
        echo '<script>
        alert ("Unable to delete coffeepedia article!");
        window.location.href= "coffeepedia_a.php";
        </script>';
    };

    mysqli_close($con);
?>