<?php

    // TODO: change to puzzle input
    $input = file_get_contents('input.txt');
    $input_array = explode("\n", $input);

    $gammarate = '';
    $epsilon = '';

    for($i = 0; $i < strlen(trim($input_array[0])); $i++) {
        echo strlen(trim($input_array[0]));
        echo "<br>";
        // foreach($input_array as $value) {
        //     echo $value[$i] . "<br>";
        // }
    }

    // count(array_keys($row, '0')) > count(array_keys($row, '1')) ? $gammarate .= '0' : $gammarate .= '1';

    // echo $gammarate;