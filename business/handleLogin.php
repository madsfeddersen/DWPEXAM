<?php
// START FORM PROCESSING
	if (isset($_POST['submit'])) { // Form has been submitted.
		$username = trim(mysqli_real_escape_string($connection, $_POST['user']));
		$password = trim(mysqli_real_escape_string($connection,$_POST['pass']));

		$query = "SELECT id, user, pass FROM users WHERE user = '{$username}' LIMIT 1";
		$result = mysqli_query($connection, $query);
			
			if (mysqli_num_rows($result) == 1) {
				// username/password authenticated
				// and only 1 match
				$found_user = mysqli_fetch_array($result);
                if(password_verify($password, $found_user['pass'])){
				    $_SESSION['user_id'] = $found_user['id'];
				    $_SESSION['user'] = $found_user['user'];
				    redirect_to("frontpage.php");
			} else {
				// username/password combo was not found in the database
				$message = "Username/password combination incorrect.<br />
					Please make sure your caps lock key is off and try again.";
			}}
	} else { // Form has not been submitted.
		if (isset($_GET['logout']) && $_GET['logout'] == 1) {
			$message = "You are now logged out.";
		} 
	}
if (!empty($message)) {echo "<p>" . $message . "</p>";} ?>