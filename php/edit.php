<?php
    include("conn.php");
    $editID = intval($_GET["Coffeepedia_ID"]);
    $editData = mysqli_query($con, "SELECT * FROM coffeepedia WHERE Coffeepedia_ID=$editID");
    while($displayEdit = mysqli_fetch_array($editData)) {
?>

/* Insert code here */

<?php
    }
    mysqli_close($con);
?>