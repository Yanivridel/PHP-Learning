<?php

$string = "Hello World! Welcome to PHP string functions.";

// 1. Length of the string
// strlen(string): Returns the length of the string.
$length = strlen($string);
echo "Length of the string: $length\n";

// 2. Extract a portion of the string
// substr(string, start, length): Extracts a substring starting at 'start' and optionally up to 'length'.
$substring = substr($string, 6, 5); // Extracts "World"
echo "Extracted substring: $substring\n";

// 3. Find the position of the first occurrence of a substring
// strpos(string, substring, start): Finds the position of 'substring' in 'string' starting from 'start' (default 0).
$position = strpos($string, "l");
echo "Position of 'l': $position\n";

// 4. Replace a substring
// str_replace(search, replace, subject): Replaces 'search' with 'replace' in 'subject'.
$replacedString = str_replace("World", "Universe", $string);
echo "String after replacement: $replacedString\n";

// 5. Convert to lowercase
// strtolower(string): Converts the string to lowercase.
$lowercaseString = strtolower($string);
echo "Lowercase string: $lowercaseString\n";

// 6. Convert to uppercase
// strtoupper(string): Converts the string to uppercase.
$uppercaseString = strtoupper($string);
echo "Uppercase string: $uppercaseString\n";

// 7. Reverse the string
// strrev(string): Reverses the string.
$reversedString = strrev($string);
echo "Reversed string: $reversedString\n";

// 8. Repeat the string
// str_repeat(string, times): Repeats the string 'times' times.
$repeatedString = str_repeat("PHP ", 3);
echo "Repeated string: $repeatedString\n";

// 9. Trim whitespace from both sides
// trim(string, charlist): Removes characters (default: whitespace) from both sides of the string.
$trimmedString = trim("   PHP Rocks!   ");
echo "Trimmed string: '$trimmedString'\n";

// 10. Split string into an array
// explode(delimiter, string): Splits the string into an array using 'delimiter'.
$splitArray = explode(" ", $string);
echo "String split into an array: ";
print_r($splitArray);

// 11. Join an array into a string
// implode(glue, array): Joins the array elements into a string using 'glue'.
$joinedString = implode(" ", $splitArray);
echo "Array joined back into a string: $joinedString\n";

// 12. Hash a string
// md5(string): Generates an MD5 hash of the string.
$hashedString = md5($string);
echo "MD5 hash of the string: $hashedString\n";

// 13. Check if a substring exists
// str_contains(string, needle): Checks if 'needle' exists in 'string' (PHP 8+).
$contains = str_contains($string, "Welcome") ? "Yes" : "No";
echo "Does the string contain 'Welcome'? $contains\n";

// 14. Format a string
// sprintf(format, args): Returns a formatted string.
$formattedString = sprintf("Hello %s! Your score is %d.", "John", 95);
echo "Formatted string: $formattedString\n";

// 15. Shuffle the string
// str_shuffle(string): Randomly shuffles the characters of the string.
$shuffledString = str_shuffle($string);
echo "Shuffled string: $shuffledString\n";

// 16. Compare two strings (case-sensitive)
// strcmp(string1, string2): Compares two strings and returns 0 if they are equal, >0 if string1 > string2, <0 if string1 < string2.
$comparison = strcmp("abc", "ABC");
echo "Comparison of 'abc' and 'ABC': $comparison\n";

// 17. Count the number of substring occurrences
// substr_count(string, substring): Counts occurrences of 'substring' in 'string'.
$count = substr_count($string, "o");
echo "Occurrences of 'o': $count\n";

// 18. HTML Entities
// htmlspecialchars(string): Converts special characters to HTML entities.
$htmlString = htmlspecialchars("<h1>PHP</h1>");
echo "HTML entities: $htmlString\n";

// 19. Pad a string to a certain length
// str_pad(string, length, pad_string, pad_type): Pads the string to 'length' with 'pad_string'.
$paddedString = str_pad("PHP", 10, "*", STR_PAD_BOTH);
echo "Padded string: '$paddedString'\n";

// 20. Split string by regular expression
// preg_split(pattern, string): Splits the string by a regular expression.
$splitByRegex = preg_split("/[\s,.]+/", $string);
echo "String split by regex: ";
print_r($splitByRegex);

// 21. Strip whitespace (left and right)
// ltrim(string): Removes whitespace from the beginning.
// rtrim(string): Removes whitespace from the end.
$ltrimmedString = ltrim("   PHP Rocks!   ");
$rtrimmedString = rtrim("   PHP Rocks!   ");
echo "Left trimmed string: '$ltrimmedString'\n";
echo "Right trimmed string: '$rtrimmedString'\n";

?>
