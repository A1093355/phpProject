<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>發送電子報</h1>
    <form method = "post"  action="mailsend.php" enctype="multipart/form-data">
    主題:<input type="text" name="topic"></br>
    內容:<textArea name="message" rows="20" cols="20"></textArea></br>
        <input type = "submit" value = "發送">
    </form>
</body>
</html>