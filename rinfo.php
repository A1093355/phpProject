<?php
session_start();
$name=$_POST["name"];
$id=$_POST["id"];
$email=$_POST["email"];
$bir=$_POST["bir"];
$sex=$_POST["sex"];
$food=$_POST["food"];
$comment=$_POST["comment"];
$comment=strip_tags($comment);
$comment=nl2br($comment);

$foods=implode(",",$food);
echo "<h1>墾丁三日遊報名表單確認資訊</h1>";
echo "<b>你的姓名:</b>".$name."<br/>";
echo "<b>你的學號:</b>".$id."<br/>";
echo "<b>你的電子信箱:</b>".$email."<br/>";
echo "<b>你的生日:</b>".$bir."<br/>";
echo "<b>你的飲食偏好:</b>".$foods."<br/>";
echo "<b>意見回饋:</b>".$comment."<br/>";

echo $_FILES["uphoto"]["name"]."<br/>";
echo $_FILES["uphoto"]["tmp_name"]."<br/>";
echo $_FILES["uphoto"]["size"]."<br/>";
echo $_FILES["uphoto"]["type"]."<br/>";
if(copy($_FILES["uphoto"]["tmp_name"],$_FILES["uphoto"]["name"])){
    echo "successs";
}else{
    echo "failed";
}
?>