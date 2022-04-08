<?php
require("DBconnect.php");
$id=$_GET["id"];
echo $id;
$SQL="DELETE FROM user WHERE id='$id'";
if(mysqli_query($link, $SQL)){
    echo "<script type='text/javascript'>";
    echo "alert('刪除成功')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0'; url='list.php'>";
}else{
    echo "<script type='text/javascript'>";
    echo "alert('刪除失敗')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0'; url='enroll.php'>";
}
?>