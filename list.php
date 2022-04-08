<?php
require("DBconnect.php");
$SQL="SELECT * FROM user";
if($result=mysqli_query($link,$SQL)){
    echo "<table border='2'>";
    while($row=mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['pwd']."</td><td>".$row['role']."</td><td><a href='delete.php?id=".$row["id"].">刪除</a></td><td><a href='update.php?id=".$row["id"].">修改</td><br/>";
        echo "</tr>";
    }
    echo "</table>";  
}
?>