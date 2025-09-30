<?php

class P40_CountingToHundred
{
    public function main(): void
    {
        $line = trim(fgets($GLOBALS['STDIN']  ??  STDIN));

        $start = (int)$line;

        if ($start > 100) {
            return; 
        }

        for ($i = $start; $i <= 100; $i++) {
            echo $i . "\n";
        }
    }
}