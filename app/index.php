<?php

require 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('app');

$log->pushHandler(new StreamHandler(__DIR__ . '/info.log', Logger::INFO));
$log->pushHandler(new StreamHandler(__DIR__ . '/warning.log', Logger::WARNING));

$log->info('Apple');
$log->warning('Banana');
$log->error('Orange');