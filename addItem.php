<?php
    include("function/request.php");
    include("config/config.php");

    $item = formatPost('item');
    var_dump($item);
    if(!file_exists(FILE_NAME)){
        file_put_contents(FILE_NAME, serialize([]));
    }
    $tabItems = unserialize(file_get_contents(FILE_NAME));
    $tabItems[] = ['intitule'=>$item]; 
    file_put_contents(FILE_NAME, serialize($tabItems));

    header('Location:index.php');