<?php

class P28_LeapYear
{
    public function main(): void
    {
        echo "Give a year\n";
        $year = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        $isLeap = false;

        if ($year % 4 === 0) {
            if ($year % 100 === 0) {
                if ($year % 400 === 0) {
                    $isLeap = true;
                }
            } else {
                $isLeap = true;
            }
        }

        if ($isLeap) {
            echo "The year is a leap year.\n";
        } else {
            echo "The year is not a leap year.\n";
        }
    }
}

?>