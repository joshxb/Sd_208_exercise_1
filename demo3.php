<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./resources/img/web_dev_logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Sort of Arrays</title>
    <link rel="stylesheet" href="./resources/css/bootstap.min.css">
    <link rel="stylesheet" href="./resources/css/style.css">
    <script src="./resources/js/boostrap_bundle.js"></script>
</head>

<body>

    <?php
    $array = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40");
    function asc_Val($array)
    {
        asort($array);
        echo "<h3>Ascending order sort by value: </h3>";
        echo color_Changer($array);
    }
    function asc_Key($array)
    {
        ksort($array);
        echo "<h3>Ascending order sort by key: </h3>";
        echo color_Changer($array);
    }
    function desc_Val($array)
    {
        arsort($array);
        echo "<h3>Descending order sort by value: </h3>";
        echo color_Changer($array);
    }
    function desc_Key($array)
    {
        krsort($array);
        echo "<h3>Descending order sort by key: </h3>";
        echo color_Changer($array);
    }

    function color_Changer($array)
    {
        $bg_color = "";
        $string = "";
        foreach ($array as $x => $vals) {
            if ($x == "Sophia") {
                $bg_color = "bg-primary";
            } else if ($x == "Jacob") {
                $bg_color = "bg-secondary";
            } else if ($x == "William") {
                $bg_color = "bg-success";
            } else if ($x == "Ramesh") {
                $bg_color = "bg-info";
            }
            $string .= "<p class=$bg_color style='margin:0 30rem 0 30rem'>$x => [$vals]</p><br>";
        }
        return $string;
    }

    function myfunction($v)
    {
        $v = strtolower($v);
        return $v;
    }

    echo "<h3>List of arrays: </h3>";
    foreach ($array as $i => $x) {
        echo "<p>" . "'$i' => $x, " . "</p>";
    }

    echo asc_Val($array) . "<br>";
    echo asc_Key($array) . "<br>";
    echo desc_Val($array) . "<br>";
    echo desc_Key($array) . "<br>";


    ?>
</body>

</html>