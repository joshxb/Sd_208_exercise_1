<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./resources/css/bootstap.min.css">
    <link rel="stylesheet" href="./resources/css/style.css">
    <script src="./resources/js/boostrap_bundle.js"></script>
    <title>Descending Order Arrays</title>
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
                        <a class="nav-link bg-gradient" href="javascript:void(0)">Demo1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link bg-gradient" href="javascript:void(0)">Demo2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link bg-gradient" href="javascript:void(0)">Demo3</a>
                    </li>
                    <li class="nav-item bg-gradient">
                        <a class="nav-link" href="javascript:void(0)">Demo4</a>
                    </li>
                    <li class="nav-item bg-gradient">
                        <a class="nav-link" href="javascript:void(0)">Demo5</a>
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
                <a href="">
                    <li>Descending Order Arrays</li>
                </a>
                <a href="">
                    <li>Multiplication Table</li>
                </a>
                <a href="">
                    <li>Sort of Arrays</li>
                </a>
                <a href="">
                    <li>Numbers from 1 to 50</li>
                </a>
                <a href="">
                    <li>The Largest Number</li>
                </a>
            </ul>
            <img src="./resources/img/web_dev_logo.png" alt="">
        </div>
    </div>

    <main class="main">
        <h2>Descending Order Arrays</h2>
        <form class="was-validated" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="name_input" class="name">Names:</label>
            <input type="text" class="form-control" name="name_input" placeholder="ex: Joshua, Michael, Jhon" required><br>
            <p class="valid-feedback">Valid.</p>
            <p class="invalid-feedback">Please fill out this field.</p>
            <input type="submit" name="btn">
        </form>
        <?php echo "<h3>All names: </h3>" ?>

        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["btn"])) {
                $name_input = $_POST["name_input"];
                $array = explode(", ", $name_input);
                echo "<p>$name_input</p>";
                echo "<h3>Descending list of names: </h3>";

                echo "<p>" . descend_Array($array) . "</p>";
            }
        }
        function descend_Array($array)
        {
            $string = "";
            rsort($array);
            for ($i = 0; $i < count($array); $i++) {
                $string .= $array[$i];
                if ($i < (count($array) - 1)) {
                    $string .= ", ";
                } else {
                    $string .= "<br>";
                }
            }
            return $string;
        }

        ?>
    </main>


</body>

</html>