<?php
header("Content-Type: text/html; charset=cp-866");
ini_set('max_execution_time', 900);

if (isset($_REQUEST['address'])){
    $url = $_REQUEST['address'];
    if(strpos($url, 'http') !== FALSE){
        $url_array = parse_url($url);
        $url = $url_array['host'];
    }
    if (isset($_REQUEST['ping'])){
        ping($url);
    }else if (isset($_REQUEST['tracert'])){
        tracert($url);
    } else {
        echo "Выберите Ping или Tracert";
    }
}else{
    include "task7.html";
}

function ping($url){
    exec(escapeshellcmd("ping $url"), $arr);
    showIp($arr);
    echo "Ping: <br/>";
    if ($arr[8] != null){
        echo 100 - (int)$arr[8]."% успешно. <br/>";
    } else{
        echo"Error<br/>";
    }
}

function tracert($url){
    exec(escapeshellcmd("tracert $url"), $arr);
    showIp($arr);
    echo "Tracert: <br/>";
    $ip_match = [];
    for($i = 3; $i < count($arr); $i++){
        if(preg_match('/\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}/', $arr[$i], $ip_match)){
            echo $ip_match[0]."  ";
        }

    }

}

function showIp($arr){
//    $ip = gethostbyname($url);
//    echo "Ip address: <b>".$ip.'</b><br/>';
//}

    if(preg_match("/\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}/", $arr[1], $ip_match)){
        echo"Ip address: <b>".$ip_match[0].'</b><br/>';
    }

}
?>
