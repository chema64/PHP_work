<?php

$array = [];

for ($i = 1; $i <= 10; $i++) {

    if($i < 4) {
        $array[$i] = "a";
        echo $array[$i];
        echo $i;
        ##echo $array[$i]. ", " .$i;

    }elseif ($i >= 4 && $i <= 7) {
        $array[$i] = "b";
        echo $array[$i];
        echo $i;
    }
    elseif($i >= 8) {
        $array[$i] = "c";
        echo $array[$i];
        echo $i;

    }

}
