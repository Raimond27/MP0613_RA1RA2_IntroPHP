<?php

class P17_Orwell
{
    public function main(): void
    {
        // Prompt the user for input
        echo "Give a number: ";

        // Get input from the user
        $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));


        // Check if the input is exactly 1984
        if ($input == 1984) {
            echo "Orwell" . PHP_EOL;
        } else {
            echo "You entered: $input" . PHP_EOL;
        }
       
    }
}
