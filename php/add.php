<?php
include("conn.php");

$sql="INSERT INTO coffeepedia (Title, Coffeepedia_ID, Admin_ID, Content, Author, Written_Date) 
VALUES 
('$_POST[Name]', '$_POST[C_ID]', '$_POST[A_ID]', '$_POST[Content]', '$_POST[Author]', '$_POST[Date]');";

$stmt = mysqli_prepare($con,$sql);

mysqli_stmt_bind_param($stmt,"s",$img);

mysqli_stmt_execute($stmt);

$check = mysqli_stmt_affected_rows($stmt);

if($check == 1) {
    echo '<script> alert ("1 record added! Image sucessfully uploaded!");
    window.location.href= "";
    </script>';

} else {
    echo '<script> alert ("Upload failed.");
    window.location.href= "";
    </script>';
}

mysqli_close($con);
?>