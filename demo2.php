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
    <title>
        Multiplication Table
    </title>
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
                        <a class="nav-link bg-black" href="./demo2.php">Demo2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link bg-gradient" href="./demo3.php">Demo3</a>
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
                <a href="./demo2.php">
                    <li>Multiplication Table</li>
                </a>
                <a onclick="progress_next(2)">
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
        echo "<br>";
        ?>
        <!-- <div class="container-xxl"> -->
        <h1 class="text-center heading">Multiplication Table</h1>
        <?php
        echo "<br>";
        ?>
        


        <div class="container">
            <div class="row">
                <div class="col-sm-1 bg-primary w-auto first_page p-3">
                </div>
                <div class="col-sm-1 bg-secondary w-auto second_page p-3">
                </div>
                <div class="col-sm-1 bg-success w-auto third_page p-3">
                </div>
                <div class=" col-sm-1 bg-info w-auto fourth_page p-3">
                </div>
                <div class=" col-sm-1 bg-primary w-auto fifth_page p-3">
                </div>
                <div class="col-sm-1 bg-warning w-auto sixth_page p-3"></div>
                <div class="col-sm-1 bg-secondary w-auto seventh_page p-3"></div>
                <div class="col-sm-1 bg-info w-auto eight_page p-3"></div>
                <div class="col-sm-1 bg-primary w-auto ninth_page p-3"></div>
                <div class="col-sm-1 bg-warning w-auto tenth_page p-3"></div>
            </div>
        </div>
    </main>
 
   <script>
        var page_1 = document.getElementsByClassName("first_page")[0];
        var page_2 = document.getElementsByClassName("second_page")[0];
        var page_3 = document.getElementsByClassName("third_page")[0];
        var page_4 = document.getElementsByClassName("fourth_page")[0];
        var page_5 = document.getElementsByClassName("fifth_page")[0];
        var page_6 = document.getElementsByClassName("sixth_page")[0];
        var page_7 = document.getElementsByClassName("seventh_page")[0];
        var page_8 = document.getElementsByClassName("eight_page")[0];
        var page_9 = document.getElementsByClassName("ninth_page")[0];
        var page_10 = document.getElementsByClassName("tenth_page")[0];
        var cont_page = new Array();
    </script>

    
<?php
        for ($count = 1; $count <= 101; $count++) {
                        if ($count <= 10){
                            $phrase = "1 x ";
                            $compute =  $count * 1;
                            echo "<script> 
                            cont_page[$count] = '$phrase $count = $compute<br>';
                        </script>";
                        }
                        else if ($count >= 10 && $count <= 20 ){
                            $count_res = $count - 10;
                            $phrase = "2 x ";
                            $compute =  ($count_res) * 2;
                            echo "<script> 
                            cont_page[$count] = '$phrase $count_res = $compute<br>';
                        </script>";
                        }
                        else if ($count >= 20 && $count <= 30 ){
                            $count_res = $count - 20;
                            $phrase = "3 x ";
                            $compute =  ($count_res) * 3;
                            echo "<script> 
                            cont_page[$count] = '$phrase $count_res = $compute<br>';
                        </script>";
                        }
                        else if ($count >= 30 && $count <= 40){
                            $count_res = $count - 30;
                            $phrase = "4 x ";
                            $compute =  ($count_res) * 4;
                            echo "<script> 
                            cont_page[$count] = '$phrase $count_res = $compute<br>';
                        </script>";
                        }
                        else if ($count >= 40 && $count <= 50){
                            $count_res = $count - 40;
                            $phrase = "5 x ";
                            $compute =  ($count_res) * 5;
                            echo "<script> 
                            cont_page[$count] = '$phrase $count_res = $compute<br>';
                        </script>";
                        }
                        else if ($count >= 50 && $count <= 60){
                            $count_res = $count - 50;
                            $phrase = "6 x ";
                            $compute =  ($count_res) * 6;
                            echo "<script> 
                            cont_page[$count] = '$phrase $count_res = $compute<br>';
                        </script>";
                        }
                        else if ($count >= 60 && $count <= 70){
                            $count_res = $count - 60;
                            $phrase = "7 x ";
                            $compute =  ($count_res) * 7;
                            echo "<script> 
                            cont_page[$count] = '$phrase $count_res = $compute<br>';
                        </script>";
                        }
                        else if ($count >= 70 && $count <= 80){
                            $count_res = $count - 70;
                            $phrase = "8 x ";
                            $compute =  ($count_res) * 8;
                            echo "<script> 
                            cont_page[$count] = '$phrase $count_res = $compute<br>';
                        </script>";
                        }
                        else if ($count >= 80 && $count <= 90){
                            $count_res = $count - 80;
                            $phrase = "9 x ";
                            $compute =  ($count_res) * 9;
                            echo "<script> 
                            cont_page[$count] = '$phrase $count_res = $compute<br>';
                        </script>";
                        }
                        else if ($count >= 90 && $count <= 100){
                            $count_res = $count - 90;
                            $phrase = "10 x ";
                            $compute =  ($count_res) * 10;
                            echo "<script> 
                            cont_page[$count] = '$phrase $count_res = $compute<br>';
                        </script>";
                        }
        }
    ?>
  
    <div class="d-flex mt-2 justify-content-between px-5">
        <button type="button" class="btn btn-outline-info" onclick="progress_prev(2)">Prev</button>
        <div class="container progress-container w-50" style="position:relative;">
            <div class="progress">
                <div class="progress-bar" style="width:0%">0%</div>
            </div>
        </div>
        <button type="button" class="btn btn-outline-info" onclick="progress_next(2)">Next</button>
    </div>
</body>

<script src="./resources/js/multiplier.js"></script>
</html>