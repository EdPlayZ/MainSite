<?php
session_start();
include '.env.php';
$username = $_SESSION['username'];
$activepage = "Profile: $username";
$activeurl = 'userpage';
include 'header.php';
if (!isset($_SESSION['username']))
    header('location: login')
?>
?>

<div class='PageContent'>
    <h1>You are currently logged in as: <?php echo $username?></h1>
    <p>Thank you for signing up to my website, I am currently hard at work expanding the featureset of being logged in. Currently I am working on a search funtion with some other databases</p>
    <form method="post">
        <input type="password" name="oldpassword">
        <input type="password" name="newpassword">
        <input type="submit" name="reset">
    </form>
        <form method="post">
            <input class="submit" type="submit" value="Log Out" name="logout">
        </form>
</div>

<?php
    if(isset($_POST['reset'])){
        $username = $_SESSION['username'];
        $oldpassword=$_POST['oldpassword'];
        $newpassword=$_POST['newpassword'];

        $dbc = mysqli_connect('localhost', 'htaccess', 'ajOYkPysIpw8Kiz0', 'PrimaryDB')
        or die('Error connecting to MySQL server.');
        $Salt = mysqli_query($dbc, "SELECT `Salt` from `Logins` where `Username`='$username'");

        $row = $Salt->fetch_assoc();
        $salt = $row['Salt'];           
        $hashedpass=hash('sha256', $oldpassword.$salt);

        $query = "SELECT `Username`, `Password` from `Logins` where `Username`='$username' and `Password`='$hashedpass'";

        $result = mysqli_query($dbc, $query)
        or die('Error querying database.');

        if($result->num_rows > 0){
            $newsalt=md5(rand());
            $sha256=hash('SHA256' , $newpassword.$newsalt);
            $query2 = "UPDATE `Logins` SET `Password` = '$sha256', `Salt` = '$newsalt' WHERE `Username` = '$username'";
            $result2 = mysqli_query($dbc, $query2)
            or die('Error querying database.');
        }
        mysqli_close($dbc);
        if($result2){
            //Gyldig login
            session_destroy();
            session_start();
            header('location: login');
        }else{
            //Ugyldig login
            echo"failed";
            header('location: index');
        }
    }

    if(isset($_POST['logout'])){
        echo'button pressed';
        session_destroy();
        header('location: login');
}

?>