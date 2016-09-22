--TEST--
Chyba pro soubor kratší než 12 bytů
--SKIPIF--
<?php
if (!extension_loaded('gd')) die('skip gd extension not available');
?>
--FILE--
<?php
$filename = __DIR__ . '/getimagesize_12bytes.jpg';
$data = "\x1C\x02x\x00\x0ATest image";
$fp = fopen($filename, "wb");
fwrite($fp, $data);
fclose($fp);
var_dump(getimagesize($filename));
?>
--CLEAN--
<?php
$filename = __DIR__ . '/getimagesize_12bytes.jpg';
@unlink($filename);
?>
--EXPECT--
array(5) {
	[0]=>
	int(4)
	[1]=>
	int(1)
	[2]=>
	int(7)
	[3]=>
	string(20) "width="4" height="1""
	["mime"]=>
	string(10) "image/tiff"
}
