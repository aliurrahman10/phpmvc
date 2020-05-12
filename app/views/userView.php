<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php linkCSS("assets/css/style.css"); ?>
    <title>Document</title>
</head>
<body>
<form action="<?php echo BASE_URL; ?>/userController/usersingup" method="POST">
    Author : <input type="text" name="author"><br>
    Title  : <input type="text" name ="title"><br>
    Content: <textarea name ="content"></textarea>
    <input type="submit" value="submit">
</form>
</body>
</html>