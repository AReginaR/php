<?php

if (isset($_REQUEST['code'])) {
    $text = $_REQUEST['code'];
    $str = $_REQUEST['str'];
} else {
    include 'index.html';
}

$arr = [];
$arr[0] = 0;
$cell = 0;
$str_cell = 0;
$out = "";

for ($i = 0; $i < strlen($text); $i++) {
    switch ($text[$i]) {
        case '>':
            $cell++;
            if (!isset($arr[$cell])) {
                $arr[$cell] = 0;
            }
            break;
        case '<':
            $cell--;
            if (!isset($arr[$cell])) {
                $arr[$cell] = 0;
            }
            break;
        case '+':
            $arr[$cell]++;
            if ($arr[$cell] == 256) {
                $arr[$cell] = 0;
            }
            break;
        case '-':
            $arr[$cell]--;
            if ($arr[$cell] == -1) {
                $arr[$cell] = 255;
            }
            break;
        case '.':
            $out .= chr($arr[$cell]);
            break;
        case ',':
            $arr[$cell] = ord($str[$str_cell]);
            $str_cell++;
            break;
        case '[':
            if ($arr[$cell] == 0) {
                $count = 0;
                while (true) {
                    if ($text[$i] == '[') {
                        $count++;
                    } elseif ($text[$i] == ']') {
                        $count--;
                    }
                    $i++;
                    if ($count == 0) {
                        break;
                    }
                }
            }
            break;
        case ']':
            if ($arr[$cell] != 0) {
                $count = 0;
                while (true) {
                    if ($text[$i] == ']') {
                        $count++;
                    } elseif ($text[$i] == '[') {
                        $count--;
                    }
                    $i--;
                    if ($count == 0) {
                        break;
                    }
                }
            }
            break;
    }
}
echo $out;