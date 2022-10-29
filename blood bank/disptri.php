<?php
$sql="select available from log";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
				  $row = $result->fetch_assoc();
            echo "<h2 align:middle;color:white>".$row['available']."</h2>";
        }

        
             include 'donar details data store.html';
?>