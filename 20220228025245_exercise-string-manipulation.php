<?php
const SENTENCE = 'A sentence to be displayed by putting one word per line';
function showTitle($title)
{
    echo "<br/><b>&#9830; $title </b><br/>";
}


showTitle('Exercise 1: Display 1 word per line.');
$pieces = explode(" ", SENTENCE);
for($i=0;$i<str_word_count(SENTENCE);$i++){
    echo "$pieces[$i]";
    echo "<br>";
}




echo '<hr/>';
showTitle('Exercise 2: Reverse display 1 word per line.');

$reversed = array_reverse($pieces);
for($i=0;$i<str_word_count(SENTENCE);$i++){
    echo "$reversed[$i]";
    echo "<br>";
}

echo '<hr/>';
showTitle('Exercise 3: Display number of Words in Sentence.');
echo "Number of Words:".sizeof($pieces);

echo '<hr/>';
showTitle('Exercise 4: Display number of characters in sentence.');
echo "Number of Characters:".strlen(SENTENCE);

echo '<hr/>';
showTitle('Exercise 5: Display number of characters excluding spaces');

$noSpaceSentence=array();
for($i=0;$i<str_word_count(SENTENCE);$i++){

    $noSpaceSentence[$i]=$pieces[$i];
}

echo "Number of Characters without space:".strlen(implode($noSpaceSentence));





echo '<hr/>';
showTitle('Exercise 6: Display sentence with all characters UPPERCASE');
echo strtoupper(SENTENCE);
echo '<hr/>';
showTitle('Exercise 7: Display sentence with each word first letter Capitalized');

echo ucwords(SENTENCE);
echo '<hr/>';
showTitle('Exercise 8: Display sentence with all characters lowercase');
echo strtolower(SENTENCE);


