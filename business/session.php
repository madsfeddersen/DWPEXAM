<?php
    session_start();
	
	if (isset($_SESSION['user_id'])) {

	echo "Testing / Debugging info from Session.php ---------------------- ";

	echo "Logged in as 'user_id': " . $_SESSION['user_id'] . " with username: " . $_SESSION['userName'];

	}

	else {

		echo "Session not set :D";
	}


	function logged_in() {
		
		return isset($_SESSION['user_id']);
	}

	
	function confirm_logged_in() {
		if (!logged_in()) {
			redirect_to("login.php");
			
		}
    }

    
    function redirect_to($location) {
        /*echo "<h1 class='page-title'>
		<a>Session.php function redirect_to doesn't work yet :(</a>
		</h1>";*/

		echo "<script>window.location.href = '/home';</script>";

		//header("Location: {$location}"); Throws error because headers already have been sent
        exit;
}

    function log_out() {
         // Four steps to closing a session
		// (i.e. logging out)

		// 1. Find the session
		/*
		session_start();
		
		// 2. Unset all the session variables
		$_SESSION = array();
		
		// 3. Destroy the session cookie
		if(isset($_COOKIE[user_id()])) {
			setcookie(user_id(), '', time()-42000, '/');
		}
		*/
		// 4. Destroy the session
		session_destroy();
		
		redirect_to("login.php");

    }

    

?>