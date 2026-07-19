<?php
    $conn=new mysqli("localhost:","root","","test");
    if($conn->connect_error){
        die("Connection Failed:".$conn->connect_error);

    }

    $queries=[
        "SELECT CURDATE() AS CurrentDate",
        "SELECT CURTIME() AS CurrentTime",
        "SELECT UNIX_TIMESTAMP() AS UnixTime",
        "SELECT FROM_UNIXTIME(UNIX_TIMESTAMP()) AS DateTime"
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