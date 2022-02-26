<?php
//課題1
function multiplication($value){
    $result = $value * 2;
    return $result;
}
echo multiplication(10);
echo "\n"
?>

<?php
//課題2
function add($a, $b){
    $result = $a + $b;
    return $result;
}
echo add(1, 2);
echo "\n"
?>

<?php
//課題3
function mpl($arr){
    $result = 1;
    foreach($arr as $a){
        $result *= $a;
    }
    return $result;
}
echo mpl([1,3,5,7,9]);
echo "\n"
?>

<?php
$arr = array(1,3,5,7,9);
function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if($a > $max_number){
            $max_number = $a;
        }
    }
    return $max_number;
}
echo max_array($arr);
?>

<?php
//strip_tags - 文字列から HTML および PHP タグを取り除く
$str = "<h1>strip_tags関数</h1>". "<p>タグ取り除く</p>";
echo strip_tags($str)."\n";
?>

<?php
//array_push - 配列に要素を追加する
$array = array(1,3,5,7,9);
$arrayLength = array_push($array,11,13,15,17,19);
echo $arrayLength;
print_r($array);
?>

<?php
//array_marge - 配列を結合する
$array1 = [1, 2, 3];
$array2 = [10, 20, 30];
$array3 = [100, 200, 300];

$array = array_merge($array1, $array2, $array3);
 
print_r($array);
?>

<?php
//mktime - 指定した日時のタイムスタンプを取得する
$time = mktime(0, 0, 0, 20, 2, 2022);
var_dump(date('Y年m月d日h時i分s秒', $time));
print('<br/>');
?>

<?php
//date - 現在日付をフォーマットして日付文字列を返す関数
echo date('Y/m/d');
echo '<br>';
?>