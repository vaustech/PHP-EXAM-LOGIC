<?php

$outputMessage = '';
$inputValue = '';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $numberInput = $_POST['numbers'];
    $inputValue = htmlspecialchars($numberInput); 

    
    if (empty($numberInput)) {
        $outputMessage = "Please enter some numbers.    ";
    } else {
        
        $numbersArray = explode(',', $numberInput);

        
        $maxNumber = "";
        $foundValidNumber = false; 
        
        foreach ($numbersArray as $numStr) {
            
            $trimmedNumStr = trim($numStr);

           
            if (is_numeric($trimmedNumStr)) {
                $foundValidNumber = true;
               
                $currentNum = (float)$trimmedNumStr;

                
                if ($currentNum > $maxNumber) {
                    $maxNumber = $currentNum;
                }
            }
        }

        
        if ($foundValidNumber) {
            $outputMessage = "The large number is " . $maxNumber;
        } else {
            $outputMessage = "Please Enter The Valid Number (eg: 10, 5, 23, 8)  ";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Large </title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            margin: 50px;
        }
        input, button {
            padding: 10px;
            margin: 10px;
            font-size: 16px;
        }
        #output {
            font-size: 20px;
            font-weight: bold;
            margin-top: 20px;
            color: darkblue;
        }
    </style>
</head>
<body>

    <h2>Find the Largest Number</h2>
    <p>Enter numbers separated by commas:</p>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input type="text" id="numberInput" name="numbers" placeholder="e.g., 10, 5, 23, 8" value="<?php echo $inputValue; ?>">
        <button type="submit">Find Max</button>
    </form>

    <div id="output">
        <?php echo $outputMessage; ?>
    </div>

</body>
</html>