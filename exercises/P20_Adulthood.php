<?php

class P20_Adulthood
{
    public function main(): void
    {
        // Prompt the user for input
        echo "How old are you? ";

        // Use the global STDIN stream to allow test mocking
        $input = trim(fgets($GLOBALS['STDIN']));

        // Convert input to integer (invalid inputs become 0)
        $age = (int) $input;

        // Check age value
        if ($age >= 18) {
            echo "You are an adult.\n";
        } else {
            echo "You are not an adult yet.\n";
        }
       
    }
}
