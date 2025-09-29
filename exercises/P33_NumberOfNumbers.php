<?php

class P33_NumberOfNumbers
{
    public function main(): void
    {
        $count = 0;

        while (true) {
            echo "Give a number:";
            $input = (int) trim(fgets(STDIN));

            if ($input === 0) {
                break;
            }

            $count++;
        }

        echo "Number of numbers: " . $count;
    }
}
