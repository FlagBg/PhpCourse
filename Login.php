<?php

include_once 'Database.php';

$hash	= 'test';

if ( ! empty( $_POST ) && isset( $_POST['action'] ) && $_POST['action'] == 'login' )
{

	$username	= trim( $_POST['user'] );
	$password	= md5( trim( $_POST['pass'] ) . $hash );
	
	$dbh		= Database::getInstance();

	$sql	= '
		SELECT * FROM users
		WHERE username = ? AND password = ? 
	';
	
	$stmt	= $dbh->prepare( $sql );
	
	$result	= $stmt->execute( array( $username, $password ) );
	
	if ( $result )
	{
		if( $stmt->rowCount() > 0 )
		{
			$rows	= $stmt->fetchAll(PDO::FETCH_ASSOC); 
			$user	= array_pop( $rows );
			print_r($user);
		
			print_r( 'User is logged' );die();
		}
		else
		{
			print_r( 'User is not logged' );die();
		}
	}
	else
	{
		print_r( 'Database error' );die();
	}
	
}

















