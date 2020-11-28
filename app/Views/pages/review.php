<?= $this->extend('layout/detail'); ?>

<?= $this->section('content'); ?>

<main>
    <div class="container col-md-6">
        <?php if (isset($validation)) : ?>
            <div class="col-12">
                <div class="alert alert-danger" role="alert">
                    <?= $validation->listErrors(); ?>
                </div>
            </div>
        <?php endif; ?>
        <form action="/ulasan" method="post">
            <div class="form-group">
                <input class="form-control" type="text" value="<?= $bengkel['nama']; ?>" disabled>
                <input class="form-control" type="hidden" name="idbengkel" value="<?= $bengkel['id_bengkel']; ?>">
            </div>
            <div class="form-group">
                <input class="form-control" type="hidden" name="iduser" value="<?= session()->get('id') ?>">
            </div>
            <div class="form-group">
                <textarea class="form-control" name="ulasan" rows="3" placeholder="Ulasan Anda"></textarea>
            </div>
            <button type="button" class="btn btn-primary" onclick="location.href='/home/detail/<?= $bengkel['slug']; ?>'">Kembali</button>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>
</main>

<?= $this->endSection(); ?>