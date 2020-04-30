<?php

use exceptions\Exception1;
use exceptions\Exception2;
use exceptions\Exception3;
use exceptions\Exception4;
use exceptions\Exception5;

spl_autoload_register(function ($classname){
    include $classname.".php";
});

$myclass = new GenerateExceptions();
for($i = 1; $i < 5; $i++){
    $name = "f".$i;
    try {
        $myclass->$name();
    } catch (Exception1 $e){
        echo $e->getMessage()."\n";
    } catch (Exception2 $e){
        echo $e->getMessage()."\n";
    } catch (Exception3 $e){
        echo $e->getMessage()."\n";
    } catch (Exception4 $e){
        echo $e->getMessage()."\n";
    } catch (Exception5 $e){
        echo $e->getMessage()."\n";
    }
}




