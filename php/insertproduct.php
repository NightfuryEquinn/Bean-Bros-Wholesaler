
<?php
include("conn.php");

$uploadImage = $_FILES['bean_image']['tmp_name'];

$img = file_get_contents($uploadImage);

$sql="INSERT INTO coffee_bean(Coffee_Bean, Coffee_Bean_Image, Country, Roast, Price_Per_kg, Description) 
VALUES 
('$_POST[bean_name]', ? , '$_POST[price]', '$_POST[country]', '$_POST[roast]', '$_POST[desc]');";

$stmt = mysqli_prepare($con,$sql);

mysqli_stmt_bind_param($stmt,"s",$img);

mysqli_stmt_execute($stmt);

$check = mysqli_stmt_affected_rows($stmt);

if($check == 1) {
    echo '<script> alert ("1 record added! Image sucessfully uploaded!");
    window.location.href= "addproduct.php";
    </script>';

} else {
    echo '<script> alert ("Upload failed.");
    </script>';
}

mysqli_close($con);
?>