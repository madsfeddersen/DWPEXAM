<?php
include ("business/handleLogin.php");
?>
<head>
  <link rel="stylesheet" href="/presentation/css/login.css">
</head>


<br>

<h1 class="page-title">
    <a>Please log in to continue</a>
</h1>

<p class="page-text">


<form method="post" action="">
<div class="box">

<input type="user" name="user" value="" placeholder="email" onFocus="field_focus(this, 'email');" onblur="field_blur(this, 'email');" class="email" />
  
<input type="pass" name="pass" value="" placeholder="password" onFocus="field_focus(this, 'password');" onblur="field_blur(this, 'password');" class="password" />

  <button class="btn" type="submit" formmethod="post">Log in</button>
  <button class="btn"><a href="/signup">Sign Up</a></button>
  <button class="btn"><a href="/backend">Backend</a></button>
  <button class="btn"><a href="/backend2">Backend 2</a></button>
 
</div> 
</form>
</p>

