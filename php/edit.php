<?php
include("conn.php");

$UpdateQuery = "UPDATE coffeepedia SET Admin_ID='$_POST[a_id]', Title='$_POST[name]', Content='$_POST[content]', Author='$_POST[author]', Written_Date='$_POST[date]', WHERE Coffeepedia_ID='$_POST[c_id]';";

$stmt = mysqli_prepare($con,$UpdateQuery);

mysqli_stmt_bind_param($stmt,"s");

mysqli_stmt_execute($stmt);

$check = mysqli_stmt_affected_rows($stmt);

if ($check == 1) {
    echo '<script>
    alert ("Successfully updated record!");
    window.location.href= "editcoffeepedia.php";
    </script>';
} else {
    echo '<script>
    alert ("Failed to update relevant files.");
    window.location.href= "editcoffeepedia.php";
    </script>';
}

mysqli_close($con);
?>