<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$numbers = array(11, 23, 34, 47, 58);

echo "Values entered (in reverse):</br>";

for ($i = count($numbers) - 1; $i >= 0; $i--) {
    echo $numbers[$i] . "</br>";
}
?>

</body>
</html>