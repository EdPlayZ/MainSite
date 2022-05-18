<?php
session_start();
$username = $_SESSION['username'];
$activepage = "About Me";
$activeurl = 'aboutme';
include_once 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta content="ZyalpNET About me" property="og:title" />
        <meta content="About the creator of ZyalpNET" property="og:description" />
        <meta content="http://zyalp.com/main/<?php $activeurl?>" property="og:url" />
    </head>
    <body>
        <div class="PageContent">
            <!-- Beginning of PageContent -->
            <div class="top-of-page">
                <h1>About Me!</h1>
            </div>
            <div class="top-of-page-cont">
                <p>An 19 year old furry IT student from Norway. Currently working on a mix of development and management.</p>
            </div>
            <div class="me">
                <img src="./files/rastered.png" alt="X">
            </div>
            <!-- End of PageContent -->
        </div>
    </body>
</html>

<!-- Example Comment -->