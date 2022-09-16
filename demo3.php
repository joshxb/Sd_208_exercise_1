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
    <script src="./resources/js/progress.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="./resources/img/web_dev_logo.png" class="logo" alt="logo">
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item d-flex">
                        <a class="nav-link bg-gradient" href="./demo1.php">Demo1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link bg-gradient" href="./demo2.php">Demo2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link bg-black" href="./demo3.php">Demo3</a>
                    </li>
                    <li class="nav-item bg-gradient">
                        <a class="nav-link" href="./demo4.php">Demo4</a>
                    </li>
                    <li class="nav-item bg-gradient">
                        <a class="nav-link" href="./demo5.php">Demo5</a>
                    </li>
                </ul>
                <button class="navbar_button" type="button" data-bs-toggle="offcanvas" data-bs-target="#menus">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </nav>
    <div class="offcanvas offcanvas-end canvas" id="menus">
        <div class="offcanvas-header">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <h1 class="offcanvas-title">List of Demos</h1>
            <ul>
                <a onclick="progress_next(5)">
                    <li>Descending Order Arrays</li>
                </a>
                <a onclick="progress_next(1)">
                    <li>Multiplication Table</li>
                </a>
                <a href="./demo3.php">
                    <li>Sort of Arrays</li>
                </a>
                <a onclick="progress_next(3)">
                    <li>Numbers from 1 to 50</li>
                </a>
                <a onclick="progress_prev(1)">
                    <li>The Largest Number</li>
                </a>
            </ul>
            <img src="./resources/img/web_dev_logo.png" alt="">
        </div>
    </div>
    <div class="mask bg-black w-100 h-100"></div>
    <main class="main">
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
    </main>
    <div class="d-flex mt-2 justify-content-between px-5">
        <button type="button" class="btn btn-outline-info" onclick="progress_prev(3)">Prev</button>
        <div class="container progress-container w-50" style="position:relative;">
            <div class="progress">
                <div class="progress-bar" style="width:0%">0%</div>
            </div>
        </div>
        <button type="button" class="btn btn-outline-info" onclick="progress_next(3)">Next</button>
    </div>

</body>

</html>