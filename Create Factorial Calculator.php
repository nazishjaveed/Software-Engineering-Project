<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Calculator</title>
</head>
<body>
    <h2>Factorial Calculator</h2>

    <?php
    // Function to calculate factorial
    function calculateFactorial($number) {
        $factorial = 1;
        for ($i = 1; $i <= $number; $i++) {
            $factorial *= $i;
        }
        return $factorial;
    }

    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputNumber = $_POST["number"];

        if (is_numeric($inputNumber) && $inputNumber >= 0) {
            $result = calculateFactorial($inputNumber);
            echo "<p>The factorial of $inputNumber is: $result</p>";
        } else {
            echo "<p>Please enter a non-negative numeric value.</p>";
        }
    }
    ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="number">Enter a non-negative number:</label>
        <input type="number" name="number" required>
        <button type="submit">Calculate Factorial</button>
    </form>
</body>
</html>



