<?php

function createArray($x, $y)
{
    $array = new SplFixedArray($x);

    for ($i = 0; $i < $x; $i++) {
        $array[$i] = $y * $i;
    }
    return $array;
}

if (isset($_POST["submit"])) {
    $v1 = $_POST['n1'];
    $v2 = $_POST['n2'];

    $arr = createArray($v1, $v2);

    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}

?>