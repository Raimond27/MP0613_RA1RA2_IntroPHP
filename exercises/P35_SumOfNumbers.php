<?php

class P35_SumOfNumbers
{
    public function main(): void
    {
        $sum = 0;

        while (true) {
            echo "Give a number:";

            $input = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

            if ($input === 0) {
                break;
            }

            $sum += $input;
        }

        echo "Sum of the numbers: " . $sum;
    }
}