<?php

$string1 = "ABC";
$string2 = "DEF";

// 1. Concatenation
$concatenated = $string1 . $string2;          // "ABCDEF"
$withSpace = $string1 . ' ' . $string2;       // "ABC DEF"

// 2. String Length
$length = strlen($string1);                   // 3

// 3. String to Lower / Upper
$lower = strtolower("HELLO");                 // "hello"
$upper = strtoupper("hello");                 // "HELLO"

// 4. Substring
$sub = substr("Hello World", 0, 5);           // "Hello"

// 5. Replace : str_replace(FIND, REPLACE, STRIING);
// str_replace(KYA, KISSE, KISME);
$replaced = str_replace("World", "PHP", "Hello World"); // "Hello PHP"

// 6. Position of substring
$pos = strpos("Hello World", "World");        // 6 - at 7th postion

// 7. Trim spaces
$trimmed = trim("  hello  ");                 // "hello"
$trimmed = ltrim("  hello  ");                 // "hello   "
$trimmed = rtrim("  hello  ");                 // "  hello"

// 8. String comparison - less 0 if str1 is less than str2; > 0 if str1 is greater than str2, and 0 if they are equal.

$isSame = strcmp("abc", "abc");               // 0 (equal), -1 or 1 otherwise

// 9. Explode string to array
$parts = explode(",", "apple,banana,orange"); // ['apple', 'banana', 'orange']

// 10. Implode array to string
$arr = ['apple', 'banana', 'orange'];
$joined = implode("-", $arr);               // "apple-banana-orange"

echo $concatenated;