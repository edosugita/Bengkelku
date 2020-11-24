<?= $this->extend('layout/templates'); ?>

<?= $this->section('content'); ?>
<main>
    <div class="content">
        <div class="row">
            <div class="col-md-2">
                <div class="profile">
                    <div class="row">
                        <?php if (session()->get('isLoggedIn')) : ?>
                            <div class="col-md-12">
                                <h6>profile</h6>
                            </div>
                            <div class="col-md-12">
                                <div class="profile-img">
                                    <?php if (empty(session()->get('picture'))) : ?>
                                        <img style="border-radius: 200px !important; width: 80px; height: 80px" src="/assets/img/profile-user.png">
                                    <?php else : ?>
                                        <img style="border-radius: 200px !important; width: 80px; height: 80px" src="/assets/img/<?= session()->get('picture') ?>">
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <p><?= session()->get('namadepan') ?></p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-12">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a href="/logout" class="nav-link logout">LOGOUT</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-12">
                                <button class="btn setting" onclick="location.href='/profile'" type="button">
                                    <i class="fas fa-user-cog"></i>
                                    Setting
                                </button>
                            </div>
                        <?php else : ?>
                            <div class="col-md-12">
                                <button class="btn setting" type="button" disabled>
                                    <i class="fas fa-user-cog"></i>
                                    Setting
                                </button>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-md-10">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="assets/img/banner1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/img/banner2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/img/banner3.png" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="row">
                    <?php foreach ($bengkel as $b) : ?>
                        <div class="col-md-2">
                            <a href="/home/detail/<?= $b['slug']; ?>" class="link">
                                <div class="card">
                                    <img src="assets/img/<?= $b['gambar']; ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h6 class="card-label"><?= $b['nama']; ?></h6>
                                        <p class="card-text">Kota <?= $b['kota']; ?></p>

                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                    <div class="col-12">
                        <?= $pager->links('bengkel', 'pag_custom'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?= $this->endSection(); ?>