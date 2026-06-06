<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        define("SEMESTER","Semester 4");
        define("TOTAL_SUBJECTS", 4);

        $studentName= "Sally Gombz";
        $rollNumber = "1234567";

        $maths = 97;
        $python =80;
        $ooad = 92;
        $cn =90;

        $totalMarks= $maths + $python + $ooad + $cn;
        $percentage= $totalMarks / TOTAL_SUBJECTS;

        echo "Previous Semester Results</br>";
        echo "---------------------------------</br>";
        echo "Name: $studentName</br>";
        echo "ROLL NUMBER: $rollNumber</br>";
        echo "Semester: " . SEMESTER . "</br></br>";

        echo "Marks Obtained:</br>";
        echo "Maths: $maths</br>";
        echo "Python: $python</br>";
        echo "Object Oriented Analysis and Design: $ooad</br>";
        echo "Computer Network: $cn</br></br>";

        echo "Total Marks: $totalMarks</br>";
        echo "Percentage: $percentage%</br>"
    ?>
</body>
</html>