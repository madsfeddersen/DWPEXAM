<?php
//include ("business/handleLogin.php");
?>
<head>
  <link rel="stylesheet" href="/presentation/css/login.css">
</head>


<br>

<h1 class="page-title">
    <a>Please log in to continue</a>
</h1>


<form method="post" action="">
  <div class="box">

  <input type="text" name="userEmail" value="" placeholder="email" onFocus="field_focus(this, 'email');" onblur="field_blur(this, 'email');" class="email" />
  <input type="password" name="userPass" value="" placeholder="password" onFocus="field_focus(this, 'password');" onblur="field_blur(this, 'password');" class="password" />
  <button class="btn"><input type="submit" name="submit" value="Log in"></button>
  <button class="btn"><a href="/signup">Sign Up</a></button>
  <br><br>- Doesn't work
  </div> 
</form>

<button class="btn"><a href="/dashboard">Backend</a></button>


