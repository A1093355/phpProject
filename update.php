<?php
require("DBconnect.php");
$id=$_GET["id"];
$SQL="SELECT * FROM user WHERE id='$id'";

if($result=mysqli_query($link,$SQL)){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $pwd=$row['pwd'];
        $role=$role['role'];
    }
}
?>
<h1>使用者更新</h1>
<form method = "post"  action="updateConfirm.php" enctype="multipart/form-data">
        usernumber<?php echo $id;?></label>
        <input type="hidden" name="id" value='<?php echo $id;?>'>
        <label for = "username">username</label>
        <input type = "text" name = "username" value='<?php echo $name;?>'>
        <label for = "password">password</label>
        <input type = "password" name = "password" value='<?php echo $pwd;?>'>
        <input type="radio" name="role" value="admin" checked>admin
        <input type="radio" name="role" value="user">user<br>
        <input type = "submit" value = "送出">
</form>

<?php
if($role=='user'){
    echo "Please select role:User<input type='radio' name='role' value='user' checked> Admin<input type='radio' name='role' value='admin'></br>";
}else{
    echo "Please select role:User<input type='radio' name='role' value='user'> Admin<input type='radio' name='role' value='admin' checked></br>";
}
?>