<?php
    $conn=new mysqli("localhost:","root","","test");
    if($conn->connect_error){
        die("Connection Failed:".$conn->connect_error);

    }

    $queries=[
        "SELECT HOUR(NOW()) AS Hour",
        "SELECT MINUTE(NOW()) AS Minute",
        "SELECT SECOND(NOW()) AS Second",
        "SELECT DATE_FORMAT(NOW(),'%d-%m-%Y%H:%i:%s) AS Formatted_Date",
        "SELECT DATE_SUB(CURDATE(), INTERVAL 10 DAY) AS Date_Subtract",
        "SELECT DATE_ADD(CURDATE(), INTERVAL 10 DAY) AS Date_Add"
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