<div class="container mt-5">
    <!-- <div class="row">
        <div class="col-12 "> -->
    <h1 class="d-flex justify-content-center">Selamat Datang</h1>
    <h5 class="d-flex justify-content-center">Di Layanan Terpadu Desa. Cilegoko Hangseur</h5>

    <!-- </div>
    </div> -->
    <div class="row mt-5">
        <?php foreach ($layanan as $lyn) : ?>
            <div class="col-sm-6 mt-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?= $lyn['nama_layanan']; ?></h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Buat sekarang</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>