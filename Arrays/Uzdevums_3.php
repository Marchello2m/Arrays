<?php
$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

echo "Enter the value to search for 1000-2500".PHP_EOL;
$input=readline("Enter 4 digit code: ").PHP_EOL;


if (in_array($input, $numbers)) {
    echo "Yes it is ".PHP_EOL;
}else{
    echo "NO it not :( ".PHP_EOL;
}


//todo check if an array contains a value user entered