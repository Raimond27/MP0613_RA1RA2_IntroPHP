<?php

class P33_NumberOfNumbers
{
    public function main(): void
    {
        $count = 0;
        while (true) {
            echo "Give a number:";
            $input = trim(fgets($GLOBALS['STDIN']  ??  STDIN));
            $number = (int)$input;

            if ($number === 0) {
                break;
            }

            $count++;
        }
        echo "Number of numbers: " . $count . "\n";
    }
}
