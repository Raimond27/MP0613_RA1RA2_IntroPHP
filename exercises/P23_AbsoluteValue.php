<?php

declare(strict_types=1);

class P23_AbsoluteValue
{
    public function main(): void
    {
        $number = (int)trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        $absoluteValue = abs($number);

        echo $absoluteValue . "\n";
    }
}

?>