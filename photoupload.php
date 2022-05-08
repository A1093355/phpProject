<?php
require("DBconnect.php");
//取得副檔名
$pathpart = pathinfo($_FILES['photo']['name']);
$extname = $pathpart['extension'];
//echo $extname;

$now=time();
//產生新檔案名稱
$finalPhoto = "Photo_".time().".".$extname; //避免多個檔案同名(+username)

$SQL = "INSERT INTO photo (ppath, pdate) VALUES ('$finalPhoto','$now')";
//上傳檔案

if(copy($_FILES["photo"]["tmp_name"],$finalPhoto)){
    if(mysqli_query($link, $SQL)){
        echo "<script type='text/javascript'>";
        echo "alert('照片上傳成功')";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0'; url='photolist.php'>";
    }else{
        echo "<script type='text/javascript'>";
        echo "alert('照片上傳失敗')";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0'; url='photo.php'>";
    }
    echo "successs";
}else{
    echo "<script type='text/javascript'>";
        echo "alert('照片上傳失敗')";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0'; url='photo.php'>";
}
?>