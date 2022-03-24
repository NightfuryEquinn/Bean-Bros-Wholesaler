<?php
    include("conn.php");

    $updateQuery = "UPDATE coffeepedia SET Admin_ID='1', Title='$_POST[title]', Content='$_POST[content]', Author='$_POST[author]', Written_Date='$_POST[date]' WHERE Coffeepedia_ID='$_POST[id]';";

    $update = mysqli_query($con, $updateQuery);

    if ($update) {
        echo '<script>
        alert ("Successfully updated coffeepedia article!");
        window.location.href= "coffeepedia_a.php";
        </script>';
    } else {
        echo '<script>
        alert ("Failed to update coffeepedia article.");
        window.location.href= "coffeepedia_a.php";
        </script>';
    }

    mysqli_close($con);
?>