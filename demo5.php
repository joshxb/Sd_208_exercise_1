<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>demo5</title>
    <style>
        body{
            background: rgba(0,0,0,0.3);
        }
        h2,h3, p {
            text-align: center;
        }
        form {
            display: grid;
            justify-content: center;
            padding: 0 80px 0 80px;
            grid-template-columns:repeat(1,0.2fr);
        }
        input{
            text-align: center;
        }
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
        echo "<h3>All numbers: </h3>" ."<p>[$first_num, $second_num, $third_num]</p>";
        echo "<h3>Largest number:</h3>";
        echo "<p>" .maxNum($first_num , $second_num, $third_num) ."</p>";
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
