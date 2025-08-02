<?php

function isPrime($number) {
    
    $number = (int)$number;

    
    if ($number <= 1) {
        return false;
    }

    
    if ($number == 2) {
        return true;
    }

    
    if ($number % 2 == 0) {
        return false;
    }

    
    for ($i = 3; $i <= sqrt($number); $i = $i + 2) {
        if ($number % $i == 0) {
            return false;
        }
    }

    
    return true;
}


$resultMessage = '';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $inputNumber = $_POST['number'];

    
    if (!is_numeric($inputNumber)) {
        $resultMessage = 'Please enter a valid number.';
    } elseif ($inputNumber != round($inputNumber) || $inputNumber < 0) {
        $resultMessage = 'Please enter a valid positive integer.';
    } else {
        
        if (isPrime($inputNumber)) {
            $resultMessage =   htmlspecialchars($inputNumber) . 'IS a prime number.';
        } else {
            $resultMessage =   htmlspecialchars($inputNumber) . ' IS a NOT a prime number.';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number </title>
    
</head>
<body>

    <div class="container">
        <h2>Prime Number a</h2>
        <form method="post" action="">
            <input type="number" name="number" placeholder="Enter The Prime Number " required>
            <button type="submit">Cheak</button>
        </form>

        <div id="result">
            <?php echo $resultMessage; ?>
        </div>
    </div>

</body>
</html>