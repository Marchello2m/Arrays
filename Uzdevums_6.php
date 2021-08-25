<?php

$hang[1] =
    ' -------
 |/    | 
 |     o
 |   --|--
 |     |
 |    / \
 | 
/|\
-------------';






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





function generateRandomFruit(array $fruits): string
{
    return$fruits[array_rand($fruits)];
}



function transformRandomFruit(string $fruits): array
{
    $hiddenFruit = [];
    for ($i = 0; $i < strlen($fruits); $i++) {
        $fruits[$i] = "_";
        $hiddenFruit[] = $fruits[$i];
    }
    return $hiddenFruit;

}



$randomFruit = generateRandomFruit($fruits);
$hiddenFruit = transformRandomFruit($randomFruit);





$misses = [];
$endgame = false;
$gameIsRunning = true;

while ($gameIsRunning) {
    echo 'Guess The Fruit!'.PHP_EOL;
    echo '-=-=-=-=-=-=-=-=-=-=-=-=-=-' . PHP_EOL;
    echo "kas pa vardu tagad: ".$randomFruit.PHP_EOL;
    echo 'Guess Fruit: '.PHP_EOL;

    foreach ($hiddenFruit as $letter) {
        echo "$letter ";
    }
    echo PHP_EOL;

    echo 'Miss: ';
    foreach ($misses as $miss) {
        echo "$miss ";
    }
    echo PHP_EOL;

    if (in_array("_", $hiddenFruit)) {
        $guess = readline('Guess: ');
        if (strlen($guess) > 1 || !in_array($guess, range("a", "z"))) {
            echo 'Invalid input!' . PHP_EOL;
            continue;
        }

        $guessPos = strpos($randomFruit, $guess);

        if ($guessPos === false) {
            if (!in_array($guess, $misses)) {
                array_push($misses, $guess);
            }
            if (count($misses) === 4) {
                echo "You missed 4 letters. Right fruit was $randomFruit \n" ;
                echo $hang[1]. PHP_EOL;
                $endgame = true;
            }
        } else {
            $hiddenFruit[$guessPos] = $guess;
        }
    } else {
        echo 'YOU GOT IT!' . PHP_EOL;
        $endgame = true;
    }

    if ($endgame === true) {
        $choice = readline("Play \"more\" or \"exit\"? ");
        switch ($choice) {
            case 'exit':
                $gameIsRunning = false;
                break;
            case 'more':
                $randomFruit = generateRandomFruit($fruits);
                $hiddenFruit = transformRandomFruit($randomFruit);
                $misses = [];
                $endgame = false;
                break;
            default:
                echo 'Invalid input!' . PHP_EOL;
                $gameIsRunning = false;
                break;
        }
    }
}