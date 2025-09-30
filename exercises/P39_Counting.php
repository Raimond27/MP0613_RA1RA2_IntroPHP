<?php

class P39_Counting
{
    public function main(): void
    {
   
        $line = trim(fgets($GLOBALS['STDIN']  ??  STDIN));

        $number = (int)$line;

        for ($i = 0; $i <= $number; $i++) {
            echo $i . "\n";
        }
    }
}