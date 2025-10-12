<?php

$colours = ['Red', 'Green', 'Blue', 'Yellow', 'Orange'];

$ages = [23,31,55];

$sum = array_sum($ages);
$count = count($ages);

print "Sum : {$sum}\n";
print "Count : {$count}\n";

print (array_sum($ages) / count($ages)) . "\n";

print $colours[array_rand($colours)] . "\n";

foreach($colours as $colour_key => $colour_value){
    $colour_value_lower = strtolower($colour_value);
    print "colour {$colour_key} - {$colour_value_lower} \n";
}