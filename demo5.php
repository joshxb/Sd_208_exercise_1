<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>demo5</title>
    <style>
        body{background: rgba(71, 166, 209, 0.89);padding-top: 2rem;}
        h2,h3, p, h5 {text-align: center;}
        form {
display: grid;
            justify-content: center;
            padding: 0 80px 0 80px;
            grid-template-columns:repeat(1,0.2fr);
        }
        input{text-align: center;}
    </style>
</head>
<body>
    <h2>Largest Number</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <label for="1st_num" class="firstnum">First no:</label>
        <input type="text" class="" name="1st_num" required><br>
        <label for="2nd_num" class="firstnum">Second no:</label>
        <input type="text" class="" name="2nd_num" required><br>
        <label for="3rd_num" class="firstnum">Third no:</label>
        <input type="text" class="" name="3rd_num" required><br>
        <input type="submit" name="btn">
    </form>

    <?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["btn"])){
        $first_num = $_POST["1st_num"];
        $second_num = $_POST["2nd_num"];
        $third_num = $_POST["3rd_num"];
        echo "<h3>All numbers: </h3>" ."<h5>[$first_num, $second_num, $third_num]</h5>";
        echo "<h3>Largest number:</h3>";
        echo "<h5>" .maxNum($first_num , $second_num, $third_num) ."</h5>";
    }
}
function maxNum($num1, $num2, $num3){
    $num_arrays = Array();
    $count = 1;
    array_push($num_arrays, $num1);
    array_push($num_arrays, $num2);
    array_push($num_arrays, $num3);
    return max($num_arrays);
    
}
    
?>
</body>
</html>
