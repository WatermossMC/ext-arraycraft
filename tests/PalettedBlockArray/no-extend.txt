--TEST--
Tests that PalettedBlockArray cannot be extended
--SKIPIF--
<?php if(!extension_loaded("arraycraft")) die("skip extension not loaded"); ?>
--FILE--
<?php

var_dump(new class(1) extends \watermossmc\world\format\PalettedBlockArray{});

?>
--EXPECTF--
Fatal error: Class %s@anonymous %s final class %s in %s on line %d
