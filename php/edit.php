<?php
include("conn.php");

$editID="45";

$UpdateQuery = "UPDATE coffeepedia SET Admin_ID='$_POST[a_id]', Title='$_POST[name]', Content='$_POST[content]', Author='$_POST[author]', Written_Date='$_POST[date]' WHERE Coffeepedia_ID='$editID';";
$update = mysqli_query($con, $UpdateQuery);

if ($update) {
    echo '<script> alert ("1 record updated!");
    window.location.href= "coffepedia_a.php";
    </script>';

} else {
    echo '<script> alert ("Upload failed.");
    window.location.href= "coffeepedia_a.php";
    </script>';
}

mysqli_close($con);
?>