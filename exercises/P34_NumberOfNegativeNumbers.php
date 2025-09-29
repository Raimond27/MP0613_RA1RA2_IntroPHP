<?php

class P34_NumberOfNegativeNumbers
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

            if ($input < 0) {
                $count++;
            }
        }

        echo "Number of negative numbers: " . $count;
    }
}
