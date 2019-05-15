<?php

unset($_SESSION['user_id']);

if(!isset($_SESSION['user_id']))
    {
        echo '<h1>You have new been logged out.</h1>';
        echo '<h4>Click <a href="/home" class="link">here</a> to go home.</h4>';
    }

    else {
        echo "<h3>Could not log out</h3>";
    }
?>

