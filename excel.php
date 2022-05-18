<?php
header("Pragma: public");
header("Expires: 0"); 
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Content-type: application/vnd.ms-excel');
header('Content-Disposition: inline; filename="applicant.xls";'); //匯出的檔案名稱
header('Content-Transfer-Encoding: binary');

echo "<table>";
echo "<tr>";
echo "<td>id</td>";
echo "<td>name</td>";
echo "<td>pwd</td>";
echo "<td>role</td>";
echo "<td>email</td>";
echo "</tr>";

require("DBconnect.php");
$SQL = "SELECT * FROM user";
$result=mysqli_query($link,$SQL);
while($row=mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['pwd']."</td><td>".$row['role']."</td><td>".$row['email']."</td><td>";
    echo "</tr>";
}
echo "</table>";
?>