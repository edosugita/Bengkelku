<?= $this->extend('layout/bengkel/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="col-md-10 p-2 pt-3">

        <h1>Daftar Pesanan Online</h1>
        <div class="container">
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Cari Daftar Pesanan" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <br>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">No Antrian</th>
                        <th scope="col">Id Pesanan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($pesan as $n) : ?>
                        <?php if ($n['status'] == 'in progress') : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $n['antrian']; ?></td>
                                <td><?= $n['id_pesan']; ?></td>
                                <td>
                                    <a href="/pages/detailonline/<?= $n['id_pesan']; ?>" class="btn btn-success">Detail</a>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
        <h1>Daftar Antrian Ofline</h1>
        <div class="container">
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Cari Daftar Pesanan" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <br>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">No Antrian</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($pesanan as $p) : ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $p['nama']; ?></td>
                            <td><?= $p['antrian']; ?></td>
                            <td>
                                <a href="/pages/detail/<?= $p['antrian']; ?>" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <thead>
                <tr>
                    <th scope="col">Total Antrian</th>
                </tr>
            </thead>
            </table>
        </div>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#staticBackdrop">
            Masukkan Antrian
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form action="/pages/save" method="post">
                        <div class="container">
                            <div class="form-group row">
                                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama" name="nama">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="alamat" name="alamat">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="date" class="col-sm-2 col-form-label">Date</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="date" name="date">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                </th>
                </tr>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>