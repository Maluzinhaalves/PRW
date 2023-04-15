<?php

function isEqual($word1, $word2) {
    $diffCount = 0;
    $wordLen = strlen($word1);
    
    for ($i = 0; $i < $wordLen; $i++) {
        if ($word1[$i] !== $word2[$i]) {
            $diffCount++;

            if ($diffCount > 1) {
                return false;
            }
        }
    }
    
    return true;
}

$englishWords = ["one", "two", "three"];

$numWords = intval(fgets(STDIN));

for ($i = 0; $i < $numWords; $i++) {
    $word = trim(fgets(STDIN));
    
    for ($j = 0; $j < 3; $j++) {
        if (isEqual($word, $englishWords[$j])) {
            echo $j + 1 . "\n";
            break;
        }
    }
}

?>