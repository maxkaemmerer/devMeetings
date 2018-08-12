<?php

declare(strict_types=1);

namespace MaxKaemmerer\DevMeetings\StrategyPattern\CliInput\Exports;


use MaxKaemmerer\DevMeetings\StrategyPattern\CliInput\Exception\ValidationException;

final class ImageExport extends Export
{

    public function __invoke(string $to): void
    {
        $data = 'iVBORw0KGgoAAAANSUhEUgAAABwAAAASCAMAAAB/2U7WAAAABl'
            . 'BMVEUAAAD///+l2Z/dAAAASUlEQVR4XqWQUQoAIAxC2/0vXZDr'
            . 'EX4IJTRkb7lobNUStXsB0jIXIAMSsQnWlsV+wULF4Avk9fLq2r'
            . '8a5HSE35Q3eO2XP1A1wQkZSgETvDtKdQAAAABJRU5ErkJggg==';
        $data = base64_decode($data);

        $im = imagecreatefromstring($data);
        if ($im !== false) {
            header('Content-Type: image/png');
            imagepng($im, $to . '/img.png');
        }
    }

    /**
     * @throws ValidationException
     */
    public function validate(): void
    {
        // this does nothing, no validation required
    }
}