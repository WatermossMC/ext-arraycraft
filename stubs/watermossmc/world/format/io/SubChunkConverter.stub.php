<?php

/**
 * @generate-function-entries
 */

namespace watermossmc\world\format\io;

final class SubChunkConverter{

	public static function convertSubChunkXZY(string $idArray, string $metaArray) : \watermossmc\world\format\PalettedBlockArray{}

	public static function convertSubChunkYZX(string $idArray, string $metaArray) : \watermossmc\world\format\PalettedBlockArray{}

	public static function convertSubChunkFromLegacyColumn(string $idArray, string $metaArray, int $yOffset) : \watermossmc\world\format\PalettedBlockArray{}

	private function __construct(){}
}
