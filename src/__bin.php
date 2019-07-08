<?php
declare(strict_types=1);

require "../vendor/autoload.php";

// Prepare Arguments
$args = $argv[1] ?? "";
$args = explode(";", substr($args, 1, -1));

// Instantiate CLI
/** @noinspection PhpUnhandledExceptionInspection */
$bin = new \Comely\Filesystem\Directory(__DIR__);
$cli = new \Comely\App\CLI('\App', dirname(__FILE__), $bin, $args);

// Execute
$cli->exec();