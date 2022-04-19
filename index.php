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
        <meta content="http://zyalp.com/index.php" property="og:url" />
    </head>
    <body id="body">
        <div class="PageContent">
            <!-- Top PageContent -->
            <div class="top-of-page">
                <h1><img class="HeadLogo" src="http://zyalp.com/cdn/75680880/71538576/white_flat.png" alt="X">ZyalpNET<img class="HeadLogo" src="http://zyalp.com/cdn/75680880/71538576/white_flat.png" alt="X"></h1>
                <p>Welcome to ZyalpNET! developed and maintained by Ed_PlayZ. This site is mainly my own personal playground but I'll link a few socials here.</p>
            </div>
            <div class="Socials">
                <p>Socials</p>
                <!-- Top External links -->
                <div class="External">
                    <a href="https://yt.zyalp.com"><img src="http://zyalp.com/cdn/48517997/73742221/youtube.png" alt="X">My Youtube</a>
                    <a href="https://tv.zyalp.com"><img src="http://zyalp.com/cdn/24212757/64963650/twitch.png" alt="X">My Twitch</a>
                    <a href="https://disc.zyalp.com"><img src="http://zyalp.com/cdn/15697281/87686985/discord.png" alt="X">My Discord</a>
                    <a href="https://twit.zyalp.com"><img src="http://zyalp.com/cdn/95329615/79682296/twitter.png" alt="X">My Twitter</a>
                    <a href="https://steam.zyalp.com"><img src="http://zyalp.com/cdn/96875514/85479844/steam.png" alt="X">My Steam</a>
                </div> 
                <!-- Bottom External links -->
            </div>
            <div class="grid-container">
                <div class="grid-box" id="grid-1">
                    <img src="http://zyalp.com/cdn/69652518/83611728/white.png" alt="X">
                </div>

                <div class="grid-box" id="grid-2">
                    <h1>What's New?</h1>
                    <p>19/04/2022</p>
                    <p>It has been 12 years, but progress is finally going forward now that I am back in school. Please never let me do this shit again. Rewriting things is pain.</p>
                </div>

                <div class="grid-box" id="grid-3">
                    <img src="http://zyalp.com/files/background.jpg" alt="X">
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
        <script src="http://zyalp.com/scripts/CurrentTime.js"></script>
        <script src="http://zyalp.com/scripts/ServerStatus.js"></script>  
    </footer>
</html>

<!-- Example Comment -->