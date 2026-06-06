<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$month = date("n"); 

if ($month == 1) {
    echo "Current month is January";
} 

else if ($month == 2) {
    echo "Current month is February";
} 

else if ($month == 3) {
    echo "Current month is March";
} 

else if ($month == 4) {
    echo "Current month is April";
} 

else if ($month == 5) {
    echo "Current month is May";
} 

else if ($month == 6) {
    echo "Current month is June";
} 

else if ($month == 7) {
    echo "Current month is July";
} 

else if ($month == 8) {
    echo "Current month is August";
} 

else if ($month == 9) {
    echo "Current month is September";
} 

else if ($month == 10) {
    echo "Current month is October";
} 

else if ($month == 11) {
    echo "Current month is November";
} 

else {
    echo "Current month is December";
}
?>

</body>
</html>