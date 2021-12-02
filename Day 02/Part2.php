<?php

// Read the input file
$input = file_get_contents('input.txt');

//variables
$aim = 0;
$sumF = 0;
$sumD = 0;
$solution = 0;


// Loop through each line
foreach (explode("\n", $input) as $line) {
    // turn the lines into direction array with direction then integer
    [$direction, $distance] = explode(' ', $line);
    // define direction and distance
    $direction = trim($direction);
    $distance = (int)trim($distance);
    
    // if direction is down or up, change aim accordingly
    if ($direction == 'down') {
        //add distance to aim
        $aim += $distance;
    }
    elseif ($direction == 'up') {
        //subtract distance from aim
        $aim -= $distance;
    }
    // if direction is "forward", add to direction and multiply by aim
    else {
        $sumF += $distance;
        $sumD += $distance * $aim;
    }
    // multiply sumF and sumD
    $solution = $sumF * $sumD;

}

// print solution
echo "Solution is $solution\n";