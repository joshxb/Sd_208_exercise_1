<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./resources/img/web_dev_logo.png">
    <link rel="stylesheet" href="./resources/css/bootstap.min.css">
    <title>The Largest Number</title>
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
                        <a class="nav-link bg-gradient" href="./demo3.php">Demo3</a>
                    </li>
                    <li class="nav-item bg-gradient">
                        <a class="nav-link" href="./demo4.php">Demo4</a>
                    </li>
                    <li class="nav-item bg-black">
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
                <a onclick="progress_next(2)">
                    <li>Sort of Arrays</li>
                </a>
                <a onclick="progress_next(3)">
                    <li>Numbers from 1 to 50</li>
                </a>
                <a href="./demo5.php">
                    <li>The Largest Number</li>
                </a>
            </ul>
            <img src="./resources/img/web_dev_logo.png" alt="">
        </div>
    </div>
    <div class="mask bg-black w-100 h-100"></div>
    <main class="main">
        <h2>Largest Number</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="1st_num" class="firstnum">First number:</label>
            <input type="text" class="" name="1st_num" required><br>
            <label for="2nd_num" class="firstnum">Second number:</label>
            <input type="text" class="" name="2nd_num" required><br>
            <label for="3rd_num" class="firstnum">Third number:</label>
            <input type="text" class="" name="3rd_num" required><br>
            <input type="submit" name="btn">
        </form>

        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["btn"])) {
                $first_num = $_POST["1st_num"];
                $second_num = $_POST["2nd_num"];
                $third_num = $_POST["3rd_num"];
                echo "<h3>All numbers: </h3>" . "<h5>[$first_num, $second_num, $third_num]</h5>";
                echo "<h3>Largest number:</h3>";
                echo "<h5>" . maxNum($first_num, $second_num, $third_num) . "</h5>";
            }
        }
        function maxNum($num1, $num2, $num3)
        {
            $num_arrays = array();
            $count = 1;
            array_push($num_arrays, $num1);
            array_push($num_arrays, $num2);
            array_push($num_arrays, $num3);
            return max($num_arrays);
        }

        ?>
    </main>
    <div class="d-flex mt-2 justify-content-between px-5">
        <button type="button" class="btn btn-outline-info" onclick="progress_prev(5)">Prev</button>
        <div class="container progress-container w-50" style="position:relative;">
            <div class="progress">
                <div class="progress-bar" style="width:0%">0%</div>
            </div>
        </div>
        <button type="button" class="btn btn-outline-info" onclick="progress_next(5)">Next</button>
    </div>

</body>

</html>