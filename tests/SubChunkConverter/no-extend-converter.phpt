--TEST--
Tests that SubChunkConverter cannot be extended
--SKIPIF--
<?php if(!extension_loaded("arraycraft")) die("skip extension not loaded"); ?>
--FILE--
<?php

var_dump(new class extends \watermossmc\world\format\io\SubChunkConverter{});

?>
--EXPECTF--
Fatal error: Class %s@anonymous %s final class %s in %s on line %d
