<?php

class Router{

	private $request;

	public function __construct($request){
		$this->request = $request;
	}

	public function get($route, $file){
		
		//Gets route and file path
		/*
		echo "Route: ";
		print_r($route);
		echo "<br>";
		
		echo "File path: ";
		print_r($file);
		echo "<br>";
		*/
		

		$uri = trim( $this->request, "/" );

		// Removes or trims the "/" from the URI
		/*
		print_r($uri);
		echo " ";
		*/


		$uri = explode("/", $uri);

		// Splits the string at the "/", returns array of strings
		/*
		print_r($uri);
		echo " ";
		*/


		if($uri[0] == trim($route, "/")){

			array_shift($uri);
			$args = $uri;
			
			// Require $file string and add .php extension
			require $file . '.php';
			
		}
		
	}
	
	
}