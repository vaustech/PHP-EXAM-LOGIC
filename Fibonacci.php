<?php
// Fibonacci Series: 0, 1, 1, 2, 3, 5, 8...
$n = 10; // কতটি সংখ্যা দেখাবে
$f1 = 0;
$f2 = 1;

echo "Fibonacci Series: ";
echo "$f1 $f2 ";

for($i = 2; $i < $n; $i++){
    $next = $f1 + $f2;
    echo "$next ";
    $f1 = $f2;
    $f2 = $next;
}
?>
