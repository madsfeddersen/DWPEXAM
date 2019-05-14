<?php
    session_start();
    
	
	function logged_in() {
		return isset($_SESSION['user_id']);
	}
	
	function confirm_logged_in() {
		if (!logged_in()) {
			redirect_to("login.php");
		}
    }

    
    function redirect_to($location) {
        echo '<h1 class="page-title">
		<a>Please log in to continue</a>
	</h1>';
        //var_dump($_SESSION['user_id']);
        //header("Location: {$location}");
        //exit;
}

    function log_out() {
         // Four steps to closing a session
		// (i.e. logging out)

		// 1. Find the session
		session_start();
		
		// 2. Unset all the session variables
		$_SESSION = array();
		
		// 3. Destroy the session cookie
		if(isset($_COOKIE[user_id()])) {
			setcookie(user_id(), '', time()-42000, '/');
		}
		
		// 4. Destroy the session
		session_destroy();
		
		redirect_to("login.php");

    }

    

?>