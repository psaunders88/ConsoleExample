<?php

require 'vendor/autoload.php';

use Symfony\Component\Console\Application;
use PSaunders88\MathCommand\Command\MathCommand;

$application = new Application();

$application->add(new MathCommand());

$application->run();