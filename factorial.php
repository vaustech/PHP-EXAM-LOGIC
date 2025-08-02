<?php

function factorial($number) {
   
    $number = $number;

    
    if ($number < 0) {
        return " Under Number of 0 / negative is not valid ";
    }

    
    if ($number == 0) {
        return 1;
    }

    
    $result = 1;
    for ($i = 1; $i <= $number; $i++) {
        $result *= $i;
    }

    
    return $result;
}


$resultMessage = '';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $inputNumber = $_POST['number'];

    
    if (!is_numeric($inputNumber)) {
        $resultMessage = "Please enter a valid number.";
    } elseif ($inputNumber < 0 || $inputNumber != round($inputNumber)) {
        $resultMessage = "Pleas4e enter a valid positive integer.";
    } else {
        
        $calculatedFactorial = factorial($inputNumber);
        $resultMessage = htmlspecialchars($inputNumber) . ' Factorial is : ' . $calculatedFactorial;
    }
}
?>

<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial </title>
</head>
<body>

    <div class="container">
        <h2>Factorial </h2>
        <form method="post" action="">
            <input type="number" name="number" placeholder="Enter number " required min="0">
            <button type="submit"> Cheak</button>
        </form>

        <div id="result">
            <p><?php echo $resultMessage; ?></p>
        </div>
    </div>

</body>
</html>