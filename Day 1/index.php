<?php

    $input = array_map('intval', file('input.txt'));

    // PART 1
    // Initialize counter
    $i_count = 0;

    // check each line of input, when lower than next line, increment counter by 1
    for ($i = 0; $i < count($input) - 1; $i++) {
        if ($input[$i] < $input[$i + 1]) {
            $i_count++;
        }
    }

    echo $i_count;

    echo "<br>";

    // PART 2
    $i_count2 = 0;

    // check each line of input
    for($i = 0; $i < count($input) - 1; $i++) {
        if($i + 3 <= count($input) - 1) {
            if($input[$i] + $input[$i + 1] + $input[$i + 2] < $input[$i + 1] + $input[$i + 2] + $input[$i + 3]) {
                $i_count2++;
            }
        }
    }

    echo $i_count2;