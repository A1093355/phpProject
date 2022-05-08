<?php
require("DBconnect.php"); //must have
//include("DBconnect.php"); not certain
$email=$_POST["useremail"];

echo $email;

$SQL="SELECT * FROM user WHERE email='$email'";

if($result = mysqli_query($link, $SQL)){
    $row=mysqli_fetch_assoc($result);
    if($email==$row['email'])
    {
        echo "您已訂閱過";
        //header("Location: /list.php");
    }else{
        $SQL="INSERT INTO user(email) VALUES ('$email')";
        if(mysqli_query($link, $SQL)){
            echo "成功加入訂閱";
            header("Location: /list.php");
        }
    }
}
?>