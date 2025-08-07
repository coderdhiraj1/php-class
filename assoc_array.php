<?php
// associative array

$deparments = [
    'PWD' => 'Public Works Department',
    'IT' => 'Information Technology',
    'HR' => 'Human Resources',
    'Finance' => 'Finance Department',
    'Sales' => 'Sales and Marketing',
    'Support' => 'Customer Support',
];

echo "<pre>";
print_r($deparments);

echo "<hr>";

$keys = array_keys($deparments);
print_r($keys);

echo "<hr>";


$values = array_values($deparments);
print_r($values);

$exist = array_key_exists('Support', $deparments);

echo "Is Support exist in the list of deparment? - ". ($exist ? "Yes" : "No");