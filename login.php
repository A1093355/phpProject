<?php
// if "header already sent" happens
// ob_start();
session_start();
$link = @mysqli_connect('localhost','root','','php');
?>


<?php
if(isset($_COOKIE["username"]))
{
    $cookieID=$_COOKIE["username"];
    echo "歡迎".$cookieID."再度光臨";
}
else
{
    echo "被你發現惹><";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>登入</h1>
    <form method = "post" enctype="multipart/form-data">
        <label for = "username">username</label>
        <input type = "text" name = "username" id = "username">
        <label for = "password">password</label>
        <input type = "password" name = "password" id="password">
        <input type = "submit" value = "登入">
    </form>


    <?php
    $aID="admin";
    $aPWD="a1093355";
    //$UID="yuting";
    //$UPWD="lovePILL";
    date_default_timezone_set("Asia/Taipei");
    echo date("m-d-Y H:i:s",time());
    //header("Refresh:1");
    if(isset($_POST["username"])){
        if($_POST["username"]!=null){
            $username=$_POST["username"];
            $password=$_POST["password"];

            $SQL="SELECT * FROM user WHERE name='$username' AND pwd='$password'";
            //echo $username."</br>";
            //echo $password;
            if($UID==$username && $UPWD==$password)
            {
                $_SESSION["login"]="AdminYes";
                setcookie("Admin",$username,time()+17280);
                //echo "登入成功";
                header("Location: /adminSuccess.php");
            }
            elseif($aID==$username && $aPWD==$password)
            {
                $_SESSION["login"]="Yes";
                setcookie("username",$username,time()+17280);
                //echo "登入成功";
                header("Location: /register.php");
            }
            else
            {
                $_SESSION["login"]="No";
                echo "帳號或密碼輸入錯誤";
            }
        }else{
            echo "您尚未輸入帳號密碼";
        }
    }else{
        echo "請輸入帳號密碼";
    }

    // if "header already sent" happens
    // ob_flush();
    
    ?>
</body>
</html>