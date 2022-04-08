<?php
require("DBconnect.php");
$id=$_POST["id"];
$name=$_POST["name"];
$pwd=$_POST["pwd"];
$role=$_POST["role"];
$SQL="UPDATE user SET name='$name', pwd='$pwd', role='$role' WHERE id='$id'";
if(mysqli_query($link, $SQL)){
    echo "<script type='text/javascript'>";
    echo "alert('更新成功')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0'; url='list.php'>";
}else{
    echo "<script type='text/javascript'>";
    echo "alert('更新失敗')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0'; url='updateS.php'>";
}
?>