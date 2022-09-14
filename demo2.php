<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>
        Multiplication Table
    </title>

    <style>
        body{
            background: rgba(71, 166, 209, 0.89);
        }
        .row{
            display:flex;
            justify-content:center;
        }
    </style>
</head>

<body>

    <?php
    echo "<br>";
     ?>
    <!-- <div class="container-xxl"> -->
    <h1 class="text-center">Multiplication Table</h1>
    <?php
          echo "<br>";
         ?>


    <div class="container" >
        <div class="row" >
            <div class="col-sm-1 bg-primary">
                <?php
                for ($count = 1; $count <= 10; $count++) {
                    echo ("1 x " . $count . "=" . $count * 2);
                    echo ("<br>");
                }
                ?>
            </div>
            <div class="col-sm-1 bg-secondary">
                <?php
                for ($count = 1; $count <= 10; $count++) {
                    echo ("2 x " . $count . "=" . $count * 2);
                    echo ("<br>");
                }
                ?>
            </div>
            <div class="col-sm-1 bg-success">
                <?php
                for ($count = 1; $count <= 10; $count++) {
                    echo ("3 x " . $count . "=" . $count * 3);
                    echo ("<br>");
                }
                ?>
            </div>
            <div class=" col-sm-1 bg-info">
                <?php
                for ($count = 1; $count <= 10; $count++) {
                    echo ("4 x " . $count . "=" . $count * 4);
                    echo ("<br>");
                }
                ?>
            </div>
            <div class=" col-sm-1 bg-primary">
                <?php
                for ($count = 1; $count <= 10; $count++) {
                    echo ("5 x " . $count . "=" . $count * 5);
                    echo ("<br>");
                }
                ?>
            </div>
            <div class="col-sm-1 bg-warning">
                <?php
                for ($count = 1; $count <= 10; $count++) {
                    echo ("6 x " . $count . "=" . $count * 6);
                    echo ("<br>");
                }
                ?>
            </div>
            <div class="col-sm-1 bg-secondary">
                <?php
                for ($count = 1; $count <= 10; $count++) {
                    echo ("7 x " . $count . "=" . $count * 7);
                    echo ("<br>");
                }
                ?>
            </div>
            <div class="col-sm-1 bg-info">
                <?php
                for ($count = 1; $count <= 10; $count++) {
                    echo ("8 x " . $count . "=" . $count * 8);
                    echo ("<br>");
                }
                ?>
            </div>
            <div class="col-sm-1 bg-primary">
                <?php
                for ($count = 1; $count <= 10; $count++) {
                    echo ("9 x " . $count . "=" . $count * 9);
                    echo ("<br>");
                }
                ?>
            </div>
            <div class="col-sm-2 bg-warning">
                <?php
                for ($count = 1; $count <= 10; $count++) {
                    echo ("10 x " . $count . "=" . $count * 10);
                    echo ("<br>");
                }
                ?>
            </div>
        </div>
    </div>

    < <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
</body>

</html>