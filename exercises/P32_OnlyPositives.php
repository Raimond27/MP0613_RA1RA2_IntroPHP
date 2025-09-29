<?php

class P32_OnlyPositives
{
    public function main(): void
    {
        while (true) {
            echo "Give a number:";
            $input = (int) trim(fgets(STDIN));

            if ($input === 0) {
                break;
            }

            if ($input < 0) {
                echo "Unsuitable number\n";
                continue;
            }

            echo ($input * $input) . "\n";
        }
    }
}
