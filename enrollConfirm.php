<?php
require("DBconnect.php"); //must have
//include("DBconnect.php"); not certain
$uname=$_POST["username"];
$upwd=$_POST["password"];
$role=$_POST["role"];

//echo $uname.$upwd.$role;

$SQL="INSERT INTO user (name, pwd, role) VALUES ('$uname','$upwd','$role')";
if(mysqli_query($link, $SQL)){
    echo "<script type='text/javascript'>";
    echo "alert('註冊成功')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0'; url='list.php'>";
}else{
    echo "<script type='text/javascript'>";
    echo "alert('註冊失敗')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0'; url='enroll.php'>";
}
?>