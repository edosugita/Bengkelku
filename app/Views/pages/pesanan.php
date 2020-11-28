<?= $this->extend('layout/profileuser'); ?>
<?= $this->section('content'); ?>

<main>
    <div class="row" style="padding: 0; margin: 0;">
        <div class="col-md-12">
            <div class="container">
                <h5 style="text-align: center; margin-bottom: 30px;">DETAIL PEMESANAN</h5>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input class="form-control" type="text" value="<?= session()->get('namadepan') . ' ' . session()->get('namabelakang') ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="nama">Alamat</label>
                        <input class="form-control" type="text" value="<?= session()->get('alamat') ?>" disabled>
                    </div>
                    <div class=" col-md-11 mx-auto" style="margin-top: 30px;">
                        <hr class="mx-auto line">
                        <p class="or">MELAKUKAN PEMESANAN</p>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Bengkel</label>
                        <input class="form-control" type="text" value="<?= $bengkel['nama']; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="nama">Alamat Bengkel</label>
                        <textarea class="form-control" cols="30" disabled><?= $bengkel['alamat']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="nama">No Antrian</label>
                        <?php foreach ($pesan as $p) : ?>
                            <?php if (session()->get('id') == $p['id']) : ?>
                                <input class="form-control" type="text" value="<?= $p['antrian'] ?>" disabled>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                    <button class="btn btn-primary" style="margin-top: 10px; width: 100%" type="submit">Selesai</button>
                    <button class="btn btn-danger" style="margin-top: 10px; width: 100%" type="submit">Batal</button>
                    <hr>
                    <a href="/home/detail/<?= $bengkel['slug'] ?>">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</main>

<?= $this->endSection(); ?>