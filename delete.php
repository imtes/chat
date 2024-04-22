<?php
    $chat=fopen("chat.txt","w");
    fwrite($chat," \n");
    fclose($chat);
    header("Location:index.php");