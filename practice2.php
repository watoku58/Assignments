<?php
//課題1
$name = "高";
if ($name == "高橋"){
 echo "私は高橋です\n";
}else{
 echo "高橋ではありません\n";
}

//課題2
$total = 0;
for($i = 1; $i <= 10000; $i++){
    $total += $i;
}
echo $total;
echo "\n";

//課題3
$fruits = array("apple", "melon", "strawberry", "peach", "grape");
foreach($fruits as $fruits){
    echo $fruits;
    echo "\n";
}

//課題4
$start = 1;
$end = 100;
for($i = $start; $i <= $end; $i++){
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}