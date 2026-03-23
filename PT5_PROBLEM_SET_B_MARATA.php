<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BMI Calculator</title>
    <style>
        body { font-family: sans-serif; padding: 20px; line-height: 1.6; }
        .result-box { 
            margin-top: 20px; 
            padding: 15px; 
            background-color: #e2f3e5; 
            border: 1px solid #c3e6cb; 
            display: inline-block;
        }
        .highlight { background-color: #ffff00; font-weight: bold; }
    </style>
</head>
<body>

    <h1>BMI Calculator</h1>

    <form action="" method="POST">
        Weight (kg): <input type="number" step="0.1" name="weight" placeholder="Enter weight" required><br><br>
        Height (m): <input type="number" step="0.01" name="height" placeholder="Enter height" required><br><br>
        
        <input type="submit" name="calculate_bmi" value="Calculate BMI">
    </form>

    <?php
        if (isset($_POST['calculate_bmi'])) {
            
            $weight = $_POST['weight'];
            $height = $_POST['height'];

            if ($height > 0) {
                $bmi = $weight / ($height * $height);

                if ($bmi < 18.5) {
                    $class = "Underweight";
                    $risk = "Low (risk of other clinical problems increased)";
                } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
                    $class = "Normal range";
                    $risk = "Average";
                } elseif ($bmi >= 25.0 && $bmi <= 29.9) {
                    $class = "Overweight (preobese)";
                    $risk = "Mildly increased";
                } elseif ($bmi >= 30.0 && $bmi <= 34.9) {
                    $class = "Obese Class I";
                    $risk = "Moderate";
                } elseif ($bmi >= 35.0 && $bmi <= 39.9) {
                    $class = "Obese Class II";
                    $risk = "Severe";
                } else {
                    $class = "Obese Class III";
                    $risk = "Very severe";
                }

                echo "<div class='result-box'>";
                echo "<h3>BMI Result</h3>";
                echo "Your BMI value is: <span class='highlight'>" . $bmi . "</span><br>";
                echo "<strong>Classification:</strong> " . $class . "<br>";
                echo "<strong>Risk:</strong> " . $risk;
                echo "</div>";
                
            } else {
                echo "<br><b style='color:red;'>Error: Height must be greater than zero.</b>";
            }
        }
    ?>

</body>
</html>