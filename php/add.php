<?php
include("conn.php");

$sql="INSERT INTO coffeepedia (Admin_ID, Title, Content, Author, Written_Date) 
VALUES 
('$_POST[a_id]', '$_POST[name]', '$_POST[content]', '$_POST[author]', '$_POST[date]');";
$insert = mysqli_query($con, $sql);

if ($insert) {
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