<?php
session_start();
$username = $_SESSION['username'];
$errorcode = $_SESSION['errorcode'];
$activepage = "Register New User";
$activeurl = 'registration';
include '.env.php';
include 'header.php';
include 'errorcodes.php';
?>

<html>
    <head>
        <meta content="ZyalpNET Register User" property="og:title" />
        <meta content="Registration page" property="og:description" />
        <meta content="http://www.zyalp.com/main/registration.php" property="og:url" />
    </head>
    <body>
        <div class="PageContent">
            <h1>Register a new user</h1>
            <form method="post">
                <label for="username">Username:</label>
                <input type="text" name="username" placeholder="Username"/><br />
                <label for="password">Password:</label>
                <input type="password" name="password" placeholder="Password"/><br />
                <label for="invitekey">Invitation Key:</label>
                <input type="text" name="invitekey" placeholder="Invite Key"/><br />
                
                <input class="submit" type="submit" value="Register" name="submit" />
                
                <?php
                echo$errorcode;
                switch ($errorcode) {
                    case 0:
                        unset($_SESSION['errorcode']);
                        break;
                    case 2:
                        echo "<p class=\"failedlogin\">$error_2</p>";
                        unset($_SESSION['errorcode']);
                        break;
                    case 3:
                        echo "<p class=\"failedlogin\">$error_3</p>";
                        unset($_SESSION['errorcode']);
                        break;
                }
                ?>
            </form>
            <p>Registering a user does not really do much right now, more features might come later<br>your password is stored as a SHA256 salted hash</p>
        </div>
    </body>
    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
        if(isset($_POST['submit'])){
            //Converting the POST data into variables
            $username = $_POST['username'];
            $password = $_POST['password'];
            $invitekey = $_POST['invitekey'];

            //Creating the connection to the database
            $dbc = mysqli_connect('localhost', "$dbuser", "$dbpwd", "$dbname")
              or die('Error connecting to MySQL server.');
            
            //defining some variables
            $salt=md5(rand());
            $sha256=hash('SHA256' , $password.$salt);
            $usertype="Standard";

            $usrquery = $dbc->prepare("SELECT `Username` from `Logins` where `Username`= ?");
            $usrquery->bind_param("s",$username);
            $usrquery->execute();
            $result = $usrquery->get_result();

            
            if($invitekey == $secretkey){
                if($result->num_rows > 0){
                    session_start();
                    $_SESSION['errorcode'] = '2';
                    header('location: registration');
                }   
                else{
                    $insertquery = $dbc->prepare("INSERT into Logins values ('$usertype', ? , '$sha256', '$salt')");
                    $insertquery->bind_param("s",$username);
                    $insertquery->execute();
                    session_start();
                    $_SESSION['username'] = $username;
                    $_SESSION['usertype'] = "Standard";
                    header('location: userpage');
                }
            }
            else{
                session_start();
                $_SESSION['errorcode'] = '3';
                header('location: registration');
            }
            //Koble fra databasen
            mysqli_close($dbc);


            //Checking if Username is already taken


            }
    ?>
</html>