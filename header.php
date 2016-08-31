<?php
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Computer Forum</title>
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
    <h1>Computer Forum</h1>
        <div id="wrapper">
            <div id="menu">
                <a class="ítem" href="/forum/index.php">Home</a>
                <a class="item" href="/forum/create_topic.php">Create a topic</a>
                <a class="item" href="/forum/create_cat.php">Create a category</a>
<div id="userbar">
<div id="userbar">
    <?php
    if(isset($_SESSION['signed_in']) && ['signed_in'])
    {
        echo 'Hello'  .  $_SESSION['user_name'] . '. Not you? <a href="signout.php">Sign out</a>';
    }
    else
    {
        echo '<a href="signin.php">Sign in</a> or <a href="sign up">create an account</a>.';
    }
    ?>
</div>
            </div>
            <div id="content">

            </div>