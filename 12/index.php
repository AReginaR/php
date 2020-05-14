<?php
require_once 'generator.php';

if (isset($_REQUEST['btn'])){
    $str = $_REQUEST['str'];
    if(!isset($_COOKIE['cookie'])){
        setcookie("cookie", $str, time()+3600);
        $_COOKIE["cookie"] = $str;
    }
}