<?php

class P18_Ancient
{
    public function main(): void
    {
        // Write your code here
        // Prompt the user for input
       // Prompt the user for input
        echo "Give a year: ";

        // Get input from the user and cast to integer
        $year = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        // Check year value according to the test cases
        if ($year <= 2014) {
            echo "Ancient history!" . PHP_EOL;
        }
     
    }
}
