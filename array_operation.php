<?php
// 1. Create an array
$fruits = ["apple", "banana", "orange"];
$fruits = array("apple", "banana", "orange");

// 2. Add item to array
$fruits[] = "grape"; // adds to end
// $fruits = array_push($fruits, "grape");

// 3. Count items
$count = count($fruits); // 4

// 4. Access item
$first = $fruits[0]; // "apple"

// 5. Loop through array
foreach ($fruits as $fruit) {
    echo $fruit . "\n";
}

// 6. Check if value exists
$hasBanana = in_array("banana", $fruits); // true

// 7. Search for value index
$index = array_search("orange", $fruits); // 2

// 8. Remove last item
array_pop($fruits); // removes "grape"

// 9. Remove first item
array_shift($fruits); // removes "apple"

// 10. Add to beginning
array_unshift($fruits, "mango");

// 11. Merge arrays
$veggies = ["carrot", "tomato"];
$all = array_merge($fruits, $veggies);

// 12. Sort array
sort($fruits); // alphabetical sort

// 13. Reverse sort
rsort($fruits);

// 14. Get only keys or values
$keys = array_keys($fruits);
$values = array_values($fruits);

// 15. Associative array
$person = ["name" => "Dhiraj", "role" => "Dev"];
echo $person["name"]; // Dhiraj

// 16. Check key exists
$hasKey = array_key_exists("role", $person); // true