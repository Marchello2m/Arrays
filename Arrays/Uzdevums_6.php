<?php
$win[7]=
   "YOLO
";

$hang[0] =
    ' -------
 |/    | 
 |
 |
 |
 |
 | 
/|\
-------------';

$hang[1] =
    ' -------
 |/    | 
 |     o
 |
 |
 |
 | 
/|\
-------------';


$hang[2] =
    ' -------
 |/    | 
 |     o
 |     |
 |     |
 |
 | 
/|\
-------------';

$hang[3] =
    ' -------
 |/    | 
 |     o
 |     |
 |     |
 |    /
 | 
/|\
-------------';

$hang[4] =
    ' -------
 |/    | 
 |     o
 |     |
 |     |
 |    / \
 | 
/|\
-------------';

$hang[5] =
    ' -------
 |/    | 
 |     o
 |   --|
 |     |
 |    / \
 | 
/|\
-------------';

$hang[6] =
    ' -------
 |/    | 
 |     o
 |   --|--
 |     |
 |    / \
 | 
/|\
-------------';



$board=["_________________"];


    $fruits = array(
        'apple',
        'banana',
        'pear',
        'orange',
        'avocado',
        'blackberries',
        'cherries',
        'grapefruit',
        'durian',
        'gooseberries',
        'guava',
        'mango',
        'pomegranate'

    );

$rand_keys = array_rand($fruits);
echo $fruits[$rand_keys] . "\n";///kas bus pa vardu
$answer = readline("Guess The Fruit input a letter: ");

for ($i=0; $i < strlen($fruits[$rand_keys]); $i++)
{
    if ($answer == $fruits[$i])
    {
        echo $fruits[$i];
    }
    else
        echo '_';

}






if($fruits[$rand_keys] ==(in_array($answer, (array)$fruits[$rand_keys])))
{
    echo "Match found".PHP_EOL.$win[7];
}else
{
    echo "Match not found".PHP_EOL.$hang[1];
}
