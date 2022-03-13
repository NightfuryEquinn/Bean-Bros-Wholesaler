<?php
    if (isset($_POST['submit'])) {
        include("conn.php");

        $name = trim($_POST['bean_name']);
        $image = trim($_POST['bean_image']);
        $country = trim($_POST['country']);
        $roast = trim($_POST['roast']);
        $price = trim($_POST['price']);
        $desc = trim($_POST['desc']);

        $sql = "INSERT INTO coffee_bean (Coffee_Bean, Coffee_Bean_Image, Country, Roast, Price_Per_kg, Description)
        VALUES 
        ('$name', '$image', '$country', '$roast', '$price', '$desc')";

        if(!mysqli_query($con,$sql)) {
            die('Error: '. mysqli_error($con));
            }
            else {
                print '<script>alert("1 record added!");
                window.location.href = "addproduct.php";
                </script>';
            }
        my_sqli_close($con);
        }

?>