<?php
require("DBconnect.php");
$pNo=$_POST["pNo"];
$pathpart = pathinfo($_FILES['photo']['name']);
$extname = $pathpart['extension'];
$now=time();
$finalPhoto = "Photo_".time().".".$extname;
echo $finalPhoto;
$SQL="UPDATE photo SET ppath='$finalPhoto',pdate='$now' WHERE pNo='$pNo'";
if(copy($_FILES["photo"]["tmp_name"],$finalPhoto)){
    if(mysqli_query($link, $SQL)){
        echo "<script type='text/javascript'>";
        echo "alert('更新成功');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=photolist.php'>";
    }else{
        echo "<script type='text/javascript'>";
        echo "alert('更新失敗');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=photolist.php'>";
    }
}
?>