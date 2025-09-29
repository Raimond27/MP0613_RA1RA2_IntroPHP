<?php
class P37_AverageOfNumbers
{
    public function main(): void
    {
        $numbers = [];

        while (true) {
            $line = trim(fgets(STDIN));
            $number = (float)$line;

            if ($number === 0.0) break;

            $numbers[] = $number;
        }

        $average = count($numbers) > 0 ? array_sum($numbers) / count($numbers) : 0;
        echo "Average of the numbers: " . $average . PHP_EOL;
    }
}
