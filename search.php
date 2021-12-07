<?php
session_start();
$username = $_SESSION['username'];
$activepage = "Search";
$activeurl = 'search';
include '.env.php';
include 'header.php';

if (!isset($_SESSION['username']))
    header('location: login.php');
    
    $dbc = mysqli_connect('localhost', "$dbuser", "$dbpwd", "$dbname")
    or die('Error connecting to MySQL server.');
    $query = mysqli_query($dbc, "SELECT * from `MC-UUID`");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta content="ZyalpNET Search" property="og:title" />
        <meta content="search page" property="og:description" />
        <meta content="http://www.zyalp.com/main/search" property="og:url" />
    </head>
    <body>
        <div class="PageContent">
            <!-- Top PageContent -->
            <input class="searchbar" type="text" placeholder="Search Here">
            <div class=button-container>
                <button onclick="showUUID()">MC-UUID</button>                
                <button>D</button>
            </div>
            <?php

            echo '<table class="MC-UUID">';
            echo"<tr><th>Name</th><th>UUID</th></tr>";
            while ($content = $query->fetch_assoc()) {
                $name = $content['Name'];
                $uuid = $content['UUID'];
                echo "<tr><th>$name</th><td>$uuid</td></tr>";
            }
            echo '</table>';
            ?>
            <!-- Bottom PageContent -->
        </div>
    </body>
    <footer>
        <script src="http://www.zyalp.com/main/scripts/search.js"></script>
    </footer>
</html>

<!-- Example Comment -->