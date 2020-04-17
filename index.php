<?php

/*
 * Julia Evans
 * 4/17/2020
 * https://jevans.greenriverdev.com/328/pairPrograms/pp2/index.php
 * Pair Program 2
*/

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair Program 2</title>
</head>
<body>
<h1>Pair Program 2</h1>
<?php

//1.
echo "<p>PHP Array Practice</p>";

//2.
/*Define an array $numbers, which contains 7, 9, 8, 9, 8, 8, 6. In the same PHP block, write a function printArr() that
takes an array as a parameter and prints the array, one item per line. Call your function and pass it the $numbers
array. Test your code and then commit your changes.*/

$numbers = array(7, 9, 8, 9, 8, 8, 6);

//3.
/*Move your print function into an include file called functions.php in the same directory. Make sure it still works.
Commit your changes. This time you will need to add two files to the staging area, because both files have changed:
functions.php and index.php. You only need one commit and one push.*/

include('functions.php');
printArr($numbers);

//4.
/*In your functions file, define a function called largest() that takes an array as a parameter and returns the
largest value in the array. Test the function in your index page, and then commit your changes.*/

echo "Largest number: " . largest($numbers) . "<br>";

//5.
/*In your functions file, define a function called removeDups() that takes an array as a parameter and returns an
array with duplicates removed. So, given the $numbers array, removeDups() would return [7, 9, 8, 6].
(Order doesn’t matter.) Test the function from your index page. Commit your changes.*/

echo "New array:<br>";
echo printArr(removeDups($numbers)) . "<br>";


?>
</body>
</html>
