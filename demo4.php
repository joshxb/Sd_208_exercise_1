<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./resources/img/web_dev_logo.png">
    <link rel="stylesheet" href="./resources/css/bootstap.min.css">
    <link rel="stylesheet" href="./resources/css/style.css">
    <script src="./resources/js/boostrap_bundle.js"></script>
    <script src="./resources/js/progress.js"></script>
    <title>Numbers from 1 to 50</title>
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
                    <li class="nav-item bg-black">
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
                <a onclick="progress_next(2)">
                    <li>Sort of Arrays</li>
                </a>
                <a href="./demo4.php">
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
        <h3>Numbers from 1 to 50</h3>
        <?php
        $start = 1;
        $color1 = 'style="color:red"';
        $color2 = 'style="color:blue"';
        $color3 = 'style="color:green"';

        echo "<ul>";
        for (; $start <= 50;) {
            if ($start % 3 == 0 && $start % 5 == 0) {
                echo "<li $color3>FizzBuzz</li>";
            } else if ($start % 3 == 0) {
                echo "<li $color1>Fizz</li>";
            } else if ($start % 5 == 0) {
                echo "<li $color2>Buzz</li>";
            } else {
                echo "<li>$start</li>";
            }
            $start++;
        }

        echo "</ul>";

        ?>

    </main>
    <div class="d-flex mt-2 justify-content-between px-5">
        <button type="button" class="btn btn-outline-info" onclick="progress_prev(4)">Prev</button>
        <div class="container progress-container w-50" style="position:relative;">
            <div class="progress">
                <div class="progress-bar" style="width:0%">0%</div>
            </div>
        </div>
        <button type="button" class="btn btn-outline-info" onclick="progress_next(4)">Next</button>
    </div>

</body>

</html>