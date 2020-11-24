<?= $this->extend('layout/detail'); ?>

<?= $this->section('content'); ?>
<main>
    <div class="content">
        <div class="detail-home">
            <div class="row">
                <div class="col-md-4">
                    <div class="img-detail">
                        <div id="imgDisplay" style="width: 100%; height: 342.5px;">
                            <img src="/assets/img/<?= $bengkel['gambar'] ?>" alt="image" class="thumbnail" id="detailImg">
                        </div>
                        <div id="modalImg" class="img">
                            <span class="close">
                                <i class="fas fa-times"></i>
                            </span>
                            <img class="modal-content" id="img01">
                        </div>
                        <div class="img-bottom">
                            <div class="row">
                                <div class="col-3">
                                    <img src="/assets/img/test.jpg" onclick="changeImg(this)" alt="image" class="thumbnail">
                                </div>
                                <div class="col-3">
                                    <img src="/assets/img/test2.jpg" onclick="changeImg(this)" alt="image" class="thumbnail">
                                </div>
                                <div class="col-3">
                                    <img src="/assets/img/test3.jpg" onclick="changeImg(this)" alt="image" class="thumbnail">
                                </div>
                                <div class="col-3">
                                    <img src="/assets/img/test4.jpg" onclick="changeImg(this)" alt="image" class="thumbnail">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="col-md-12">
                        <h5><?= $bengkel['nama']; ?></h5>
                    </div>
                    <div class="col-md-12">
                        <span class="fa fa-star checked star-seller"></span>
                        <span class="fa fa-star checked star-seller"></span>
                        <span class="fa fa-star checked star-seller"></span>
                        <span class="fa fa-star checked star-seller"></span>
                        <span class="fa fa-star star-seller"></span>
                    </div>
                    <div class="col-md-12">
                        <h5>Buka</h5>
                        <p><?= $bengkel['buka']; ?></p>
                        <h5>Lokasi</h5>
                        <div id="map-container-google-2" class="z-depth-1-half map-container" style="height: 100%; width: 80%;">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.3369368829694!2d112.63327291487111!3d-7.964088694263863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd62833a8a51eb1%3A0x6236badc9448d6fc!2sSumber%20Urip%20Autoservice!5e0!3m2!1sen!2sus!4v1602916157587!5m2!1sen!2sus" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="line"></div>
                    <ul class="nav nav-center">
                        <li><a href="#deskripsi">Deskripsi</a></li>
                        <li><a href="#ulasan">Ulasan</a></li>
                    </ul>
                    <div class="line"></div>
                </div>
                <div class="col-md-12" id="deskripsi">
                    <h5>Deskripsi</h5>
                    <p><?= $bengkel['deskripsi']; ?></p>
                    <div class="line"></div>
                </div>
                <div class="col-md-12" id="ulasan">
                    <h5>Semua Ulasan</h5>
                    <div class="buyer-reviews">
                        <div class="row">
                            <!-- Review 1 -->
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="/assets/img/profile-user2.png" alt="profile" class="ulasan-profile">
                                    </div>
                                    <div class="col-9">
                                        <div class="name-date my-auto">
                                            <h6>Kelompok 9</h6>
                                            <p>12 hari lalu</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-12">
                                        <span class="fa fa-star checked star-review"></span>
                                        <span class="fa fa-star checked star-review"></span>
                                        <span class="fa fa-star checked star-review"></span>
                                        <span class="fa fa-star checked star-review"></span>
                                        <span class="fa fa-star star-review"></span>
                                    </div>
                                    <div class="col-12">
                                        <p>Pelayanan sangat profesional dan memuaskan. tak perlu pergi ke bengkel mekanik bisa datang ke rumah.</p>
                                    </div>
                                </div>
                                <div class="line"></div>
                            </div>
                            <!-- Review 2 -->
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="/assets/img/profile-user2.png" alt="profile" class="ulasan-profile">
                                    </div>
                                    <div class="col-9">
                                        <div class="name-date my-auto">
                                            <h6>Kelompok 9</h6>
                                            <p>12 hari lalu</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-12">
                                        <span class="fa fa-star checked star-review"></span>
                                        <span class="fa fa-star checked star-review"></span>
                                        <span class="fa fa-star checked star-review"></span>
                                        <span class="fa fa-star checked star-review"></span>
                                        <span class="fa fa-star star-review"></span>
                                    </div>
                                    <div class="col-12">
                                        <p>Pelayanan sangat profesional dan memuaskan. tak perlu pergi ke bengkel mekanik bisa datang ke rumah.</p>
                                    </div>
                                </div>
                                <div class="line"></div>
                            </div>
                            <!-- Review 3 -->
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="/assets/img/profile-user2.png" alt="profile" class="ulasan-profile">
                                    </div>
                                    <div class="col-9">
                                        <div class="name-date my-auto">
                                            <h6>Kelompok 9</h6>
                                            <p>12 hari lalu</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-12">
                                        <span class="fa fa-star checked star-review"></span>
                                        <span class="fa fa-star checked star-review"></span>
                                        <span class="fa fa-star checked star-review"></span>
                                        <span class="fa fa-star checked star-review"></span>
                                        <span class="fa fa-star star-review"></span>
                                    </div>
                                    <div class="col-12">
                                        <p>Pelayanan sangat profesional dan memuaskan. tak perlu pergi ke bengkel mekanik bisa datang ke rumah.</p>
                                    </div>
                                </div>
                                <div class="line"></div>
                            </div>
                            <!-- Review 4 -->
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="/assets/img/profile-user2.png" alt="profile" class="ulasan-profile">
                                    </div>
                                    <div class="col-9">
                                        <div class="name-date my-auto">
                                            <h6>Kelompok 9</h6>
                                            <p>12 hari lalu</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-12">
                                        <span class="fa fa-star checked star-review"></span>
                                        <span class="fa fa-star checked star-review"></span>
                                        <span class="fa fa-star checked star-review"></span>
                                        <span class="fa fa-star checked star-review"></span>
                                        <span class="fa fa-star star-review"></span>
                                    </div>
                                    <div class="col-12">
                                        <p>Pelayanan sangat profesional dan memuaskan. tak perlu pergi ke bengkel mekanik bisa datang ke rumah.</p>
                                    </div>
                                </div>
                                <div class="line"></div>
                            </div>
                            <!-- Review 5 -->
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="/assets/img/profile-user2.png" alt="profile" class="ulasan-profile">
                                    </div>
                                    <div class="col-9">
                                        <div class="name-date my-auto">
                                            <h6>Kelompok 9</h6>
                                            <p>12 hari lalu</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-12">
                                        <span class="fa fa-star checked star-review"></span>
                                        <span class="fa fa-star checked star-review"></span>
                                        <span class="fa fa-star checked star-review"></span>
                                        <span class="fa fa-star checked star-review"></span>
                                        <span class="fa fa-star star-review"></span>
                                    </div>
                                    <div class="col-12">
                                        <p>Pelayanan sangat profesional dan memuaskan. tak perlu pergi ke bengkel mekanik bisa datang ke rumah.</p>
                                    </div>
                                </div>
                                <div class="line"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="message">
                    <button type="button" class="btn pesan">
                        <i class="fas fa-comment-dots"></i>
                    </button>
                </section>
                <section class="navbar-bottom fixed-bottom">
                    <ul class="nav float-right">
                        <li class="order"><a href="">Pesan</a></li>
                        <li class="check-queue"><a href="">Cek Antrian</a></li>
                    </ul>
                </section>
            </div>
        </div>
    </div>
</main>
<?= $this->endSection(); ?>