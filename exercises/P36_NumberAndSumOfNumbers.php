<?php

class P36_NumberAndSumOfNumbers
{
    public function main(): void
    {
        $count = 0;
        $sum = 0;

        while (true) {
            echo "Give a number:";
            $input = (int) trim(fgets(STDIN));

            if ($input === 0) {
                break;
            }

            $count++;
            $sum += $input;
        }

        echo "Number of numbers: " . $count . "\n";
        echo "Sum of the numbers: " . $sum;
    }
}
