<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php"); // اگه ست نشده باشه ریدایرکت میشه به LOGIN.PHP
    exit(); 
}

$user = $_SESSION['user'];

?>
<h1>welcome <?=  $user['name']; ?></h1> // اون که بین دو تا علامت سوال هست معروفه به short echo tag
<p>Email: <?=  $user['email']; ?></p>
<img src="<?=  $user['picture']; ?>" width="100">
<br><br>
<a href="logout.php">Logout</a>