
<?php session_start();
session_destroy();
header("Location: login.php?error=0");
    exit();
