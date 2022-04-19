<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://www.zyalp.com/main/css/<?php echo $activeurl?>.css">
    <link rel="stylesheet" href="http://www.zyalp.com/main/css/global.css">
    <link rel="icon" type="image/gif" href="http://www.zyalp.com/cdn/69652518/83611728/white.png"/>
    <meta content="http://www.zyalp.com/cdn/69652518/83611728/white.png" property="og:image" />
    <meta content="#800080" data-react-helmet="true" name="theme-color" />
    <title><?php echo $activepage?></title>
</head>
<body>
    <!-- Top Menu -->
    <div class="MenuBar">
        <!-- Top Internal links -->
        <div class="Internal">
            <img src="http://www.zyalp.com/cdn/69772537/52859417/logo.svg" alt="X">
            <a class="white-hover" href="http://www.zyalp.com/main/index">Main Page</a>
            <span>•</span>
            <a class="white-hover" href="http://www.zyalp.com/main/aboutme">About Me</a>
            <span>•</span>
            <a class="white-hover" href="http://www.zyalp.com/main/content">Content</a>
            <span>•</span>
            <a class="white-hover" href="http://www.zyalp.com/main/downloads">Downloads</a>
            <?php
                if (isset($_SESSION['username']))
                echo '<span>•</span> <a class="white-hover" href="http://www.zyalp.com/main/search">Search</a>'
            ?>
            <img src="http://www.zyalp.com/cdn/69772537/52859417/logo.svg" alt="X">

        </div>
        <?php
        $username = $_SESSION['username'];
        if ($username){
            echo "<a class=\"white-hover\" href=\"http://www.zyalp.com/main/login\">$username</a>";
        }
        else {
            echo "<a class=\"white-hover\" href=\"http://www.zyalp.com/main/login\">Login</a>";
        }
        ?>
        
        <!-- Bottom Internal links -->
    </div>
    <!-- Bottom Menu -->
</body>