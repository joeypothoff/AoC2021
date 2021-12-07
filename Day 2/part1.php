<?php

    $input = file_get_contents('input.txt');
    $input_array = explode("\n", $input);

    $horizontal = 0; // horizontal position
    $depth = 0; // depth of submarine

    foreach($input_array as $value) {
        $value = explode(" ", $value);
        $side = $value[0];
        $position = (int)$value[1];

        switch($side) {
            case 'forward':
                $horizontal += $position;
                break;
            case 'up':
                $depth -= $position;
                break;
            case 'down':
                $depth += $position;
                break;
        }
    }


    echo $horizontal . "<br>";
    echo $depth . "<br>";
    echo "Total: " . $horizontal * $depth;