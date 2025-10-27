<!DOCTYPE html>
<html lang="bn">
<head>
<meta charset="UTF-8">
<title>Top 10 PHP Logic Practice</title>
<style>
    body {font-family: Arial; background:#f4f6f9; padding:25px;}
    .box {background:#fff; padding:20px; margin-bottom:18px; border-radius:10px; box-shadow:0 0 5px rgba(0,0,0,0.15);}
    input[type="number"],input[type="text"] {padding:6px; width:120px;}
    button {padding:6px 10px;}
    h2 {color:#222;}
</style>
</head>
<body>
<h1>🔥 PHP Top 10 Logic Practice</h1>

<!-- 1️⃣ Factorial -->
<div class="box">
<h2>1️⃣ Factorial</h2>
<form method="POST">
<input type="number" name="fact" placeholder="Enter Number" required>
<button name="fact_btn">Check</button>
</form>
<?php
if(isset($_POST['fact_btn'])){
  $n=$_POST['fact']; $f=1;
  for($i=1;$i<=$n;$i++){$f*=$i;}
  echo "<p>👉 $n এর Factorial = <b>$f</b></p>";
}
?>
</div>

<!-- 2️⃣ Reverse Number -->
<div class="box">
<h2>2️⃣ Reverse Number</h2>
<form method="POST">
<input type="number" name="rev" placeholder="Enter Number" required>
<button name="rev_btn">Reverse</button>
</form>
<?php
if(isset($_POST['rev_btn'])){
  $num=$_POST['rev'];
  echo "<p>👉 Reverse of $num = <b>".strrev($num)."</b></p>";
}
?>
</div>

<!-- 3️⃣ Palindrome -->
<div class="box">
<h2>3️⃣ Palindrome Number</h2>
<form method="POST">
<input type="number" name="pal" placeholder="Enter Number" required>
<button name="pal_btn">Check</button>
</form>
<?php
if(isset($_POST['pal_btn'])){
  $n=$_POST['pal']; $r=strrev($n);
  echo ($n==$r) ? "<p>✅ $n হলো Palindrome</p>" : "<p>❌ $n Palindrome নয়</p>";
}
?>
</div>

<!-- 4️⃣ Prime Check -->
<div class="box">
<h2>4️⃣ Prime Number</h2>
<form method="POST">
<input type="number" name="prime" placeholder="Enter Number" required>
<button name="prime_btn">Check</button>
</form>
<?php
if(isset($_POST['prime_btn'])){
  $n=$_POST['prime']; $flag=true;
  if($n<2) $flag=false;
  else {
    for($i=2;$i<=sqrt($n);$i++){
      if($n%$i==0){$flag=false;break;}
    }
  }
  echo $flag ? "<p>✅ $n হলো Prime Number</p>" : "<p>❌ $n Prime নয়</p>";
}
?>
</div>

<!-- 5️⃣ Even / Odd -->
<div class="box">
<h2>5️⃣ Even / Odd</h2>
<form method="POST">
<input type="number" name="even" placeholder="Enter Number" required>
<button name="even_btn">Check</button>
</form>
<?php
if(isset($_POST['even_btn'])){
  $n=$_POST['even'];
  echo ($n%2==0)?"<p>✅ $n হলো জোড় সংখ্যা</p>":"<p>❌ $n হলো বিজোড় সংখ্যা</p>";
}
?>
</div>

<!-- 6️⃣ Armstrong -->
<div class="box">
<h2>6️⃣ Armstrong Number</h2>
<form method="POST">
<input type="number" name="arm" placeholder="Enter Number" required>
<button name="arm_btn">Check</button>
</form>
<?php
if(isset($_POST['arm_btn'])){
  $n=$_POST['arm']; $sum=0; $temp=$n;
  while($temp!=0){ $d=$temp%10; $sum+=$d*$d*$d; $temp=floor($temp/10);}
  echo ($n==$sum)?"<p>✅ $n হলো Armstrong Number</p>":"<p>❌ $n Armstrong নয়</p>";
}
?>
</div>

<!-- 7️⃣ Perfect Number -->
<div class="box">
<h2>7️⃣ Perfect Number</h2>
<form method="POST">
<input type="number" name="perfect" placeholder="Enter Number" required>
<button name="perfect_btn">Check</button>
</form>
<?php
if(isset($_POST['perfect_btn'])){
  $n=$_POST['perfect']; $sum=0;
  for($i=1;$i<$n;$i++){ if($n%$i==0){$sum+=$i;}}
  echo ($n==$sum)?"<p>✅ $n হলো Perfect Number</p>":"<p>❌ $n Perfect নয়</p>";
}
?>
</div>

<!-- 8️⃣ Sum of Digits -->
<div class="box">
<h2>8️⃣ Sum of Digits</h2>
<form method="POST">
<input type="number" name="sumdigit" placeholder="Enter Number" required>
<button name="sumdigit_btn">Find</button>
</form>
<?php
if(isset($_POST['sumdigit_btn'])){
  $n=$_POST['sumdigit']; $sum=0; $temp=$n;
  while($temp>0){ $sum += $temp%10; $temp=floor($temp/10); }
  echo "<p>👉 $n এর অঙ্কগুলোর যোগফল = <b>$sum</b></p>";
}
?>
</div>

<!-- 9️⃣ Fibonacci -->
<div class="box">
<h2>9️⃣ Fibonacci Series</h2>
<form method="POST">
<input type="number" name="fib" placeholder="Enter Limit" required>
<button name="fib_btn">Generate</button>
</form>
<?php
if(isset($_POST['fib_btn'])){
  $n=$_POST['fib']; $a=0;$b=1;
  echo "<p>👉 Fibonacci ($n terms): <b>$a, $b";
  for($i=2;$i<$n;$i++){ $next=$a+$b; echo ", $next"; $a=$b; $b=$next; }
  echo "</b></p>";
}
?>
</div>

<!-- 🔟 Largest of 3 Numbers -->
<div class="box">
<h2>🔟 Largest Among 3 Numbers</h2>
<form method="POST">
<input type="number" name="a" placeholder="A" required>
<input type="number" name="b" placeholder="B" required>
<input type="number" name="c" placeholder="C" required>
<button name="max_btn">Find Largest</button>
</form>
<?php
if(isset($_POST['max_btn'])){
  $a=$_POST['a']; $b=$_POST['b']; $c=$_POST['c'];
  $max=$a;
  if($b>$max)$max=$b;
  if($c>$max)$max=$c;
  echo "<p>👉 সবচেয়ে বড় সংখ্যা হলো: <b>$max</b></p>";
}
?>
</div>

</body>
</html>
