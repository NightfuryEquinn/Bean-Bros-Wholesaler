<?php
include("conn.php");

$sql="INSERT INTO coffeepedia (Admin_ID, Title, Content, Author, Written_Date) 
VALUES 
('$_POST[a_id]', '$_POST[name]', '$_POST[content]', '$_POST[author]', '$_POST[date]');";

$stmt = mysqli_prepare($con,$sql);

mysqli_stmt_execute($stmt);

$check = mysqli_stmt_affected_rows($stmt);

if($check == 1) {
    echo '<script> alert ("1 record added!");
    window.location.href= "addcoffeepedia.php";
    </script>';

} else {
    echo '<script> alert ("Upload failed.");
    window.location.href= "addcoffeepedia.php";
    </script>';
}

mysqli_close($con);
?>