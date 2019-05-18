<?php confirm_logged_in(); ?>


<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="/presentation/css/dashboard.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>

<h3>Welcome to the dashboard, <?php echo ucwords($_SESSION['firstName']) . ' ' . ucwords($_SESSION['lastName']);?>!</h3>
<div class="row">
    <a href="/editUsers" class="btn dashboard">Manage users</a>
    <a href="/manageSite" class="btn dashboard">Site settings</a>
    <a href="/editProducts" class="btn dashboard">Products</a>
    <a href="http://localhost/phpmyadmin" target="_blank" class="btn dashboard">phpMyAdmin</a>
</div>

<div id="duck">


</div>