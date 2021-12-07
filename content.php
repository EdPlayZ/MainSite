<?php
session_start();
$username = $_SESSION['username'];
$activepage = "Content";
$activeurl = 'content';
include_once 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta content="ZyalpNET Content" property="og:title" />
        <meta content="Youtube Content" property="og:description" />
        <meta content="http://www.zyalp.com/main/content" property="og:url" />
    </head>
    <body>
        <div class="PageContent">
            <!-- Beginning of PageContent -->
            <div class="top-of-page">
                <h1>Content</h1>
            </div>
            <div class="top-of-page-cont">
                <p>On my free time I sometimes record and edit videos, usually taken from livestreams. This page showcases the videos on my main channel.</p>
            </div>
            <div class="PrimaryContainer">
                <div class="YT">
                    <p>SCP: Secret Labratory but pink candy is a thing</p>
                    <iframe src="https://www.youtube.com/embed/_oYNk0rgmhQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="YT">
                    <p>Agrou: But Rob Is the Angel</p>
                    <iframe src="https://www.youtube.com/embed/OvoJa0ZIJF0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="YT">
                    <p>Agrou: Guns, Werewolves and Angels</p>
                    <iframe src="https://www.youtube.com/embed/hLHkJpMKkaM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="YT">
                    <p>Smoothie Brainie Ed || Project Winter</p>
                    <iframe src="https://www.youtube.com/embed/w9oIMOWKO9M" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="YT">
                    <p>Betray Your Friends || Project Winter</p>
                    <iframe src="https://www.youtube.com/embed/O5YNyR-EMMw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="YT">
                    <p>Jadiz Nuts || Deep Rock Galactic</p>
                    <iframe src="https://www.youtube.com/embed/ZSq_rR2Dwmc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="YT">
                    <p>The Victory From (Netherite) Scraps || Minecraft Hardcore</p>
                    <iframe src="https://www.youtube.com/embed/nbBb6GCNrQA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <!-- End of PageContent -->
        </div>
    </body>
</html>

<!-- Example Comment -->