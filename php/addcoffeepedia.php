<?php
    include("conn.php");

    $insertQuery = "INSERT INTO coffeepedia (Admin_ID, Title, Content, Author, Written_Date)
    VALUES
    ('1', '$_POST[title]', '$_POST[content]', '$_POST[author]', '$_POST[date]');";

    $insert = mysqli_query($con, $insertQuery);

    if ($insert) {
        echo '<script>
        alert ("Successfully add coffeepedia article!");
        window.location.href= "coffeepedia_a.php";
        </script>';
    } else {
        echo '<script>
        alert ("Failed to add coffeepedia article.");
        window.location.href= "coffeepedia_a.php";
        </script>';
    }

    mysqli_close($con);
?>