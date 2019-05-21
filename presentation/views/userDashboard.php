<?php confirm_logged_in(); ?>

<head>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="/presentation/css/dashboard.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>

<h3>Welcome to the dashboard,<br> <?php echo ucwords($_SESSION['firstName']) . ' ' . ucwords($_SESSION['lastName']);?>!</h3>
<div class="row">
    <a href="/orders" class="btn dashboard">View orders</a>
    <a href="/profile" class="btn dashboard">view profile</a>
</div>

<div id="duck">


</div>