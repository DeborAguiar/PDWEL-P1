<?php

function mdc($v1, $v2){
    $y = min($v1, $v2);
    $x = max($v1, $v2);

    if ($x % $y == 0) {
        return $y;
    } else {
        return mdc($y, ($x % $y));
    }
}

function mmc($x, $y){
    return (($x * $y) / (mdc($x, $y)));
}

$v1 = $_GET['num1'];
$v2 = $_GET['num2'];

$resMMC = mmc($v1, $v2);
$resMDC = mdc($v1, $v2);

echo "O resultado da operação para o  mdc foi de $resMDC e para o mmc de $resMMC";

?>