<?php

session_start();
include '.env.php';
$username = $_SESSION['username'];
$usertype = $_SESSION['usertype'];
$activepage = "Profile: $username";
$activeurl = 'admin';
include 'header.php';

if ($usertype!="Administrator")
    header('location: userpage')

?>

<?php
    $dbc = mysqli_connect('localhost', "$dbuser", "$dbpwd", "$dbname")
    or die('Error connecting to MySQL server.');
    $query = mysqli_query($dbc, "SELECT `Username` from `Logins` WHERE `Usertype`!='Administrator'");
?>

<html>
    <body>
        <div class="PageContent">
            <div>
                <form method="post">
                    <select name="Users" id="Users">
                        <optgroup><?php while ($content = $query->fetch_assoc()) {
                        $name = $content['Username'];
                        $name = htmlspecialchars($name, ENT_QUOTES);
                        echo "<option value=\"$name\">$name</option>";
                    } ?></optgroup>
                    </select>
                    <input type="submit" value="Delete" name="deleteuser">
                </form>
                <?php 
                if(isset($_POST['deleteuser'])){
                    $selecteduser = $_POST['Users'];

                    $Deletequery = mysqli_query($dbc, "DELETE FROM `Logins` WHERE `Username` = '$selecteduser'");
                    header('location: admin');
                }
                ?>
            </div>
        </div>
    </body>
</html>