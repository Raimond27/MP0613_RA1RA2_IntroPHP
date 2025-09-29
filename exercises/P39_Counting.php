<?php

class P39_Counting
{
    public function main(): void
    {
        // Read input from stdin
        $line = trim(fgets(STDIN));
        $number = (int)$line;

        // Print numbers from 0 to the input number
        for ($i = 0; $i <= $number; $i++) {
            echo $i . PHP_EOL;
        }
    }
}
