<?php

class P45_IndexWasNotFound
{
    public function main(): void
    {
        $array = [6, 2, 8, 1, 3, 0, 9, 7];

        $handle = fopen("php://stdin", "r");
        $numberString = trim(fgets($GLOBALS['STDIN']  ??  STDIN));
        fclose($handle);

        $numberToFind = (int)$numberString;

        $index = array_search($numberToFind, $array);

        if ($index !== false) { 
            echo $numberToFind . " is at index " . $index . ".\n";
        } else {
            echo $numberToFind . " was not found.\n";
        }
    }
}