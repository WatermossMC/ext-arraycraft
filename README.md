# ext-arraycraft

![CI](https://github.com/WatermossMC/ext-arraycraft/workflows/CI/badge.svg)

## What is this?
This extension implements some performance-sensitive components of watermossmc-MP's internal chunk handling system in C++ for better performance and lower memory usage.

## What's in the extension?
At the time of writing:

- `\watermossmc\world\format\PalettedBlockArray`: This class implements paletted block-storages as per modern MCPE since 1.2.13.
- `\watermossmc\world\format\io\SubChunkConverter`: This class contains a series of helper methods for upgrading legacy world terrain.
- `\watermossmc\world\format\LightArray`: Implements a 16x16x16 nibble array used for light storage.

## What's in the folders?
- `gsl`: Subtree merge of https://github.com/microsoft/GSL
- `lib`: Library code implementing various chunk components. The code in here is unfettered by PHP and can be used on its own.
- `src`: Binding code that glues together PHP and the C++ arraycraft components.
- `tests`: `.phpt` tests for the extension which can be run with PHP's `run-tests.php` tool (or `make test` when using PHP's build system)
