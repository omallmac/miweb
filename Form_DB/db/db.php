<?php
    $db=new mysqli("localhost","root","Antonio12862437227","form");
    $db ->set_charset("utf8");

    if($db ->connect_errno){
        echo "Error | Connect to database MySQL";
        exit();
    }
?>