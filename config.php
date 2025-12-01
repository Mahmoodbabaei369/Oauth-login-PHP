<?php
session_start();


if(!$conn = new mysqli("localhost", "root", "", "oauth_demo"))
{
    echo 'Unable to connect to the database!';
    die;
}

define('GOOGLE_CLIENT_ID', '');
define('GOOGLE_CLIENT_SECRET', '');
define('GOOGLE_REDIRECT_URL', 'http://localhost/oauth-login/google-callback.php');

?>



