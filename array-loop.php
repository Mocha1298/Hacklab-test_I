<?php
//Array Loop
$aplikasi[1] = "gtAkademik";
$aplikasi[2] = "gtFinansi";
$aplikasi[3] = "gtPerizinan";
$aplikasi[4] = "eCampuz";
$aplikasi[5] = "eOviz";

$ite=1;

while ($ite < 6) {
    echo $aplikasi[$ite];
    echo "<br />";
    $ite++;
}