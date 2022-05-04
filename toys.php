<?php
session_start();
$username = $_SESSION['username'];
$activepage = "Main Page";
$activeurl = 'toys';
include_once 'header.php';
if (!isset($_SESSION['username'])){
    header('location: login');
    $_SESSION['return'] = "toys";
}

?>
<html>
    <head>
        <meta content="ZyalpNET Toys" property="og:title" />
        <meta content="A playground of things" property="og:description" />
        <meta content="http://zyalp.com/main/<?php $activeurl?>" property="og:url" />
    </head>
    <body>
        <div class="Page">
            <div class="PageNav">
                <button id="wfmselector">Warframe Selector</button>
                <button id="Other">Other cool toy</button>
            </div>
            <div class="PageContent">
                <div class="WarframeSelector">
                    <button class="wfmSelectButton">Select Warframe</button>
                    <p class="selectedwarframe">Selected warframe:</p>
                </div>
                <div class="Other">
                    <p>Hello :)</p>
                </div>
            </div>
        </div>

    </body>
    <footer>
        <script src="http://zyalp.com/scripts/toystoggle.js"></script>
        <script src="http://zyalp.com/scripts/wfmselector.js"></script>
    </footer>
</html>