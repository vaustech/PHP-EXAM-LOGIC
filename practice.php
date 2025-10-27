<!DOCTYPE html>
<html lang="bn">
<head>
<meta charset="UTF-8">
<title>PHP Logic Practice</title>
<style>
    body {font-family: Arial; background:#f4f6f9; padding:30px;}
    .box {background:#fff; padding:20px; margin-bottom:20px; border-radius:10px; box-shadow:0 0 5px rgba(0,0,0,0.1);}
    input[type="number"] {padding:6px; width:100px;}
    button {padding:6px 12px; margin-left:10px;}
    h2 {color:#333;}
</style>
</head>
<body>

<h1>🧠 PHP Logic Practice Panel</h1>

<!-- ✅ 1. Factorial -->
<div class="box">
<h2>1️⃣ Factorial Calculator</h2>
<form method="POST">
    <input type="number" name="fact_number" placeholder="Enter Number" required>
    <button type="submit" name="fact_btn">Check Factorial</button>
</form>

<?php
if(isset($_POST['fact_btn'])){
    $n = $_POST['fact_number'];
    $fact = 1;
    for($i = 1; $i <= $n; $i++){
        $fact *= $i;
    }
    echo "<p>👉 $n এর Factorial = <b>$fact</b></p>";
}
?>
</div>

<!-- ✅ 2. Reverse Number -->
<div class="box">
<h2>2️⃣ Reverse Number</h2>
<form method="POST">
    <input type="number" name="rev_number" placeholder="Enter Number" required>
    <button type="submit" name="rev_btn">Reverse</button>
</form>

<?php
if(isset($_POST['rev_btn'])){
    $num = $_POST['rev_number'];
    $rev = strrev($num);
    echo "<p>👉 Reverse of $num is <b>$rev</b></p>";
}
?>
</div>

<!-- ✅ 3. Palindrome Check -->
<div class="box">
<h2>3️⃣ Palindrome Check</h2>
<form method="POST">
    <input type="number" name="pal_number" placeholder="Enter Number" required>
    <button type="submit" name="pal_btn">Check</button>
</form>

<?php
if(isset($_POST['pal_btn'])){
    $num = $_POST['pal_number'];
    $rev = strrev($num);
    if($num == $rev){
        echo "<p>✅ $num হলো Palindrome Number (উল্টো করলেও একই থাকে)</p>";
    } else {
        echo "<p>❌ $num Palindrome নয়</p>";
    }
}
?>
</div>

<!-- ✅ 4. Even / Odd Check -->
<div class="box">
<h2>4️⃣ Even / Odd Check</h2>
<form method="POST">
    <input type="number" name="even_number" placeholder="Enter Number" required>
    <button type="submit" name="even_btn">Check</button>
</form>

<?php
if(isset($_POST['even_btn'])){
    $num = $_POST['even_number'];
    if($num % 2 == 0){
        echo "<p>✅ $num হলো জোড় সংখ্যা</p>";
    } else {
        echo "<p>❌ $num হলো বিজোড় সংখ্যা</p>";
    }
}
?>
</div>

<!-- ✅ 5. Fibonacci Series -->
<div class="box">
<h2>5️⃣ Fibonacci Series</h2>
<form method="POST">
    <input type="number" name="fib_number" placeholder="Enter Limit" required>
    <button type="submit" name="fib_btn">Generate</button>
</form>

<?php
if(isset($_POST['fib_btn'])){
    $n = $_POST['fib_number'];
    $f1 = 0; $f2 = 1;
    echo "<p>👉 Fibonacci Series ($n terms): <b>$f1, $f2";
    for($i = 2; $i < $n; $i++){
        $next = $f1 + $f2;
        echo ", $next";
        $f1 = $f2;
        $f2 = $next;
    }
    echo "</b></p>";
}
?>
</div>

</body>
</html>
