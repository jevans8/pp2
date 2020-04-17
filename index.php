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

function printArr($array){
    foreach($array as $item){
        echo "$item<br>";
    }
}

printArr($numbers);


?>
</body>
</html>
