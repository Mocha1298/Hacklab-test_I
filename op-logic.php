<?php

$angka1 = 7;
$angka2 = 2;

function hitung($a, $b)
{
    $min = 0;
    $max = 0;
    $hasil = 0;
    $ex_hasil = 0;
    for ($i = 1;$i <= $a;$i++) {
        $ex_hasil = $i*$b;
        if ($ex_hasil > $min) {
            $max = $ex_hasil;
            if ($max <= $a) {
                $hasil = $i;
            }
        }
    }
    echo($a.":".$b."=".$hasil);
}
hitung($angka1, $angka2);