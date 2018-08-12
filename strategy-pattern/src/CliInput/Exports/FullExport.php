<?php

declare(strict_types=1);

namespace MaxKaemmerer\DevMeetings\StrategyPattern\CliInput\Exports;


use MaxKaemmerer\DevMeetings\StrategyPattern\CliInput\Exception\ValidationException;

final class FullExport extends Export
{
    public $values = [];
    private $to = '';

    /**
     * FullExport constructor.
     */
    public function __construct()
    {
        $this->values = range(1, 15);
    }


    public function __invoke(string $to): void
    {
        $this->to = $to;
        if(!is_dir($to)){
            mkdir($to, 0777, true);
        }
        foreach ($this->values as $value){
            file_put_contents($this->getFileName($to, $value), $value);
        }
    }

    /**
     * @throws ValidationException
     */
    public function validate(): void
    {
        foreach ($this->values as $value){
            $filename = $this->getFileName($this->to, $value);
            if(!file_exists($filename)){
                throw new ValidationException(sprintf('File "%s" not found.', $filename));
            }
        }
    }

    /**
     * @param string $to
     * @param $value
     * @return string
     */
    private function getFileName(string $to, $value): string
    {
        return $to . '/' . $value . '.txt';
    }
}