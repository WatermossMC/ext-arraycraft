<?php

/**
 * @generate-function-entries
 */

namespace watermossmc\world\format;

final class LightArray{

	public function __construct(string $payload){}

	public static function fill(int $level) : \watermossmc\world\format\LightArray{}

	public function get(int $x, int $y, int $z) : int{}

	public function set(int $x, int $y, int $z, int $level) : void{}

	public function getData() : string{}

	public function collectGarbage() : void{}

	public function isUniform(int $level) : bool{}
}
