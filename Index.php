<?php
error_reporting( E_ALL );
ini_set( 'display_errors', '1' );

include_once 'Account.php';
include_once 'Person.php';


$person = new Person("Angel", 26, 200 );
var_dump( $person );
//$person->__toString();
//print $person; 


// 
// $person->setId( 343 );
// $person->setBalance( 210 );
// var_dump($person);

//$person->account->balance += 10;

//print $person->account->$this->balance;
