<?php
		if (logged_in()) {
		redirect_to("/dashboard");
	}
 ?>


<head>
  <link rel="stylesheet" href="/presentation/css/login.css">
</head>

<br>

<form method="post" action="/../../business/handleLogin.php">
  <div class="box">

  <input type="text" name="user" value="" placeholder="email" onFocus="field_focus(this, 'email');" onblur="field_blur(this, 'email');" class="email" />
  <input type="password" name="password" value="" placeholder="password" onFocus="field_focus(this, 'password');" onblur="field_blur(this, 'password');" class="password" />
  <button class="btn">
    <input type="submit" name="submit" value="Log in">
  </button>
  <button class="btn">
    <a href="/signup">Sign Up</a></button>
  </div> 
</form>

<button class="btn"><a href="/dashboard">Backend</a></button>


