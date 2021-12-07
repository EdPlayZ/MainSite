<?php
session_start();
$username = $_SESSION['username'];
$activepage = "Downloads";
$activeurl = 'downloads';
include_once 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta content="ZyalpNET Downloads "property="og:title" />
        <meta content="My downloads page" property="og:description" />
        <meta content="http://www.zyalp.com/main/downloads.php" property="og:url" />
    </head>
    <body>
        <div class="PageContent">
            <!-- Top PageContent -->
            <div class="top-of-page">
                <h1>Downloads</h1>
            </div>
            <div>
                <ul>
                    <li><h1>Paxelmon Reborn-0.1.0</h1><a class="abutton" href="http://www.zyalp.com/cdn/71307080/74248600/Paxelmon_Reborn-0.1.0.zip"><button class="dbutton">Download</button></a></li>
                </ul>
            </div>
            <!-- Bottom PageContent -->
        </div>
    </body>
</html>

<!-- Example Comment -->