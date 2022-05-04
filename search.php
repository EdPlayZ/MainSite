<?php
session_start();
$username = $_SESSION['username'];
$activepage = "Search";
$activeurl = 'search';
include '.env.php';
include 'header.php';

if (!isset($_SESSION['username'])){
    header('location: login.php');
    $_SESSION['return'] = "search";
}
    
    
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
            <input class="searchbar" type="text" placeholder="Search Here" data-table="mc-table">
            <div class=button-container>
                <button class="MC-UUID-Button">MC-UUID</button>                
                <button>D</button>
            </div>
            <?php

            echo '<div class="MC-UUID"><table class="mc-table">';
            echo"<tr><th>Name</th><th>UUID</th></tr>";
            while ($content = $query->fetch_assoc()) {
                $name = $content['Name'];
                $uuid = $content['UUID'];
                echo "<tr class=\"wrapper\"><th class=\"user\">$name</th><td class=\"uuid\">$uuid</td></tr>";
            }
            echo '</table></div>';
            ?>
            <!-- Bottom PageContent -->
        </div>
    </body>
    <footer>
        <script src="http://www.zyalp.com/main/scripts/search.js"></script>
    </footer>
</html>

<!-- Example Comment -->