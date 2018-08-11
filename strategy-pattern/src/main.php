<?php


use MaxKaemmerer\Console\Argument\Argument;
use MaxKaemmerer\Console\Argument\InputArguments;

require_once __DIR__ . '/../vendor/autoload.php';

list($rm, $rate) = InputArguments::fromArguments([
    Argument::create('rm', false, 'remove something'),
    Argument::create('rate', 1.23, 'rate of something'),
])->parse($argv);

var_dump([$rm, $rate]);


// Create code that can be refactored to use the strategy pattern
// - behaviour of something?
// - depending on script arguments?
// - depending on subclass or interface implementation?
// - depending on validation needed?
// - depending on user role?