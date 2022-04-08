<?php
session_start();
    if($_SESSION["login"]=="No"){
        echo "非法進入系統";
        echo "<a href='login.php'>登出系統</a>";
        header("Location /login.php");
        exit();    
    }
    else
    {
        echo "<a href='login.php'>logout</a>";
    }
?>
<X'mas patry報名網頁>
<head>
<link rel="shortcut icon" href="cocotree.png" />
</head>
<title>墾丁三日遊報名網頁</title>
<body bgcolor='#FFABAB'>
<!--<embed src="Jingle Bell Rock.mp3" autostart=true hidden=true loop=true>-->

<!--<script src="http://www.schillmania.com/projects/snowstorm/snowstorm-min.js" type="text/javascript"></script>-->
<h1 align="center"><a href="merry christmas.jpg"></a></h1>
<img src="https://i1.wp.com/stargazer.nets.hk/wp-content/uploads/2015/12/27292-NWKU3N.jpg?resize=768%2C768" width="500" length="800" border="1" alt="聖誕照片">
</a>
<hr>
<font size="4" color="#2B2B2B"><br/>
因為疫情很久沒放風了嗎?<br/>
還是過年被熱情的親戚好友搞到要發瘋了呢?<br/>
「剩單節 ಥ⌣ಥ」<br/>
我聽到你的需求跟吶喊了٩(๑❛ᴗ❛๑)۶<br/>
讓小精靈告訴你一個天大的好消息<br/>
聰明的你，知道了嗎?<br/>
沒錯!今年12/24~12/25在高雄大學有個為期一天半的聖誕趴等著你參加!!!<br/>
看完下方的行程表就別猶豫了<br/>
快按下報名，我們不見不散◉‿◉<br/>
</font>
<hr>
<h2><font size="4">
<dir>
<li>活動日期:12/24、12/25
<li>活動地點:高雄大學 圖書資訊大樓2F 國際會議廳
<li>活動費用:有繳系費的免費入場<br/>
沒有繳系費的150元/人(每人皆須準備100~200元內的交換禮物)<br/>
<li>活動行程:<br/>
<table border="1" align="left" width="80%" height="600">
<tr align="center"><td>   </td>
    <td>12/24</td>
    <td>12/25</td></tr>
<tr align="center"><td>9:00~9:30</td>
    <td>             </td>
    <td>早操</td></tr>
<tr align="center"><td>9:30~11:00</td>
    <td>             </td>
    <td>手作聖誕蛋糕</td></tr>
<tr align="center"><td>11:00~12:00</td>
    <td>             </td>
    <td>BBQ烤肉大會</td></tr>
<tr align="center"><td>12:00~13:30</td>
    <td>             </td>
    <td>自由(聯誼)時間</td></tr>
<tr align="center"><td>14:00~16:00</td>
    <td>小隊團康活動</td>
    <td>小隊桌遊對抗賽</td></tr>
<tr align="center"><td>16:00~18:00</td>
    <td>搓搓湯圓花好月圓</td>
    <td>switvh大亂鬥</td></tr>
<tr align="center"><td>18:00~19:00</td>
    <td>美味佳餚全部上桌!!!</td>
    <td>最後的晚餐QQ</td></tr>
<tr align="center"><td>19:00~20:00</td>
    <td>講故事大賽</td>
    <td>交換禮物與感性時間</td></tr>
<tr align="center"><td>20:00~</td>
    <td colspan="2">加油!看個人造化了 God bless you!</td></tr>
</table>
<hr>
<form name="registration" action="rinfo.php" method="POST" enctype="multipart/form-data">
<li>報名表單:<br/>
<table>
    <tr>
        <td>姓名: <input type="text" name="name" size="10"><br/></td>
    </tr>
    <tr>
        <td>學號: <input type="text" name="id" size="10"><br/></td>
    </tr>
    <tr>
        <td>電子信箱:<input type="email" name="email" size="10"><br/></td>
    </tr>
    <tr>
        <td>手機號碼: <input type="text" name="phone" size="10"><br/></td>
    </tr>
    <tr>
        <td>生日:<input type="date" name="bir" size="10"><br/></td>
    </tr>
    <tr>
        <td>性別:<input type="radio" name="sex" value="male" checked>男性
        <td><input type="radio" name="sex" value="female">女性<br></td>
    </tr>
    <tr>
        <td><input type="checkbox" name="food[]" value="葷食">葷</td>
        <td><input type="checkbox" name="food[]" value="素食">素</td>
    </tr>
    <tr>
        <td>建議<textarea cols="30" rows="30" name="comment"></textarea></td>
    </tr>
    <tr>
        <td>上傳檔案<input type="file" name="uphoto"></td>
    </tr>
</table>
<!--
姓名: <input type="text" name="name" size="10"><br/>
學號: <input type="text" name="id" size="10"><br/>
電子信箱:<input type="email" name="email" size="10"><br/>
手機號碼: <input type="text" name="phone" size="10"><br/>
生日:<input type="date" name="bir" size="10"><br/>
性別:<input type="radio" name="sex"
	value="male" checked>男性
<input type="radio" name="sex"
	value="female">女性<br>
<select name="select_major" size="1">
<option selected>資訊管理學系
<option>金融管理學系
<option>東亞語文學系
<option>西洋語文學系
<option>法律學系
<option>政治法律學系
<option>工藝與創意設計學系
<option>財經法律學系
<option>亞太工商管理學系
<option>應用經濟學系
<option>建築學系
<option>應用數學系
<option>土木與環境工程學系
<option>運動健康與休閒學系
<option>應用化學系
<option>應用物理學系
<option>電機工程學系
<option>資訊工程學系
<option>化學工程與材料工程學系
<option>生命科學系
</select>
<h3><font size="4">
欲報名日期:
</font>
<input type="checkbox">12/24
<input type="checkbox">12/25-->
<input type="submit" align="center" value="送出">
</form>
</dir>
</body>
</html>