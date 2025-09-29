<?php

class P41_FromWhereToWhere
{
    public function main(): void
    {
        $from = (int)trim(fgets(STDIN));
        $to = (int)trim(fgets(STDIN));

        // If from > to, print nothing
        if ($from > $to) {
            return;
        }

        // Print numbers from from to to (inclusive)
        for ($i = $from; $i <= $to; $i++) {
            echo $i . PHP_EOL;
        }
    }
}