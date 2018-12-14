<?php
    session_start();
    unset($_SESSION['username']);
    header("refresh:0;url=login.php");
?>