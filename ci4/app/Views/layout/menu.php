<?= $this->extend('layout/main') ?>
<?= $this->section('nav') ?>
<nav class="navbar-custom">
    <ul class="navbar-right list-inline float-right mb-0">

        <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
            <div id="clock"></div>
        </li>
        
        <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
            <a href="javascript:void(0);"> Hello, <?= session()->get('username') ?> </a>
        </li>

        <li class="dropdown notification-list list-inline-item">
            <div class="dropdown notification-list nav-pro-img">
                <a class="dropdown-toggle nav-link arrow-none nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="<?= base_url('img/badge/uexp-s.png')  ?>">
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <!-- item-->
                    <a class="dropdown-item text-danger" href="#" id="logout"><i class="mdi mdi-power text-danger"></i> Keluar</a>
                </div>
            </div>
        </li>

    </ul>

    <ul class="list-inline menu-left mb-0">
        <li class="float-left">
            <button class="button-menu-mobile open-left waves-effect">
                <i class="mdi mdi-menu"></i>
            </button>
        </li>

    </ul>

</nav>
<?= $this->endSection('nav') ?>


<?= $this->section('menu') ?>
<li class="menu-title">Dashboard</li>
<li>
    <a href="<?= base_url('auth/dashboard') ?>" class="waves-effect">
        <i class="icon-accelerator"></i> <span> Dashboard </span>
    </a>
</li>

<li>
    <a href="<?= base_url('auth/profile/') ?>" class="waves-effect">
        <i class="mdi mdi-face-profile"></i> <span> Profile </span>
    </a>
</li>

<li>
    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-server"></i> <span> Project <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span> </a>
    <ul class="submenu">
        <li><a href="<?= base_url('auth/project/category') ?>">Category</a></li>
        <li><a href="<?= base_url('auth/project') ?>">List</a></li>
    </ul>
</li>

<li>
    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-grid"></i> <span> Blog <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span> </a>
    <ul class="submenu">
        <li><a href="<?= base_url('auth/blog/category') ?>">Category</a></li>
        <li><a href="<?= base_url('auth/blog') ?>">List</a></li>
    </ul>
</li>

<li>
    <a href="<?= base_url('auth/publication/') ?>" class="waves-effect">
        <i class="mdi mdi-application"></i> <span> Publication </span>
    </a>
</li>

<?= $this->endSection('menu') ?>