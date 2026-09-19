<head>
  <meta charset="UTF-8">
  <title>EECS 348 Lab Six</title>
  <link rel="stylesheet" href="index.css">
</head>
<body>
  <h1>EECS 348 Lab Six</h1>
  Eric Chen EECS 348 Lab 2<br>
  <img src="e_c.jpeg" alt="ME!!!"><br>
  <a href="https://github.com/Chen-j-Eric">my github</a><br>
<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/-Gnrp_caPvo?si=ZsNIAEg3nCiM_Ev4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
  <h1 id="text">This text will change!</h1>

  <label for="color">Text Color:</label>
  <select id="color">
    <option value="black">Black</option>
    <option value="red">Red</option>
    <option value="blue">Blue</option>
    <option value="green">Green</option>
  </select>

  <label for="width">Width:</label>
  <select id="width">
    <option value="200px">200px</option>
    <option value="400px">400px</option>
    <option value="600px">600px</option>
  </select>

  <p id="myText">
    This is some text that the user can change the width of.
  </p>

  <script src="index.js"></script>
</body>
</html>

<head>
    <meta charset="UTF-8">
    <title>EECS 348 Lab Assignment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .section {
            margin-bottom: 40px;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <!-- SECTION 1: Password Verification -->
    <div class="section">
        <h2>Password Verification</h2>
        <form method="POST" action="">
            <label for="pass1">Password:</label><br>
            <input type="password" id="pass1" name="pass1" required><br><br>

            <label for="pass2">Confirm Password:</label><br>
            <input type="password" id="pass2" name="pass2" required><br><br>

            <input type="submit" name="verify_password" value="Verify">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["verify_password"])) {
            $pass1 = $_POST["pass1"];
            $pass2 = $_POST["pass2"];

            if (strlen($pass1) < 8) {
                echo "<p style='color:red;'>Password must be at least 8 characters long.</p>";
            } elseif ($pass1 !== $pass2) {
                echo "<p style='color:red;'>Passwords do not match!</p>";
            } else {
                echo "<p style='color:green;'>Password validated successfully!</p>";
            }
        }
        ?>
    </div>

    <hr>

    <!-- SECTION 2: Multiplication Table -->
    <div class="section">
        <?php
// Use the submitted number, or default to 3 on first load
$number = isset($_GET['number']) ? (int) $_GET['number'] : 3;
?>
<form method="get">
    <label for="number">Choose a number:</label>
    <input type="number" id="number" name="number" value="<?= $number ?>">
    <button type="submit">Show table</button>
</form>
<head>
    <meta charset="UTF-8">
    <title>Multiplication Table</title>
</head>
<body>

<!-- Input Form -->
<form method="GET" action="">
    <label for="number">Enter Table Size:</label>
    <input type="number" id="number" name="number" min="1" value="<?php echo isset($_GET['number']) ? (int)$_GET['number'] : 5; ?>">
    <button type="submit">Generate Table</button>
</form>

<hr>

<?php
// Get the input number from the user URL query string, defaulting to 5
$number = isset($_GET['number']) ? (int)$_GET['number'] : 5;

// Ensure valid input (at least 1)
if ($number >= 1) {
    echo "<h3>$number &times; $number Multiplication Table</h3>";
    echo "<table border='1' cellpadding='8' cellspacing='0'>";

    // Header Row: Column Indexes
    echo "<tr>";
    echo "<th>&times;</th>";
    for ($col = 1; $col <= $number; $col++) {
        echo "<th>Col $col</th>";
    }
    echo "</tr>";

    // Outer loop for Rows
    for ($row = 1; $row <= $number; $row++) {
        echo "<tr>";
        
        // Row Index Label
        echo "<th>Row $row</th>";
        
        // Inner loop for Columns
        for ($col = 1; $col <= $number; $col++) {
            $result = $row * $col;
            echo "<td>$result</td>";
        }
        
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "<p>Please enter a positive integer greater than 0.</p>";
}
?>
</body>
</html>
