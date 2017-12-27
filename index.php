<?php
    $result = array();

    if(isset($_POST['submit'])) {
        require_once 'Number.php';

        $number = new Number();

        $results = $number->getRange($_POST['firstNumber'], $_POST['secondNumber'], $_POST['type']);
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Range</title>
    </head>
    <body>
        <form action="" method="post">
            <label for="firstNumber">First Number:</label><br>
            <input type="number" name="firstNumber" id="firstNumber" value="<?php if(isset($_POST['firstNumber'])) echo $_POST['firstNumber'] ?>" required><br><br>

            <label for="secondNumber">Second Number:</label><br>
            <input type="number" name="secondNumber" id="secondNumber" value="<?php if(isset($_POST['secondNumber'])) echo $_POST['secondNumber'] ?>" required><br><br>

            <label for="type">Type:</label>
            <input type="radio" name="type" value="all"> All
            <input type="radio" name="type" value="even"> Even
            <input type="radio" name="type" value="odd"> Odd<br><br>

            <label for="result">Result:</label><br>
            <textarea name="result" id="result" cols="30" rows="10"><?php foreach($results as $result) {echo $result . ' ';} ?></textarea><br><br>

            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>