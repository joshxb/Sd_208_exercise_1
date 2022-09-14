<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Sort of Arrays</title>
    <style>
        body {
            background: rgba(0, 0, 0, 0.3);
            padding-top: 2rem;
        }

        h2,
        h3,
        p,
        label {
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
        }

        input {
            text-align: center;
        }
    </style>
</head>

<body>

    <?php
    $array = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40");
    function asc_Val($array)
    {
        asort($array);
        echo "<h3>Ascending order sort by value: </h3>";
        foreach ($array as $x => $vals) {
            echo "<p>$x => [$vals]</p><br>";
        }
    }
    function asc_Key($array)
    {
        ksort($array);
        echo "<h3>Ascending order sort by key: </h3>";
        foreach ($array as $x => $vals) {
            echo "<p>$x => [$vals]</p><br>";
        }
    }
    function desc_Val($array)
    {
        arsort($array);
        echo "<h3>Descending order sort by value: </h3>";
        foreach ($array as $x => $vals) {
            echo "<p>$x => [$vals]</p><br>";
        }
    }
    function desc_Key($array)
    {
        krsort($array);
        echo "<h3>Descending order sort by key: </h3>";
        foreach ($array as $x => $vals) {
            echo "<p>$x => [$vals]</p><br>";
        }
    }

    function myfunction($v)
    {
        $v = strtolower($v);
        return $v;
    }

    echo "<h3>List of arrays: </h3>";
    foreach($array as $i => $x){
        echo "<p>"."'$i' => $x, "."</p>";
    }

    echo asc_Val($array) . "<br>";
    echo asc_Key($array) . "<br>";
    echo desc_Val($array) . "<br>";
    echo desc_Key($array) . "<br>";


    ?>
</body>

</html>