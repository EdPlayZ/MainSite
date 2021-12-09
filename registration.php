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
        if(isset($_POST['submit'])){
            //Gjøre om POST-data til variabler
            $username = $_POST['username'];
            $password = $_POST['password'];
            $invitekey = $_POST['invitekey'];
            //Koble til databasen
            $dbc = mysqli_connect('localhost', "$dbuser", "$dbpwd", "$dbname")
              or die('Error connecting to MySQL server.');
            
            //Gjøre klar SQL-strengen
            $salt=md5(rand());
            $sha256=hash('SHA256' , $password.$salt);

            $query = "INSERT into Logins values ('$username', '$sha256', '$salt')";
            $usrquery = "SELECT `Username` from `Logins` where `Username`='$username'";
            //Utføre spørringen
            
            
            $usrnamecheck = mysqli_query($dbc, $usrquery)
            or die('Error querying database.');
            
            if($invitekey == 'secret'){
                if($usrnamecheck->num_rows > 0){
                    session_start();
                    $_SESSION['errorcode'] = '2';
                    header('location: registration');
                }   
                else{
                    $result = mysqli_query($dbc, $query)
                    or die('Error querying database.');
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

                if($result){
                    //Login is valid
                    session_destroy();
                    session_start();
                    header('location: login');
                }
            }
    ?>
</html>