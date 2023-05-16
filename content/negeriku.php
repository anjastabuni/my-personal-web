<div class="row justify-content-between">
    <?php
    $query = mysqli_query($conn, "SELECT * FROM blog ");
    $no = 0;
    while ($data = mysqli_fetch_assoc($query)) {
        $no++
    ?>
        <div class="col-sm-5 col-12">
            <h5 class="pt-4 my-2">
                <a href="?detail.php" class="fw-bolder text-dark text-decoration-none"><?= $data['judul'] ?> </a>
            </h5>
            <p class="text-muted fs-6"><i class="fa-solid fa-user"></i> <?= $data['nm_post']; ?> <small class="px-5"><i class="fa-regular fa-calendar-days text-muted"></i> <?= $data['tgl_posting']; ?></small> </p>
            <p class="fs-5"><?= $data['deskripsi'] ?></p>
        </div>
    <?php } ?>
</div>