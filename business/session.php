<?php
	session_start();
	

	
	if (isset($_SESSION['user_id'])) {
	echo "Logged in as 'user_id': " . $_SESSION['user_id'] . " with email " . $_SESSION['userName'];

	}
	else {

		echo "Session not set / you are not logged in.";
	}



	function logged_in() {
		return isset($_SESSION['user_id']);
	}

	
	function confirm_logged_in() {
		if (!logged_in()) {
			redirect_to("login.php");
		}
		}
		
		function confirm_admin() {
			if(isset($_SESSION['userRank']) && ($_SESSION['userRank']) == 1 || ($_SESSION['userRank'] == 2))
            {
							redirect_to("login.php");
						}
		}
    
    function redirect_to($location) {
       	echo "<script>window.location.href = '$location';</script>";

		//header("Location: {$location}"); //Throws error because headers already have been sent
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
		
		redirect_to("/logout");

    }

    

?>