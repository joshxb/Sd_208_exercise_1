<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo1</title>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <style>
        body {
            background: rgba(0, 0, 0, 0.3);
        }

        h2,
        h3,
        p {
            text-align: center;
        }

        div {
            display: grid;
            justify-content: center;
            padding: 0 80px 0 80px;
            grid-template-columns: repeat(1, 0.2fr);
        }

        input {
            text-align: center;
        }
    </style>
</head>

<body>
    <h2>Descending Order Arrays</h2>
    <div>
        <label for="name_input" class="name">Name:</label>
        <input type="text" id="name_input" name="name_input" required><br>
        <input type="submit" name="btn" value="Add" id="add_btn">
        <input type="submit" name="btn" id="submit">
    </div>
    <?php echo "<p id='text_demo'>All names: </p>" ?>

    <?php

    

    echo "
            <script>
                let arrays = ['hello'];
                const name_input = document.getElementById('name_input');
                const add_btn = document.getElementById('add_btn');
                const submit = document.getElementById('submit');
                const text_demo = document.getElementById('text_demo');
                
                text_demo.innerHTML = arrays[0];
            </script>
        ";

    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     if (isset($_POST["btn"])){
    //         $name = $_POST["name"];
    //         $second_num = $_POST["2nd_num"];
    //         $third_num = $_POST["3rd_num"];
    //         echo "<h3>All numbers: </h3>" ."<p>[$first_num, $second_num, $third_num]</p>";
    //         echo "<h3>Largest number:</h3>";
    //         echo "<p>" .maxNum($first_num , $second_num, $third_num) ."</p>";
    //     }
    // }
    //     function ArrayList(){
    //         $array = Array();
    //         array_push($array, $_POST["name"]);
    //     }   

    //     function descend_Array($array){
    //         $string = "";
    //         rsort($array);
    //         for($i = 0; $i < count($array); $i++){
    //             $string .= $array[$i];
    //             if ($i < (count($array) - 1)){
    //                 $string .= ", ";

    //             }else {
    //                 $string .= "<br>";
    //             }
    //         }

    //         return $string;

    //     }
    //     $names = Array("Joshua", "Janrae", "Jomel", "Myla");

    //     echo "<p>" .descend_Array($names)."</p>";
    //     echo "<p>" .descend_Array(["Joseph", "Nino", "Edward", "Felip"]) ."</p>";
    //     echo "<p>" .descend_Array(Array("April", "Jordan", "Sta. Ana", "Rose")) ."<p>";

    ?>

</body>

</html>