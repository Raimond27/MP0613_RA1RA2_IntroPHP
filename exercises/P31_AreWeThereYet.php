<?php

class P31_AreWeThereYet
{
    public function main(): void
    {
        while (true) {
            echo "Give a number:";
            $input = trim(fgets(STDIN));
            if ($input === "4") {
                break;
            }
        }
    }
}
