<?php
session_start();
if (!isset($_SESSION['connect']) || $_SESSION['connect']!=true ) {
    header("Location: login.php?error=2");
    exit();
}
?>
