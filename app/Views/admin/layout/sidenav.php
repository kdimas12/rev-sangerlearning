<?php
$uri = new \CodeIgniter\HTTP\URI(current_url());
?>

<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
  <div class="sb-sidenav-menu">
    <div class="nav">
      <div class="sb-sidenav-menu-heading">Core</div>
      <a class="nav-link <?= ($uri->getSegment(2) == 'admin' && $uri->getSegment(3) == '') ? 'active' : ''; ?>" href="<?= base_url('admin') ?>">
        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
        Dashboard
      </a>

      <div class="sb-sidenav-menu-heading">Data Master</div>
      <a class="nav-link <?= ($uri->getSegment(2) == 'admin' && $uri->getSegment(3) == 'kategori-kelas') ? 'active' : ''; ?>" href="<?= base_url('admin/kategori-kelas') ?>">
        <div class="sb-nav-link-icon"><i class="fa-solid fa-cubes-stacked"></i></div>
        Kategori Kelas
      </a>
      <a class="nav-link <?= ($uri->getSegment(2) == 'admin' && $uri->getSegment(3) == 'harga-kelas') ? 'active' : ''; ?>" href="<?= base_url('admin/harga-kelas') ?>">
        <div class="sb-nav-link-icon"><i class="fa-solid fa-tag"></i></div>
        Harga Kelas
      </a>
      <a class="nav-link <?= ($uri->getSegment(2) == 'admin' && $uri->getSegment(3) == 'kelas') ? 'active' : ''; ?>" href="<?= base_url('admin/kelas') ?>">
        <div class="sb-nav-link-icon"><i class="fa-solid fa-graduation-cap"></i></div>
        Kelas
      </a>
      <div class="sb-sidenav-menu-heading">Laporan</div>
      <a class="nav-link <?= ($uri->getSegment(2) == 'admin' && $uri->getSegment(3) == 'siswa') ? 'active' : ''; ?>" href="<?= base_url('admin/siswa') ?>">
        <div class="sb-nav-link-icon"><i class="fa-solid fa-users"></i></div>
        Siswa
      </a>
      <a class="nav-link <?= ($uri->getSegment(2) == 'admin' && $uri->getSegment(3) == 'pembayaran') ? 'active' : ''; ?>" href="<?= base_url('admin/pembayaran') ?>">
        <div class="sb-nav-link-icon"><i class="fa-solid fa-money-bill-1"></i></div>
        Pembayaran
      </a>
    </div>
  </div>
  <div class="sb-sidenav-footer">
    <div class="small">Logged in as:</div>
    <?= session('nama') ?>
  </div>
</nav>