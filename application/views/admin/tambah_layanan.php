<div class="container">
    <h3 class="mt-5">Tambah Layanan</h3>
    <form action="<?= base_url('administrator/tambahLayanan'); ?>" method="POST">
        <div class="row mt-4">
            <div class="col-4">
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Nama Layanan" name="nama_layanan">
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-4">
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Kode Layanan" name="kode">
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-4">
                <div class="mb-3 d-flex justify-content-end">
                    <input type="submit" class="btn btn-primary ">
                </div>
            </div>
        </div>

    </form>
</div>