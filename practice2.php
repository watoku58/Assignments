<?php

$name = "高";
if ($name == "高橋"){
 echo "私は高橋です";
}else{
 echo "高橋ではありません";
}

$total = 0;
echo $total;
for($i = 0; $i <= 10000; $i++){
    $total += $i;
}
echo $total;

$fruits = array("apple", "melon", "strawberry", "peach", "grape");
foreach($fruits as $fruits){
    echo $fruits;
    echo "\n";
}

$start = 1;
$end = 100;
for($i = $start; $i <= $end; $i++){
  if($i % 5 == 0){
    echo $i;
  }
}