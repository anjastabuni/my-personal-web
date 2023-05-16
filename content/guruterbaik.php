<div class="container-fluid ">
    <div class="card m-auto py-5 px-2 shadow " style="width: 50rem;">
        <a href="./blog.php" class="nav-link mx-auto"><i class="fa-solid fa-chevron-left"></i> Back</a>
        <img src="./images/cenderawasi.jpg" style="width: 200px;" class="card-img-top rounded mx-auto mt-2" alt="">
        <?php
        $query = mysqli_query($conn, "SELECT * FROM detail WHERE id_detail='2'");
        $no = 0;
        while ($data = mysqli_fetch_assoc($query)) {
            $no++
        ?>
            <div class="card-body">
                <h5 class="pt-4 my-2">
                    <a href="<?= $data['id_detail']; ?>" class="fw-bolder text-dark text-decoration-none"><?= $data['judul'] ?> </a>
                </h5>
                <p class="fs-5"><?= $data['detail'] ?></p>
            </div>
        <?php } ?>
    </div>
</div>