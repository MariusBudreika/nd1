<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI</title>
</head>
<body>
    <h1>BMI</h1>
    <?php
    if (isset($_POST['height']) and $_POST['height'] != "" && ($_POST['weight']) and $_POST['weight'] != "" ) {
        print("<pre>Your BMI: " . $_POST['weight'] / ($_POST['height'] * $_POST['height']) . "!</pre>");
    }
    ?>
    <form action="" method="POST">
        <label for="height"> Your height in m (e.g.: 1.66)</label><br>
        <input type="text" id="height" name="height" value=""><br>

        <label for="weight"> Your weight in kg (e.g.: 65)</label><br>
        <input type="text" id="weight" name="weight" value=""><br>

        <input type="submit" value="Count">
    </form>

</body>
</html>