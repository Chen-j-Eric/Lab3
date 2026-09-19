<head>
  <!-- Time -->
  <meta charset="UTF-8"> 
  <!--Title -->
  <title>EECS 348 Lab Six</title> 
  <!-- calls css -->
  <link rel="stylesheet" href="index.css"> 
</head>
<body>
  <!-- title -->
  <h1>EECS 348 Lab Six</h1>
  <!-- title for lab -->
  Eric Chen EECS 348 Lab 2<br> 
  <!-- image of me  -->
  <img src="e_c.jpeg" alt="ME!!!"><br> 
  <a href="https://github.com/Chen-j-Eric">my github</a><br>
  <!-- embeded youtube video -->
<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/-Gnrp_caPvo?si=ZsNIAEg3nCiM_Ev4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

  <h1 id="text">This text will change!</h1>
<!-- text color change  -->
  <label for="color">Text Color:</label>
  <!-- color options -->
  <select id="color">
    <option value="black">Black</option> <!-- black -->
    <option value="red">Red</option> <!-- red -->
    <option value="blue">Blue</option> <!-- blue  -->
    <option value="green">Green</option> <!-- green -->
  </select>
<!-- width size change -->
  <label for="width">Width:</label>
  <select id="width">
    <option value="200px">200px</option> <!--200px  -->
    <option value="400px">400px</option> <!--400px  -->
    <option value="600px">600px</option> <!--600px  -->
  </select>

  <p id="myText"> <!-- width change -->
    This is some text that the user can change the width of.
  </p>

  <script src="index.js"></script> <!-- The javascript that allows change  -->
</body>

<body>

    <!-- SECTION 1: Password Verification -->
    <div class="section">
        <h2>Password Verification</h2> <!-- password header -->
        <form method="POST" action=""> 
            <label for="pass1">Password:</label><br> <!-- password text  -->
            <input type="password" id="pass1" name="pass1" required><br><br> <!--1st password textbox  -->

            <label for="pass2">Confirm Password:</label><br> <!--confirm password txt  -->
            <input type="password" id="pass2" name="pass2" required><br><br> <!--2nd password textbox  -->

            <input type="submit" name="verify_password" value="Verify"> <!--verify button -->
        </form> <!-- end -->

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["verify_password"])) { # grabs values
    $pass1 = $_POST["pass1"]; #value 1
    $pass2 = $_POST["pass2"]; #value 2

    if ($pass1 !== $pass2) { # if not same
        echo "<p style='color:red;'>Passwords do not match!</p>"; # passwords don't match up 
    } else {
        echo "<p style='color:green;'>Password validated successfully!</p>"; #they are the same
    } 
}
?>
</div>

    <hr>

    <!-- SECTION 2: Multiplication Table -->
    <div class="section">
        <?php
# Use the submitted number, or default to 3 on first load
# Converts inoput to ints
$number = isset($_GET['number']) ? (int) $_GET['number'] : 3;
?>
   <!-- First form: sends the chosen number to this page using GET -->
<form method="get">

    <label for="number">Choose a number:</label> <!-- picks a number -->
    <input type="number" id="number" name="number" value="<?= $number ?>"> <!-- button for form -->
    <button type="submit">Show table</button>
</form>
<head>
    <meta charset="UTF-8">
    <title>Multiplication Table</title> <!-- date -->
</head>

<?php
#Get the input number from the user URL query string, defaulting to 5
$number = isset($_GET['number']) ? (int)$_GET['number'] : 5;

# Ensure valid input (at least 1)
if ($number >= 1) {
    echo "<h3>$number &times; $number Multiplication Table</h3>"; #
    echo "<table border='1' cellpadding='8' cellspacing='0'>";

    # Header Row: Column Indexes
    echo "<tr>";
    echo "<th>&times;</th>";# left conor cell
    for ($col = 1; $col <= $number; $col++) {
        echo "<th>Col $col</th>";  #makes col
    }
    echo "</tr>";

    # Outer loop for Rows
    for ($row = 1; $row <= $number; $row++) {
      #starts new row
        echo "<tr>";
        
        # Row Index Label
        echo "<th>Row $row</th>";
        
        # Inner loop for Columns
        for ($col = 1; $col <= $number; $col++) {
            $result = $row * $col; # result of current row by the current col
            echo "<td>$result</td>"; # print result in a table cell
        }
        
        echo "</tr>"; # end row
    }

    echo "</table>"; # close table
} else { 
    echo "<p>Please enter a positive integer greater than 0.</p>"; # shows num is 0 or neg
}
?>
</body>    <!-- end body -->
</html>   <!-- end program -->
