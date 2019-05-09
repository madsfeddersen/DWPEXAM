<?php
require( __DIR__ . '/../business/db/dbcon2.php' );


function getUser($userID)
{
	try {

		$cxn = connectToDB();

		$handle = $cxn->prepare( "SELECT * FROM users WHERE id = $userID" );
		$handle->execute();

		// Using the fetchAll() method might be too resource-heavy if you're selecting a truly massive amount of rows.
		// If that's the case, you can use the fetch() method and loop through each result row one by one.
		// You can also return arrays and other things instead of objects.  See the PDO documentation for details.
		$result = $handle->fetch( \PDO::FETCH_OBJ );

		return $result;
	}
	catch(\PDOException $ex){
		print($ex->getMessage());
	}
}

// Create a new User (using Prepared Statements)
function createUser($userEmail, $userPass, $firstName, $lastName, $userRank)
{
	try
	{
		$cxn = connectToDB();

		/*
		aadf');  TRUNCATE users; --
		 * Dynamic SQL - Vulnerable to SQL Injection
		 */
		$statement = "INSERT INTO users (userEmail, userPass, firstName, lastName, userRank) VALUES ('" . $userEmail . "','" . $userPass . "','" . $firstName . "','" . $lastName . "','" . $userRank . "')";
		
		//var_dump($statement);
		$handle = $cxn->prepare($statement);
		$handle->execute();
		
		/*
		 * Prepared Statement Approach
		 */
		
		/*$statement = "INSERT INTO users (userEmail, userPass, firstName, lastName, userRank) VALUES (:userEmail, :userPass, :firstName, :lastName, :userRank)";

		$handle = $cxn->prepare($statement);
		$handle->bindParam(':userEmail', htmlspecialchars($userEmail));
        $handle->bindParam(':userPass', htmlspecialchars($userPass));
        $handle->bindParam(':firstName', htmlspecialchars($firstName));
        $handle->bindParam(':lastName', htmlspecialchars($lastName));
        $handle->bindParam(':userRank', htmlspecialchars($userRank));
        
		$handle->execute();*/
		
		/*
		 * Stored Procedure Approach
		 *
		//Stored Procedure
		$statement = "CALL proc_create_review('$userEmail', '$userPass', '$firstName', '$lastName', '$userRank')";

		$handle = $cxn->prepare($statement);
		$handle->execute();
		*/


		//close the connection
        $cxn = null;
        
	}
	catch(\PDOException $ex){
		print($ex->getMessage());
    }
    
}

function readUser()
{
	try {
		$cxn = ConnectToDB();

		$handle = $cxn->prepare( 'SELECT * FROM users ORDER BY id DESC' );
		$handle->execute();

		// Using the fetchAll() method might be too resource-heavy if you're selecting a truly massive amount of rows.
		// If that's the case, you can use the fetch() method and loop through each result row one by one.
		// You can also return arrays and other things instead of objects.  See the PDO documentation for details.
		$result = $handle->fetchAll( \PDO::FETCH_OBJ );

		foreach ( $result as $row ) {
			print( userTemplate($row) );
		}
	}
	catch(\PDOException $ex){
		print($ex->getMessage());
	}
}

function updateUser($userEmail, $userPass, $firstName, $lastName, $userRank, $userID)
{
	try
	{
		$cxn = ConnectToDB();

		$statement = "UPDATE Review SET userEmail = '" . $userEmail  . "', firstName = '" . $firstName . "' WHERE id = " . $userID;
		$handle = $cxn->prepare( $statement );
		$handle->execute();

		//close the connection
		$cxn = null;
	}
	catch(\PDOException $ex){
		print($ex->getMessage());
	}
}

function deleteUser($userID)
{
	try
	{
		$cxn = ConnectToDB();

		$statement = "DELETE FROM users WHERE id = " . $userID;
		$handle = $cxn->prepare( $statement );
		$handle->execute();

		//close the connection
		$cxn = null;
	}
	catch(\PDOException $ex){
		print($ex->getMessage());
	}
}

// Utility function to provide some basic styling for a review
function userTemplate($row)
{
	return $template = "	
	<div>
	  <input class='id' type=\"hidden\" name='id' id='id' value='" . $row->id . "' >
      
      <label>Email:</label>
      <label class='Email'><strong>" . $row->userEmail . "</strong></label>
    </div>
    <div>
      <label>Password:</label>
      <label class='message'>" . $row->userPass . "</label>
    </div>
    <label>First name:</label>
      <label class='Email'><strong>" . $row->firstName . "</strong></label>
    </div>
    <div>
      <label>Last name:</label>
      <label class='message'>" . $row->lastName . "</label>
    </div>
    <div>
    <label>Rank::</label>
    <label class='message'>" . $row->userRank . "</label>
  </div>

   
    <br>
    <a href='/business/handleUser.php?action=edit&userID=" . $row->id . "' class='waves-effect waves-light btn edit'>Edit</a>
    <a href='/business/handleUser.php?action=delete&userID=" . $row->id . "' class='waves-effect waves-light btn edit'>Delete</a>
    <br><br><br><br>";
}