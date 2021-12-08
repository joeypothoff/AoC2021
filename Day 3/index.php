<?php
    
    $content = file_get_contents('input.txt');
    $numbers = explode("\n", $content);

    $r = array();
    for ($i = 0; $i < 12; $i++) { 
        $r[$i] = array();
        $r[$i]['0'] = 0; 
        $r[$i]['1'] = 0;
    }

    foreach ($numbers as $number) {
        for ($i = 0; $i < strlen($number); $i++) { 
            $c = substr($number, $i, 1);
            $r[$i][$c]++;
        }
    }

    $gamma = '';
    $epsilon = ''; 

    for ($i = 0; $i < 12; $i++) {
        $least = $r[$i]['0'] < $r[$i]['1'] ? '0' : '1';
        $most  = $r[$i]['0'] > $r[$i]['1'] ? '0' : '1';
        
        $gamma .= $most;
        $epsilon .= $least;
    }

    $gamma_dec = base_convert($gamma, 2, 10);
    $epsilon_dec = base_convert($epsilon, 2, 10);

    $result = $gamma_dec * $epsilon_dec;

    echo "Result: $result";