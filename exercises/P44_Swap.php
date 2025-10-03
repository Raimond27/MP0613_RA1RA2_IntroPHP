<?php

class P44_Swap
{
    public function main(): void
    {
        $array = [1, 3, 5, 7, 9];

        foreach ($array as $value) {
            echo $value . "\n";
        }
        echo "\n"; 
        $handle = fopen("php://stdin", "r");

        $index1_str =  trim(fgets($GLOBALS['STDIN']  ??  STDIN));
        $index2_str =  trim(fgets($GLOBALS['STDIN']  ??  STDIN));

        fclose($handle);

        $index1 = (int)$index1_str;
        $index2 = (int)$index2_str;

        $arraySize = count($array);
        if ($index1 >= 0 && $index1 < $arraySize &&
            $index2 >= 0 && $index2 < $arraySize) {


            $temp = $array[$index1];
            $array[$index1] = $array[$index2];
            $array[$index2] = $temp;
        }

        echo "\n"; 
        foreach ($array as $value) {
            echo $value . "\n";
        }
    }
}