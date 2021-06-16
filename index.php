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
    $BMI = 0;
    if (isset($_POST['height']) and $_POST['height'] != "" && ($_POST['weight']) and $_POST['weight'] != "" ) {
        $BMI = $_POST['weight'] / ($_POST['height'] * $_POST['height']);
        if($BMI < 18.5) {
            print("<pre>Your BMI: " . $BMI . ". You need to gain weight." ."</pre>");
        } elseif ($BMI > 18.5 && $BMI < 25) {
            print("<pre>Your BMI is perfect: " . $BMI . "!</pre>");
        } elseif ($BMI >= 25 && $BMI < 30) {
            print("<pre>Your BMI: " . $BMI . ". You need to eat less 🍕!" . "</pre>");
        } elseif ($BMI >= 30) {
            print("<pre>Your BMI: " . $BMI . ". Start 🏃‍♂️!" . "</pre>");
        }

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