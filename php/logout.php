<?php
    // Destory a Session
    session_start();
    
    echo "<script>
    alert('You have successfully logout from Bean Bros.');
    </script>";

    header('location: ../home.html');

    session_unset();
    session_destroy();
?>