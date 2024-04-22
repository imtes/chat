<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/style2.css">
    <title>Чат</title>
</head>
<body>
<pre>
<?php
    $masages=fopen("chat.txt",'r');
    echo fread($masages,filesize("chat.txt"));
    fclose($masages);?> 


</pre>
<form action="chat2.php" method="post">
    <input type="text" name="info">
    <button type="submit" id="but">Отправить</button>
    <?php $name=$_GET["name"] ?>
    <input type="text" name="user" value="<?= $name ?>" id="u">
</form>
    
</body>
</html>