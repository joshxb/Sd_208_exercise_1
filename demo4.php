<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo_4</title>
    <style>
        li{font-size:18px;}
    </style>
</head>
<body>
    <h3>Numbers from 1 to 50</h3>
<?php
    $start = 1;
    echo "<ul>";
    for(;$start <= 50;){
        if ($start % 3 == 0 && $start % 5 == 0){
            echo "<li>FizzBuzz</li>";
        }   
        else if ($start % 3 == 0){
            echo "<li>Fizz</li>";
        }
        else if ($start % 5 == 0){
            echo "<li>Buzz</li>";
        }
        else {
            echo "<li>$start</li>";
        }
        $start++;
    }

    echo "</ul>";

?>
    
</body>
</html>
