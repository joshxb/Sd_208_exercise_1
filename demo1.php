<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo1</title>
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
<h2>Descending Order Arrays</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <label for="name_input" class="name">Name:</label>
        <input type="text" class="" name="name_input" required><br>
        <input type="submit" name="btn" value="Add">
        <input type="submit" name="btn">
    </form>
    <?php echo "All names: "?>

    <?php
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["btn"])){
        $name = $_POST["name"];
        $second_num = $_POST["2nd_num"];
        $third_num = $_POST["3rd_num"];
        echo "<h3>All numbers: </h3>" ."<p>[$first_num, $second_num, $third_num]</p>";
        echo "<h3>Largest number:</h3>";
        echo "<p>" .maxNum($first_num , $second_num, $third_num) ."</p>";
    }
}
    function ArrayList(){
        $array = Array();
        array_push($array, $_POST["name"]);
    }   

    function descend_Array($array){
        $string = "";
        rsort($array);
        for($i = 0; $i < count($array); $i++){
            $string .= $array[$i];
            if ($i < (count($array) - 1)){
                $string .= ", ";
               
            }else {
                $string .= "<br>";
            }
        }

        return $string;
        
    }
    $names = Array("Joshua", "Janrae", "Jomel", "Myla");

    echo "<p>" .descend_Array($names)."</p>";
    echo "<p>" .descend_Array(["Joseph", "Nino", "Edward", "Felip"]) ."</p>";
    echo "<p>" .descend_Array(Array("April", "Jordan", "Sta. Ana", "Rose")) ."<p>";

    ?>
    
</body>
</html>

