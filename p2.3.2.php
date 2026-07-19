<?php
 //2 - array_chunk()
        echo "<h3><h3>2 -array_chunk()</h3>";
        $months= array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
        print_r(array_chunk($months,3,"<br>"));
?>