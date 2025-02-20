<!-- LAB 5A AFIQAH AZHAR QUESTION 3 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <h2>Calculate Rectangle Area</h2>
    
    <form method="post">
        <label for="length">Enter Length:</label>
        <input type="number" name="length" required>
        
        <label for="width">Enter Width:</label>
        <input type="number" name="width" required>
        
        <button type="submit">Calculate</button>
    </form>

    <?php  
        // Function to calculate area of a rectangle
        function calculateArea($length, $width) {
            return $length * $width;
        }

        // Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $length = $_POST["length"];
            $width = $_POST["width"];

            // Validate inputs
            if (is_numeric($length) && is_numeric($width) && $length > 0 && $width > 0) {
                $area = calculateArea($length, $width);
                echo "<p>The area of a rectangle with length <strong>$length</strong> and width <strong>$width</strong> is: <strong>$area</strong></p>";
            } else {
                echo "<p>Please enter valid positive numbers for length and width.</p>";
            }
        }
    ?> 
</body>
</html>