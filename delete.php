<?php
require("DBconnect.php");
$uNo=$_GET["id"];
$SQL="DELETE FROM user WHERE id='$uNo'";

if(mysqli_query($link, $SQL)){
    echo "<script type='text/javascript'>";
    echo "alert('刪除ok');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=list.php'>";
}else{
    echo "<script type='text/javascript'>";
    echo "alert('刪除失敗');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=list.php'>";
}

?>