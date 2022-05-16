<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://zyalp.com/css/<?php echo $activeurl?>.css">
    <link rel="stylesheet" href="http://zyalp.com/css/global.css">
    <link rel="icon" type="image/gif" href="http://zyalp.com/cdn/69652518/83611728/white.png"/>
    <meta content="http://zyalp.com/cdn/69652518/83611728/white.png" property="og:image" />
    <meta content="#800080" data-react-helmet="true" name="theme-color" />
    <title><?php echo $activepage?></title>
</head>
<body>
    <!-- Top Menu -->
    <div class="MenuBar">
        <!-- Top Internal links -->
        <div class="Internal">
            <img src="http://zyalp.com/cdn/69772537/52859417/logo.svg" alt="X">
            <a class="white-hover main" href="http://zyalp.com/index">Main Page</a>
            <span class="main">•</span>
            <a class="white-hover main" href="http://zyalp.com/aboutme">About Me</a>
            <span class="main">•</span>
            <a class="white-hover main" href="http://zyalp.com/content">Content</a>
            <span class="main">•</span>
            <a class="white-hover main" href="http://zyalp.com/downloads">Downloads</a>
            <span class="main">•</span>
            <a class="white-hover main" href="http://zyalp.com/faq">FAQ</a>
            <?php
                if (isset($_SESSION['username'])){
                    echo '<span>•</span> <a class="white-hover" href="http://zyalp.com/search">Search</a>';
                    echo '<span>•</span> <a class="white-hover" href="http://zyalp.com/toys">Toys</a>';
                }
            ?>
            <img src="http://zyalp.com/cdn/69772537/52859417/logo.svg" alt="X">
        </div>
        <?php
            $username = $_SESSION['username'];
            if ($username){
                echo "<a class=\"white-hover login\" href=\"http://zyalp.com/login\">$username</a>";
            }
            else {
                echo "<a class=\"white-hover login\" href=\"http://zyalp.com/login\">Login</a>";
            }
        ?>


        
        <!-- Bottom Internal links -->
    </div>
    <!-- Bottom Menu -->
</body>