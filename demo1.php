<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Descending Order Arrays</title>
    <style>
        body{
            background: rgba(71, 166, 209, 0.89);
            padding-top: 2rem;
        }
        h2,h3, p, label {
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
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
        <label for="name_input" class="name">Names:</label>
        <input type="text" class="" name="name_input" placeholder="ex: Joshua, Michael, Jhon" required><br>
        <input type="submit" name="btn">
    </form>
    <?php echo "<h3>All names: </h3>"?>

    <?php
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["btn"])){
        $name_input = $_POST["name_input"];
        $array = explode(", ", $name_input);
        echo "<p>$name_input</p>";
        echo "<h3>Descending list of names: </h3>";
        
        echo "<p>".descend_Array($array)."</p>";
        
    }
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

    ?>
    
</body>
</html>

