<?php

//convert input.txt to an integer array
$input = file('input.txt');
$input = array_map('intval', $input);

//check each line to see if the number is lower than the one after it, if so add 1 to counter
$counter = 0;
foreach ($input as $key => $value) {
    if ($value < $input[$key + 1]) {
        $counter++;
    }
}

//output result
echo "There are $counter lines in the file that are higher than the previous line";
