<?php

declare(strict_types=1);

use MaxKaemmerer\Console\Argument\Argument;
use MaxKaemmerer\Console\Argument\InputArguments;
use MaxKaemmerer\DevMeetings\StrategyPattern\CliInput\Exception\ValidationException;
use MaxKaemmerer\DevMeetings\StrategyPattern\CliInput\Exports\Export;
use MaxKaemmerer\DevMeetings\StrategyPattern\CliInput\Exports\FullExport;
use MaxKaemmerer\DevMeetings\StrategyPattern\CliInput\Exports\ImageExport;

require_once __DIR__ . '/../vendor/autoload.php';

[$exportType] = InputArguments::fromArguments([
    Argument::create('export', 'full', 'Type of export you would like to do.'),
])->parse($argv);

/** @var Export $export */
$export = null;

switch ($exportType){
    case 'full':
        $export = new FullExport();
        break;
    case 'images':
       $export = new ImageExport();
        break;
    default:
        $export = new FullExport();
}

try{
    $export(__DIR__ . '/../exports');
    $export->validate();
    echo 'Success!';
} catch (ValidationException $exception){
    error_log($exception->getMessage());
}