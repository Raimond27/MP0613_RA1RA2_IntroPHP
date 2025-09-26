<?php

class P26_Same
{
    public function main(): void
    {
        echo "Enter the first string:\n";
        $input1 = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        echo "Enter the second string:\n";
        $input2 = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if ($input1 === $input2) {
            echo "Same\n";
        } else {
            echo "Different\n";
        }
    }
}

?>