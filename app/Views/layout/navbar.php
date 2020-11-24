<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">BENGKELKU.ID</a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-envelope-open-text"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-bell"></i>
                    </a>
                </li>
            </ul>
            <form method="post" class="mr-2 my-auto form-width d-inline-block">
                <div class="input-group">
                    <input type="text" class="form-control border border-right-0" placeholder="Search" name="keyword">
                    <span class="input-group-append">
                        <button class="btn cari border border-left-0" type="submit" name="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </form>
            <?php if (session()->get('isLoggedIn')) : ?>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <?php if (empty(session()->get('picture'))) : ?>
                            <img style="border-radius: 200px !important; width: 50px; height: 50px" src="/assets/img/profile-user.png">
                        <?php else : ?>
                            <img style="border-radius: 200px !important; width: 50px; height: 50px" src="/assets/img/<?= session()->get('picture') ?>">
                        <?php endif; ?>
                    </li>
                </ul>
            <?php else : ?>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Sign In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Sign Up</a>
                    </li>
                </ul>
            <?php endif; ?>
        </div>
    </nav>
</header>