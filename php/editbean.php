<?php
include("conn.php");

$uImage = $_FILES['image']['tmp_name'];

$uImg = file_get_contents($uImage);

$updateQuery = "UPDATE coffee_bean SET Coffee_Bean='$_POST[name]', Coffee_Bean_Image=?, Country='$_POST[country]', Roast='$_POST[roast]', Price_Per_kg='$_POST[price]', Description='$_POST[description]' WHERE Bean_ID='$_POST[id]';";

$stmt = mysqli_prepare($con,$updateQuery);

mysqli_stmt_bind_param($stmt,"s",$uImg);

mysqli_stmt_execute($stmt);

$check = mysqli_stmt_affected_rows($stmt);

if ($check == 1) {
    echo '<script>
    alert ("Successfully updated coffee bean and image!");
    window.location.href= "bean_a.php";
    </script>';
} else {
    echo '<script>
    alert ("Failed to update relevant files.");
    window.location.href= "bean_a.php";
    </script>';
}

mysqli_close($con);
?>