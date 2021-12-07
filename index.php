<?php
session_start();
$username = $_SESSION['username'];
$activepage = "Main Page";
$activeurl = 'index';
include_once 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta content="ZyalpNET Main Page" property="og:title" />
        <meta content="The main page for ZyalpNET" property="og:description" />
        <meta content="http://www.zyalp.com/main/index.php" property="og:url" />
    </head>
    <body id="body">
        <div class="PageContent">
            <!-- Top PageContent -->
            <div class="top-of-page">
                <h1><img class="HeadLogo" src="http://www.zyalp.com/cdn/75680880/71538576/white_flat.png" alt="X">ZyalpNET<img class="HeadLogo" src="http://www.zyalp.com/cdn/75680880/71538576/white_flat.png" alt="X"></h1>
                <p>Welcome to ZyalpNET! developed by Ed_PlayZ, This place is used to hone my skills in HTML and CSS coding so that i may use it in future projects.</p>
            </div>
            <div class="Socials">
                <p>Socials</p>
                <!-- Top External links -->
                <div class="External">
                    <a href="https://yt.zyalp.com"><img src="http://www.zyalp.com/cdn/48517997/73742221/youtube.png" alt="X">My Youtube</a>
                    <a href="https://tv.zyalp.com"><img src="http://www.zyalp.com/cdn/24212757/64963650/twitch.png" alt="X">My Twitch</a>
                    <a href="https://disc.zyalp.com"><img src="http://www.zyalp.com/cdn/15697281/87686985/discord.png" alt="X">My Discord</a>
                    <a href="https://twit.zyalp.com"><img src="http://www.zyalp.com/cdn/95329615/79682296/twitter.png" alt="X">My Twitter</a>
                    <a href="https://steam.zyalp.com"><img src="http://www.zyalp.com/cdn/96875514/85479844/steam.png" alt="X">My Steam</a>
                </div> 
                <!-- Bottom External links -->
            </div>
            <div class="grid-container">
                <div class="grid-box" id="grid-1">
                    <img src="http://www.zyalp.com/cdn/69652518/83611728/white.png" alt="X">
                </div>

                <div class="grid-box" id="grid-2">
                    <h1>What's New?</h1>
                    <p>12/11/2021</p>
                    <p>With Christmas rapidly approaching, I have started working on this again. Aiming to add a few random features here and there.</p>
                </div>

                <div class="grid-box" id="grid-3">
                    <img src="http://www.zyalp.com/main/files/background.jpg" alt="X">
                </div>

                <div class="grid-box" id="grid-4">
                    <h1>mc1.zyalp.com</h1>
                    <p>Status:</p>
                    <p id="mc1-zyalp-status" class="false">Error</p>
                    <p>Logging:</p>
                    <p id="mc1-zyalp-logging" class="false">Disabled</p>
                </div>

                <div class="grid-box" id="grid-5">
                    <h1>The Void of Time</h1>
                    <p>Time</p>
                    <p id="hhmmss">HH:MM:SS</p>
                    <p>Date</p>
                    <p id="ddmmyyyy">DD/MM/YYYY</p>
                </div>

                <div class="grid-box" id="grid-6">
                    <h1>scp1.zyalp.com</h1>
                    <p>Status:</p>
                    <p id="scp1-zyalp-status" class="false">Error</p>
                    <p>Logging:</p>
                    <p id="scp1-zyalp-logging" class="false">Disabled</p>
                </div>
            </div>
            <!-- Bottom PageContent -->
        </div>
    </body>
    <footer>
        <script src="http://www.zyalp.com/main/scripts/CurrentTime.js"></script>
        <script src="http://www.zyalp.com/main/scripts/ServerStatus.js"></script>  
    </footer>
</html>

<!-- Example Comment -->