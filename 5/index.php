<?php
if (isset($_REQUEST['password'])){
    $pass = $_REQUEST['password'];
    validator($pass);
} else{
    include 'task5.html';
}

function validator($pass){
    if (!preg_match('/^.{10,}$/', $pass)){
        echo 'Длина должна быть не менее 10 символов. <br./>';
    }
    if(!preg_match('/^(.*?[a-z]){2,}.*$/', $pass) ||
        !preg_match('/^(.*?[A-Z]){2,}.*$/', $pass) ||
        !preg_match('/^(.*?[0-9]){2,}.*$/', $pass) ||
        !preg_match('/^(.*?[%$#_*]){2,}.*$/', $pass)){
        echo 'Пароль должен содержать не менее 2 латинских прописных букв; латинских строчных букв; цифры и символы %$#_*. <br./>';
    }
    if(preg_match('/^.*[a-z]{4,}.*$/', $pass) ||
        preg_match('/^.*[A-Z]{4,}.*$/', $pass) ||
        preg_match('/^.*[0-9]{4,}.*$/', $pass) ||
        preg_match('/^.*[%$#_*]{4,}.*$/', $pass)){
        echo 'Пароль не должен содержать более 3х символов подряд: латинских прописных букв; латинских строчных букв; цифр и символов %$#_*. <br./>';
    }
}