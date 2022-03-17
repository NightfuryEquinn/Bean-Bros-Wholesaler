<!--Delete Data-->
<?php
    include("conn.php");

    $selectData = intval($_GET['Coffeepedia_ID']);

    $deleteQuery = mysqli_query($con, "DELETE FROM coffeepedia WHERE Coffeepedia_ID=$selectData;");

    if ($deleteQuery) {
        echo '<script>
        alert ("Successfully delete data and image!");
        window.location.href= "adminhomepage.php";
        </script>';
        
    } else {
        echo '<script>
        alert ("Unable to delete data and image!");
        window.location.href= "adminhomepage.php";
        </script>';
    };

    mysqli_close($con);
?>