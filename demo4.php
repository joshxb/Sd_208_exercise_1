<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Demo_4</title>
    <style>
        li {
            font-size: 18px;
        }

        body {
            background: rgba(71, 166, 209, 0.89);
            padding-top: 2rem;
        }

        h2,h3,p,label,li {text-align: center;font-family: Arial, Helvetica, sans-serif;}
        ul {
            list-style-type: none;
        }
    </style>
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