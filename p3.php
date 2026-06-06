<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$a = 10;
$b = 3;

echo "Arithmetic Operators:</br>";
echo "a + b = " . ($a + $b) . "</br>"; 
echo "a - b = " . ($a - $b) . "</br>"; 
echo "a * b = " . ($a * $b) . "</br>"; 
echo "a / b = " . ($a / $b) . "</br>"; 
echo "a % b = " . ($a % $b) . "</br>"; 

echo "</br>Assignment Operators:</br>";
$c = $a;
echo "c = a → c = $c</br>";
$c += $b;
echo "c += b → c = $c</br>";
$c -= $b;
echo "c -= b → c = $c</br>";
$c *= $b;
echo "c *= b → c = $c</br>";
$c /= $b;
echo "c /= b → c = $c</br>";

echo "<br>Comparison Operators:</br>";
echo "a == b → " . ($a == $b ? "true" : "false") . "</br>";
echo "a != b → " . ($a != $b ? "true" : "false") . "</br>";
echo "a > b → " . ($a > $b ? "true" : "false") . "</br>";
echo "a < b → " . ($a < $b ? "true" : "false") . "</br>";
echo "a >= b → " . ($a >= $b ? "true" : "false") . "</br>";
echo "a <= b → " . ($a <= $b ? "true" : "false") . "</br>";

echo "</br>Logical Operators:</br>";
$x = true;
$y = false;
echo "x && y → " . ($x && $y ? "true" : "false") . "</br>";
echo "x || y → " . ($x || $y ? "true" : "false") . "</br>";
echo "!x → " . (!$x ? "true" : "false") . "</br>";


echo "</br>Increment/Decrement Operators:</br>";
$d = 5;
echo "d = $d</br>";
echo "++d = " . (++$d) . "</br>"; 
echo "d++ = " . ($d++) . "</br>"; 
echo "d = $d</br>";
echo "--d = " . (--$d) . "</br>";
echo "d-- = " . ($d--) . "</br>"; 
echo "d = $d</br>";

echo "</br>String Operators:</br>";
$str1 = "Hello";
$str2 = " World";
echo "Concatenation: " . ($str1 . $str2) . "</br>";
$str1 .= $str2;
echo "Concatenation assignment: " . $str1 . "</br>";
?>

</body>
</html>