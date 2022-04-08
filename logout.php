<?php
session_start();
session_destroy();
setcookie("username",$username,time()-36);
setcookie("Admin",$Admin,time()-36);
echo "非法進入";
echo "<a href='login.php'>回登入頁</a>";
?>