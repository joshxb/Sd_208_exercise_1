<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>demo5</title>
    <style>
        h2, p {
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Largest Number</h2>
</body>
</html>
<?php 
    function maxNum($num1, $num2, $num3){
        $num_arrays = Array();
        $count = 1;
        array_push($num_arrays, $num1);
        array_push($num_arrays, $num2);
        array_push($num_arrays, $num3);

        return max($num_arrays);
        
    }

    echo "<p>" .maxNum(20, 40, 45) ."</p>";
    echo "<p>" .maxNum(11, 20, 12) ."</p>";
?>