<?php include "library/koneksi_db.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Proyek </title>
  <!-- link Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" />
  <!-- fontawesome -->
  <script src="https://kit.fontawesome.com/355acdeb36.js" crossorigin="anonymous"></script>
  <!-- css -->
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <!-- HEADER -->
  <header>
    <!-- NAVBAR -->
    <?= include "library/navbar.php"; ?>
    <!-- // NAVBAR -->
    <!--  CONTENT -->
    <section id="home" class="container m-auto" style="width: 70%;">

      <div class="container-sm px-5 py-5">
        <h2 class="fw-bolder fs-3  pb-2 mt-5"><i class="fa-solid fa-house-chimney"></i> Proyek</h2>
        <p class="fs-5">hay Disini portofolio proyek yang saya kerjakan. bisa lihat sourcode di sa punya GitHub. </p>
        <div class="row justify-content-between">
          <?php
          $query = mysqli_query($conn, "SELECT * FROM proyek ");
          $no = 0;
          while ($data = mysqli_fetch_assoc($query)) {
            $no++

          ?>
            <div class="col-sm-5 col-12 ">
              <h5 class="pt-4 my-2">
                <a href="#" class="fw-bolder text-dark text-decoration-none"><?= $data['judul'] ?> </a>
                <a href="#" class="text-dark text-decoration-none"><i class="fa-brands fa-github fs-5"></i></a>
                <a href="#" class="text-dark text-decoration-none"><i class="fa-solid fa-link"></i></a>
              </h5>
              <p class="fs-5"><?= $data['deskripsi'] ?></p>
            </div>
          <?php } ?>

        </div>
      </div>
    </section>
    <!-- // CONTENT -->
    <!-- FOOTER -->
    <?= include "library/footer.php" ?>
    <!-- // FOOTER -->
  </header>
  <!-- // HEADER -->

  <!-- bootstrap js -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
  <!-- link jqury -->
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <!-- js -->
  <script src="control.js"></script>
</body>

</html>