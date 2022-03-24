<?php
    // Start a Admin Session
    session_start();
    if(!isset($_SESSION['Admin_ID']))
    {
        header("location: signuploginforgot.php");
    }
?>