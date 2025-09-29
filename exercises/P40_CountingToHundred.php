<?php

class P40_CountingToHundred
{
    public function main(): void
    {
        $line = trim(fgets(STDIN));
        $start = (int)$line;

        if ($start > 100) {
            return; // do nothing
        }

        for ($i = $start; $i <= 100; $i++) {
            echo $i . PHP_EOL;
        }
    }
}
