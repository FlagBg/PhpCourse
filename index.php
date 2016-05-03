<?php

error_reporting( E_ALL );
ini_set( 'display_errors', '1' ); //that is the proper place - before everything...


require_once 'Product.php';
require_once 'Book.php';
require_once 'Count.php';

$book = new Book('Childrens', '8.99', '234234242');

print $book->getProductPrice();
print $book->getProductType();
print "VAT price is " . $book->calculateProductVAT() . " ";

$count = new Count();
print $count->getCount();
$count = new Count();
print $count->getCount();
