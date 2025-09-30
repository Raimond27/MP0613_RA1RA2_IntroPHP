<?php

class P41_FromWhereToWhere
{
    public function main(): void
    {
        $from = (int) trim(fgets($GLOBALS['STDIN']  ??  STDIN));
        $to = (int) trim(fgets($GLOBALS['STDIN']  ??  STDIN));

        if ($from > $to) {
            [$from, $to] = [$to, $from];
        }

        for ($i = $from; $i <= $to; $i++) {
            echo $i . "\n"; 
        }
    }
}