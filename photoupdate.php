
<?php
session_start();
require("DBconnect.php");
$ppath=$_GET["ppath"];

$SQL="SELECT * FROM photo WHERE ppath='$ppath'";

if($result=mysqli_query($link,$SQL)){
    while($row=mysqli_fetch_assoc($result)){
        $pNo=$row['pNo'];
        $ppath=$row['ppath'];
        $pdate=$row['pdate'];
    }
}
?>
<h1>照片更新</h1>
<form action="photoupdateConfirm.php" method="post" enctype="multipart/form-data">
<input type="file" name="photo" accept="image/*"></br>
<input type="hidden" name ="pNo" value='<?php echo $pNo;?>'>
<input type="submit">
</form>
