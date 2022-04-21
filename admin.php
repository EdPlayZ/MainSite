<?php

session_start();
include '.env.php';
$username = $_SESSION['username'];
$usertype = $_SESSION['usertype'];
$activepage = "Profile: $username";
$activeurl = 'admin';
include 'header.php';

if ($usertype!="Administrator")
    header('location: userpage')

?>