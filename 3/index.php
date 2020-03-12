<?php
function sorting($arr){
    $sort_text = [];

    for($i = 0; $i < count($arr); $i++){
        array_push($sort_text, explode(' ', $arr[$i]));
    }

    for($i=0; $i < count($arr); $i++){
        $new_string = $sort_text[$i];
        shuffle($new_string);
        array_push($sort_text, $new_string);
    }

    usort($sort_text, function ($a, $b){
        if ($a[1] < $b[1]){
            return -1;
        } else {
            return 1;
        }
    });

    for ($i = 0; $i < count($sort_text); $i++){
        $sort_text[$i] = implode(" ", $sort_text[$i]);
    }

    return $sort_text;
}

if(isset($_REQUEST['text'])){
    $text = $_REQUEST['text'];
    $array = explode("\n", $text);
    $arr = sorting($array);
    foreach ($arr as $value){
        echo $value.'<br />';
    }
} else{
    include 'task3.html';
}

//Happy birthday mister president
//Bad guys allways lose