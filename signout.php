<?php
session_start();
include 'config.php';
include 'header.php';
echo '<h3>Sign Out</h3>';
if($_SESSION['signed_in'] == true)
{
    $_SESSION['signed_in'] = NULL;
    $_SESSION['user_name'] = NULL;
    $_SESSION['user_id'] = NULL;
    echo 'Succesfully signed out, thank you for visiting.';
}
else
{
    echo 'You are not signed in. Would you <a href="signin">sign in</a>';
}
include 'footer.php';