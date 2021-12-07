<?php

    // get puzzle input
    $input = file_get_contents('input.txt');
    $input_array = explode("\n", $input);

    $horizontal = 0; // horizontal position
    $depth = 0; // depth of submarine
    $aim = 0;

    foreach($input_array as $value) {
        $value = explode(" ", $value);
        $side = $value[0];
        $position = (int) $value[1];

        switch($side) {
            case 'forward':
                $horizontal += $position;

                if($aim > 0) {
                    $depth += $position * $aim;
                }

                break;
            case 'up':
                $aim -= $position;
                break;
            case 'down':
                $aim += $position;
                break;
        }
    }

    echo "Total: " . $horizontal * $depth;