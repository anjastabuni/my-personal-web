<?php include "library/koneksi_db.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Personal Web</title>
    <!-- link Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css" />
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/355acdeb36.js" crossorigin="anonymous"></script>
    <!-- css -->
    <link rel="stylesheet" href="style.css" />
    <style>
        body {
            padding-top: 90px;
            padding-bottom: 20px;
            background-image: url("images/bg-header.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body>
    <!-- HEADER -->
    <header>
        <?php
        $a = 0;
        while ($a <= 1) {
            if (isset($_GET['1']) && $_GET['1'] == '') {
                include('content/');
            }
            $a++;
        }

        ?>

    </header>
    <!-- // HEADER -->

    <!-- bootstrap js -->
    <script src="bootstrap/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <!-- link jqury -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <!-- js -->
    <script src="control.js"></script>
</body>

</html>