<?php

echo 'Hello World';
echo('Hello World');

echo print 'Hello World';
print('Hello World');

echo 'Hello', ' ' , 'World';
echo 'Joe\'s Invoice'; 
// another Way
echo "Joe's Invoice";


// Variable Naming

$name = 'Divesh';
echo $name;

// By default it's assigned by Value
$x=1;
$y = $x;
$x=3;
echo $y;


// & --> Will make it assigned by Referance
$x=1;
$y = &$x;
$x=3;
echo $y;

$firstName = 'Divesh';
// In single Quotes You cannot get the value of the variable
// echo 'Hello $firstName';
echo "Hello $firstName";
echo "Hello {$firstName}"; // this will give more clarity
echo 'Hello' . $firstName;
?>


// HTML IN PHP

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        
        <?php
        $x = 10;
        $y = 5;

        echo '<p>' . $x . ',' . $y . '</p>';
        ?>

        //Shortcut method of using php
        <?= 'Hello World' ?>
    </h1>
</body>
</html>
