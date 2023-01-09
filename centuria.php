<?php
/*
Given a year, return the century it is in. The first century spans from the year 1 up to and including the year 100, the second - from the year 101 up to and including the year 200, etc.
*/
function century($year){
$r = $year/100;
$d = sprintf("%.2f", $r);
$d = explode(".", $d);
    if ($d[1]>0){
        $century = $d[0]+1;
        return $century;
    } else{
        $century = $d[0];
        return $century;
    }
}
?>