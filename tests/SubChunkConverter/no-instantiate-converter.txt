--TEST--
Tests that SubChunkConverter cannot be instantiated
--SKIPIF--
<?php if(!extension_loaded("arraycraft")) die("skip extension not loaded"); ?>
--FILE--
<?php

var_dump(new \watermossmc\world\format\io\SubChunkConverter);
?>
--EXPECTF--
Fatal error: Uncaught Error: Call to private watermossmc\world\format\io\SubChunkConverter::__construct() from %s in %s:%d
Stack trace:
#0 {main}
  thrown in %s on line %d