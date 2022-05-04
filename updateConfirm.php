<?php
require("DBconnect.php");
$uNo=$_POST["id"];
$uName=$_POST["name"];
$uPwd=$_POST["pwd"];
$uRole=$_POST["role"];

$SQL="UPDATE user SET name='$uName' , pwd='$uPwd' , role='$uRole' WHERE id='$uNo'";

if(mysqli_query($link, $SQL)){
    echo "<script type='text/javascript'>";
    echo "alert('更新成功');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=list.php'>";
}else{
    echo "<script type='text/javascript'>";
    echo "alert('更新失敗');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=list.php'>";
}
?>