<?php

class P38_AverageOfPositiveNumbers
{
    public function main(): void
    {
        $numbers = [];

        while (true) {
            $line = trim(fgets(STDIN));
            $number = (float)$line;

            if ($number === 0.0) {
                break;
            }

            if ($number > 0) {
                $numbers[] = $number;
            }
        }

        if (count($numbers) === 0) {
            echo "Cannot calculate the average" . PHP_EOL;
        } else {
            $average = array_sum($numbers) / count($numbers);
            // If the average is a whole number, output without decimal
            if (floor($average) == $average) {
                echo (int)$average . PHP_EOL;
            } else {
                echo $average . PHP_EOL;
            }
        }
    }
}
