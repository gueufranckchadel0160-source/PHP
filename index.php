<?php
    // EXERCICE 01
$integer = 42;
$float = 42.42;
$string = "forty two";
$bool = true;
$null = NULL;

    // EXERCICE 02

$my_array = [
    "to",      // string
    42,        // integer
    "Glory",   // string
    42.42,     // float
    "Geckos"   // string
];

    // EXERCICE 03

function my_concat($str1, $str2)
{
    echo $str1 . $str2;
}



    // EXERCICE 05
    function swap(&$a, &$b)
{
    $temp = $a;
    $a = $b;
    $b = $temp;
}

    // EXERCICE 06
    $func = function($str) {
    return strtoupper($str);
};



    // EXERCICE 07


$func = function($str) {
    return strtoupper($str);
};


?>
