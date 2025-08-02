<?php
// This script demonstrates the use of an associative array in PHP.

// 1. Define an associative array.
// The keys are the names of the countries (strings).
// The values are the names of their capitals (strings).
$capitals = array(
    "Bangladesh" => "Dhaka",
    "Pakistan" => "Islamabad",
    "India" => "Delhi",
    "France" => "Paris",
    "India" => "New Delhi",
    "Iran" => "Tehran",
    "Bahrain" => "Manama"
);

// 2. Loop through the array and display the contents.
// The `foreach` loop is ideal for iterating over associative arrays.
// In each iteration, it assigns the key to the $country variable
// and the corresponding value to the $capital variable.
echo "Displaying countries and their capitals:\n";
echo "<ul>";
foreach ($capitals as $country => $capital) {
    // 3. Print the output in the desired format.
    // We use string interpolation to embed the variables directly into the string.
    // The "\n" at the end adds a new line for better readability in the console.
    echo "The capital of $country is $capital <br>";
}
echo "</ul>";

?>