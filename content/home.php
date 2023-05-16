<?php
include "library/koneksi_db.php";

?>
<section id="home" class="container-lg m-auto bg-white">
    <div class="container-sm px-5 py-5">
        <h1 class="fw-bold mt-5 mb-3">Selamat Datang</h1>
        <div class="descripsi fs-5">
            salam kenal! saya Rebly Megib Tabuni, dari jayapura,
            <span>saya seorang Fullstack Developer</span>
        </div>
    </div>
    <div class="container-sm px-5 py-5">
        <h2 class="fw-bolder fs-3 border-bottom pb-2"><i class="fa-solid fa-house-chimney"></i> Proyek</h2>
        <div class="row justify-content-between">
            <?php
            $query = mysqli_query($conn, "SELECT * FROM proyek ");
            $no = 0;
            while ($data = mysqli_fetch_assoc($query)) {
                $no++

            ?>
                <div class="col-sm-5 col-12">
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
    <div class="container-sm px-5 py-5">
        <h2 class="fw-bolder fs-3 border-bottom pb-2"><i class="fa-solid fa-house-chimney"></i> Posting</h2>
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
    </div>
    <div class="container-sm px-5 py-5">
        <h2 class="fw-bolder fs-3 border-bottom pb-2"><i class="fa-solid fa-house-chimney"></i> Sekarang</h2>
        <p class="fs-5">
            Saat ini saya berada dalam tahap pertumbuhan liar ketika saya pertama kali terkena bidang baru yang saya sukai. Setiap hari, saya sibuk mewujudkan ide-ide itu datang ke pikiran, mengumpulkan pengalaman berharga dan minat tanpa
            akhir dari baik keberhasilan maupun kegagalan, dan kemudian menggunakannya untuk lebih elegan implementasi ide-ide baru.
        </p>
        <p class="fs-5">
            Saya menemukan diri saya tertarik pada kualitas yang beresonansi dengan saya dan saya aspirasi dalam berbagai bentuk desain grafis, antarmuka pengguna, animasi interaktif. Segala sesuatu yang membangkitkan estetika mirip dengan
            yang disajikan dalam karya seperti Weight of the World oleh Suede dan film Babel menarik bagi saya.
        </p>
    </div>
    <div class="container-sm px-5 py-5">
        <h2 class="fw-bolder fs-3 border-bottom pb-2"><i class="fa-solid fa-house-chimney"></i> Kontak</h2>
        <div>
            <p>
                <a href="#" class="text-dark fs-5"><i class="fa-solid fa-envelope"></i> reblytabuni2004@gmail.com</a>
            </p>
            <p>
                <a href="#" class="text-dark fs-5"><i class="fa-brands fa-github"></i> GitHub</a>
            </p>
            <p>
                <a href="#" class="text-dark fs-5"><i class="fa-brands fa-linkedin"></i> Linkedin</a>
            </p>
        </div>
    </div>
</section>