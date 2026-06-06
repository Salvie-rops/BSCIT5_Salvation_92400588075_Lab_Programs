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

switch ($month) {
    case 1:
        echo "Current month is January";
        break;

    case 2:
        echo "Current month is February";
        break;

    case 3:
        echo "Current month is March";
        break;

    case 4:
        echo "Current month is April";
        break;

    case 5:
        echo "Current month is May";
        break;

    case 6:
        echo "Current month is June";
        break;

    case 7:
        echo "Current month is July";
        break;

    case 8:
        echo "Current month is August";
        break;

    case 9:
        echo "Current month is September";
        break;

    case 10:
        echo "Current month is October";
        break;

    case 11:
        echo "Current month is November";
        break;

    case 12:
        echo "Current month is December";
        break;
        
    default:
        echo "Invalid month!";
}
?>

</body>
</html>