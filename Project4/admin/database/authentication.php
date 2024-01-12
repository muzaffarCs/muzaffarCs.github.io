<?php
include "connection.php";
session_start();
if(!isset($_SESSION['auth']))
{
    $_SESSION['status'] = "login to Access Admin Panel";
    header("Location: login.php");
    unset($_SESSION['status']);
    exit(0);
}
?>