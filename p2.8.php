<?php
    $conn=new mysqli("localhost:","root","","test");
    if($conn->connect_error){
        die("Connection Failed:".$conn->connect_error);

    }

    $queries=[
        "SELECT DAYOFWEEK(CURDATE()) AS DateOfWeek",
        "SELECT WEEKDAY(CURDATE()) AS WeekDay",
        "SELECT DAYOFMONTH(CURDATE()) AS DayOfMonth",
        "SELECT DAYOFYEAR(CURDATE()) AS DayOfYear",
        "SELECT DAYNAME(CURDATE()) AS DayName",
        "SELECT MONTH(CURDATE(()) AS MonthNumber,
                MONTHNAME(CURDATE()) AS MonthName",
        "SELECT WEEK(CURDATE()) AS WeekNumber,
                NOW() AS ",
        "SELECT SYSDATE() AS SystemDateTime,
                CURRENT_TIMESTAMP() AS CurrentTimeStamp"
    ];

    foreach($queries as $sql){
        echo "<br>";
        $result=$conn->query($sql);
        if($result){
            while($row=$result->fetch_assoc()){
                foreach($row as $key =>$value)
                {
                    echo "<>$key:</b> $value <br>";
                }
            }
        }
    }
?>