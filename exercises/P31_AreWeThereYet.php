<?php

class P31_AreWeThereYet
{
    public function main(): void
    {
        $number = 0;
        while ($number !== 4) {
            echo "Give a number:";
            $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
            $number = (int)$input;
        }
    }
}
