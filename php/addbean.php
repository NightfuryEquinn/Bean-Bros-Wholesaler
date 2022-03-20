<?php
include("conn.php");

$uploadImage = $_FILES['image']['tmp_name'];

$img = file_get_contents($uploadImage);

$sql="INSERT INTO coffee_bean (Coffee_Bean, Coffee_Bean_Image, Country, Roast, Price_Per_kg, Description) 
VALUES 
('$_POST[name]', ?, '$_POST[country]', '$_POST[roast]', '$_POST[price]', '$_POST[description]');";

$stmt = mysqli_prepare($con,$sql);

mysqli_stmt_bind_param($stmt,"s",$img);

mysqli_stmt_execute($stmt);

$check = mysqli_stmt_affected_rows($stmt);

if($check == 1) {
    echo '<script> alert ("New coffee beans in stock! Image uploaded.");
    window.location.href= "addbeanpage.php";
    </script>';

} else {
    echo '<script> alert ("Upload failed.");
    window.location.href= "addbeanpage.php";
    </script>';
}

mysqli_close($con);
?>