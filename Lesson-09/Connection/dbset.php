<?php
//新版sql連線指令
$host = "localhost";
$user = "root";
$password = "12345678";
$database = "lincan";
$link = mysqli_connect($host,$user,$password,$database);
if($link<>false){
        mysqli_query($link,"SET CHARACTER UTF8");
    } 
?>