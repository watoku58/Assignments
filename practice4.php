<?php
//課題3
function multiplication($arr){
    $result = 1;
    foreach($arr as $a){
        $result *= $a;
    }
    return $result;
}
echo multiplication([1,3,5,7,9]);
echo "\n"
?>
