<?php
/*3 - str_word_count() */

// Sample string
$text = "Hello world! PHP is powerful and fun.";

// 1. Default mode: returns the number of words
$wordCount = str_word_count($text);
echo "Word Count: $wordCount\n";

// 2. Mode 1: returns an array of words
$wordsArray = str_word_count($text, 1);
echo "\nWords Array (Mode 1):\n";
print_r($wordsArray);

// 3. Mode 2: returns an associative array with word positions
$wordsAssoc = str_word_count($text, 2);
echo "\nWords with Positions (Mode 2):\n";
print_r($wordsAssoc);

// 4. Including additional characters as part of words
$text2 = "It's PHP's world!";
$wordsWithApostrophe = str_word_count($text2, 1, "'");
echo "\nWords with Apostrophe Included:\n";
print_r($wordsWithApostrophe);
?>
