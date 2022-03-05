<?php
    // Destory a Session
    session_start();
    header('location: ../home.html');

    echo "<script>
    alert('You have successfully logout from Bean Bros.');
    </script>";

    session_unset();
    session_destroy();
?>