<?php

// Variables can be changed
$firstName = 'Vivek';
$firstName = 'Rishi';
echo $firstName;


// Constants
define('STATUS_PAID','paid');
// define('STATUS_PAID',1);  ->This will give an error

// Checking if the constant has been defined
echo defined('STATUS_PAID');
echo STATUS_PAID;

// Another way to define constants
const STATUS = 'paid';
echo STATUS;

/*
constants created with the --Const-- keyword are actually defined at a compile time while constants created with the --define-- funtion are defined at a run time.
*/ 

if(true){
    // const SAY = 'Hello';  --> This will not work
    define('SAY','Hello');
}

/*
// A Unique way to use constants and variables
$paid = 'PAID';
define('BILL_'. $paid , 10);
echo BILL_PAID;
*/

//----------------------------------------------------------------------------------------

// Variable Variables
$foo = 'bar';
$$foo = 'bazz';
// $bar = 'bazz'; --> Upper line shows this!!
echo $foo,$bar;
// echo $foo , $$foo;
// echo "$foo , {$$foo}";