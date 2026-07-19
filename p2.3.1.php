<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //1 - array_change_key_case()
        echo "<h3><h3>1 -array_change_key_case()</h3>";
        $arr=array("Name"=>"Salv","city"=>"Rajkot",)

       

        

        //4 - array_combine()
        echo "<h3><h3>4 -array_combine()</h3>";
        $keys= array("Name","City","Age");
        $values= array("Salv","Rajkot","23");
        print_r(array_combine($keys,$values));

        //5 - array_pop()
        echo "<h3><h3>5 -array_pop()</h3>";
        $num= array(10,20,30,40);
        array_pop($num);
        print_r($num);

        //6 - array_push()
         echo "<h3><h3>6 -array_push()</h3>";
        $num= array(10,20,30);
        array_push($num,40,50);
        print_r(array_combine($keys,$values));

        //7 - array_unshift()
         echo "<h3><h3>7 -array_unshift()</h3>";
        $num= array();
        $values= array("Salv","Rajkot","23");
        print_r(array_combine($keys,$values));

        //8 - array_shift()
         echo "<h3><h3>4 -array_combine()</h3>";
        $keys= array("Name","City","Age");
        $values= array("Salv","Rajkot","23");
        print_r(array_combine($keys,$values));
    ?>
</body>
</html>



<?php
// Original array
$fruits = array(
    "a" => "Apple",
    "b" => "Banana",
    "c" => "Cherry"
);

echo "Original Array:\n";
print_r($fruits);

// 1. array_change_key_case
$fruits_lower = array_change_key_case($fruits, CASE_LOWER);
echo "\nArray with Lowercase Keys:\n";
print_r($fruits_lower);

$fruits_upper = array_change_key_case($fruits, CASE_UPPER);
echo "\nArray with Uppercase Keys:\n";
print_r($fruits_upper);

// 2. array_push
array_push($fruits, "Mango", "Orange");
echo "\nArray after array_push:\n";
print_r($fruits);

// 3. array_unshift
array_unshift($fruits, "Pineapple", "Grapes");
echo "\nArray after array_unshift:\n";
print_r($fruits);

// 4. array_shift
$removed = array_shift($fruits);
echo "\nRemoved Element using array_shift: $removed\n";
echo "Array after array_shift:\n";
print_r($fruits);
?>
