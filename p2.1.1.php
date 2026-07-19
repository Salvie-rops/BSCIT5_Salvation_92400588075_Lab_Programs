<?php
// Numeric array for Monday to Saturday
$weekdays = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

// Associative array for months with total days
$months = array(
    "January"   => 31,
    "February"  => 28,
    "March"     => 31,
    "April"     => 30,
    "May"       => 31,
    "June"      => 30,
    "July"      => 31,
    "August"    => 31,
    "September" => 30,
    "October"   => 31,
    "November"  => 30,
    "December"  => 31
);

// Display arrays
echo "Weekdays (Numeric Array):\n";
print_r($weekdays);

echo "\nMonths (Associative Array):\n";
print_r($months);

?>