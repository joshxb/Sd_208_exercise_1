<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./resources/img/web_dev_logo.png">
    <link rel="stylesheet" href="./resources/css/bootstap.min.css">
    <link rel="stylesheet" href="./resources/css/style.css">
    <script src="./resources/js/boostrap_bundle.js"></script>
    <title>Demo_4</title>
</head>

<body>
    <h3>Numbers from 1 to 50</h3>
    <?php
    $start = 1;
    $color1 = 'style="color:red"';
    $color2 = 'style="color:blue"';
    $color3 = 'style="color:green"';

    echo "<ul>";
    for (; $start <= 50;) {
        if ($start % 3 == 0 && $start % 5 == 0) {
            echo "<li $color3>FizzBuzz</li>";
        } else if ($start % 3 == 0) {
            echo "<li $color1>Fizz</li>";
        } else if ($start % 5 == 0) {
            echo "<li $color2>Buzz</li>";
        } else {
            echo "<li>$start</li>";
        }
        $start++;
    }

    echo "</ul>";

    ?>

</body>

</html>