<?php
declare(strict_types=1);
require __DIR__.'/../vendor/autoload.php';

use Symfony\Component\Console\Application;
use Sywlwl\ComposerSet\Command\GetTimeCommand;


$application = new Application();
$application->add(new GetTimeCommand());
$application->run();