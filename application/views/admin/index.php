<div class="container">
    <h3 class="mt-4">Daftar Layanan</h3>
    <a type="button" class="btn btn-primary " href="<?= base_url('administrator/tambahLayanan'); ?>">Tambah Layanan</a>
    <div class="card mt-4" style="width: 18rem;">
        <ul class="list-group list-group-flush ">
            <?php foreach ($layanan as $lyn) : ?>
                <li class="list-group-item"><?= $lyn['nama_layanan']; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>