<?php
session_start();
$username = $_SESSION['username'];
$activepage = "Main Page";
$activeurl = 'faq';
include_once 'header.php';

?>

<html>
    <head>
        <meta content="ZyalpNET FAQ" property="og:title" />
        <meta content="Frequently Asked Questions" property="og:description" />
        <meta content="http://zyalp.com/main/<?php $activeurl?>" property="og:url" />
    </head>
    <body>
        <div class="PageContent">
            <div class="top-of-page">
                <h1>FAQ</h1>
            </div>
            <div>
                <h1>How is my data used?</h1>
                <p>The only information I store is the information you provided when you registered a user. Your username is stored in plain text, whilst your password is hashed and stored as a hash.</p>
                <h1>I want to delete my user account, how do I do this?</h1>
                <p>To delete your account you currently have to reach out to me. You can contact me on discord (Link to my discord server is on the home page.) Or alternatively via Email at catcap123@gmail.com</p>
                <h1>How do I provide feedback or report issues?</h1>
                <p>Currently the best way to give me feedback or report issues is to reach out to me on discord or send me an email at catcap123@gmail.com. A link to my discord server is available on the home page.</p>
            </div>
        </div>
    </body>
    <footer>

    </footer>
</html>