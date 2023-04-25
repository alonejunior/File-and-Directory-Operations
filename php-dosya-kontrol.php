<?php

/*
file_exists() -> dosya varmı yokmu kontrol eder
 */

$a='header.php';


if(file_exists($a))
{
    global $a;
    echo $a . ' ' . 'adında bir dosyanız bulunmaktadır';
}

else 
{
    echo $a . ' ' . 'adında bir dosyanız bulunmamaktadır';
}



?>