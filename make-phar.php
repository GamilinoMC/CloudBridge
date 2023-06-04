<?php

if (file_exists(__DIR__ . "/PocketCloud.phar")) unlink(__DIR__ . "/PocketCloud.phar");

$phar = new Phar(__DIR__ . "/PocketCloud.phar", 0, "PocketCloud.phar");
$phar->buildFromDirectory(__DIR__ . "/", "/\.php$/");
if (isset($phar["make-phar.php"])) unset($phar["make-phar.php"]);
if (isset($phar["make-phar.bat"])) unset($phar["make-phar.bat"]);
$phar->compressFiles(Phar::GZ);