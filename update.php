
<?php
require("DBconnect.php");
$uNo=$_GET["id"];

$SQL="SELECT * FROM user WHERE id='$uNo'";

if($result=mysqli_query($link,$SQL)){
    while($row=mysqli_fetch_assoc($result)){
        $uName=$row['name'];
        $uPwd=$row['pwd'];
        $uRole=$row['role'];
    }
}

?>

<h1>使用者更新</h1>

<form action="updateconfirm.php" method="post">
User Number: <?php echo $uNo;?></br>
<input type="hidden" name ="id" value='<?php echo $uNo;?>'>
Please input username:<input type="text" name="name" value='<?php echo $uName;?>'></br>
Please input password:<input type="text" name="pwd" value='<?php echo $uPwd;?>'></br>

<?php
if($role=='user'){
    echo "Please select role:User<input type='radio' name='role' value='user' checked> Admin<input type='radio' name='role' value='admin'></br>";
}else{
    echo "Please select role:User<input type='radio' name='role' value='user'> Admin<input type='radio' name='role' value='admin' checked></br>";
}
?>

<input type="submit" value="註冊去"></br>
</form>