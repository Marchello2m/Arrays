<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2165, 1457, 2456
];

//todo

echo "Original numeric array: ".PHP_EOL;
for ($i = 0; $i < count($numbers); $i++)
{
    echo $numbers[$i].PHP_EOL;
}
//todo
echo "Sorted numeric array: ".PHP_EOL;
sort($numbers);
foreach ($numbers as $key => $val) {
    echo "Numbers [" . $key . "] = " . $val .PHP_EOL;
}

$words = [
    "Java",
    "Python",
    "PHP",
    "C#",
    "C Programming",
    "C++"
];

//todo
echo "Original string array: ".PHP_EOL;
for ($i = 0; $i < count($words); $i++)
{
    echo $words[$i].PHP_EOL;
}
//todo
echo "Sorted string array: ".PHP_EOL;
sort($words);
foreach ($words as $key => $val) {
    echo "Word [" . $key . "] = " . $val .PHP_EOL;
}