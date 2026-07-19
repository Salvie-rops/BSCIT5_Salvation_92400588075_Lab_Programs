<?php
// Read input from user
echo "Enter numbers separated by commas: ";
$input = trim(fgets(STDIN));

// Convert input string into array
$array = explode(",", $input);

// Sort array
sort($array);

// Show result
echo "Sorted Array: ";
print_r($array);
?>
