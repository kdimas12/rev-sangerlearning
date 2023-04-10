<nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom">
  <div class="container">
    <a class="navbar-brand" href="<?= base_url() ?>"><img src="<?= base_url('img/logo-sanger.png') ?>" alt="logo-sanger" width="250" /></a>
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?= base_url() ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('kelas') ?>">Kelas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('hubungi-kami') ?>">Hubungi Kami</a>
        </li>
      </ul>
      <?php if (session()->get('role') == 'user') : ?>
        <div class="dropdown">
          <button class="btn btn-bd-sanger btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            hai, <b><?= session()->get('nama') ?></b>
          </button>
          <ul class="dropdown-menu mt-2 gap-1 p-2 rounded-3 mx-0">
            <li><a class="dropdown-item rounded-2" href="<?= base_url('dashboard') ?>">Dashboard</a></li>
            <li><a class="dropdown-item rounded-2" href="<?= base_url('akun') ?>">Akun</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item rounded-2" href="<?= base_url('keluar') ?>">Keluar</a></li>
          </ul>
        </div>
      <?php else : ?>
        <div class="d-grid d-md-flex align-items-center gap-2">
          <a href="<?= base_url('masuk') ?>" class="btn btn-sm btn-bd-sanger">Masuk</a>
          <a href="<?= base_url('daftar') ?>" class="btn btn-sm btn-outline-sanger">Daftar</a>
        </div>
      <?php endif ?>
    </div>
  </div>
</nav>