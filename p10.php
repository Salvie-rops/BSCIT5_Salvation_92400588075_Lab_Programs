<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// Program to merge two arrays

$array1 = array(1, 2, 3, 4, 5);
$array2 = array(6, 7, 8, 9, 10);

$mergedArray = array_merge($array1, $array2);

echo "Merged Array:</br>";
foreach ($mergedArray as $value) {
    echo $value . "</br>";
}
?>

</body>
</html>