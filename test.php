<html>
    Hello from HTML<br>
</html>

<?php
/*    $dbc = mysqli_connect('localhost', 'root', 'r00t', 'TestBase')
    or die('Error connecting to MySQL server.');
    $username='test';

    $Salt = mysqli_query($dbc, "SELECT `Salt`, `Password` from `Logins` where `Username`='$username'");

    $row = $Salt->fetch_assoc();
    $salt = $row['Salt'];
    $password = 'test';
    $hashedpass=hash('sha256', $password.$salt);
    
    echo($hashedpass)
    */
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randstr = md5(rand());
    echo($randstr);
?>