<?= $this->extend('layout/master') ?>

<?= $this->section('content') ?>
<div class="container py-md-4 pt-4">
  <div class="mb-4">
    <p class="mb-0 fw-bold text-uppercase" style="color: var(--bd-sanger)">Kelas</p>
    <h2 class="fw-bold mb-0">Mau belajar apa hari ini?</h2>
    <p>Temukan kelas berdasarkan minatmu.</p>
  </div>
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    <?php foreach ($kelas as $kel) : ?>
      <div class="col">
        <div class="card h-100">
          <img src="https://placehold.co/600x400" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title fw-bold"><?= $kel['nama_kelas'] ?></h5>
            <p class="card-text"><small><?= $kel['deskripsi'] ?></small></p>
            <a href="#" class="btn btn-outline-sanger btn-sm d-block mb-2">Detail</a>
            <a href="<?= base_url('pendaftaran-kelas') ?>" class="btn btn-bd-sanger btn-sm d-block">Daftar sekarang</a>
          </div>
        </div>
      </div>
    <?php endforeach ?>
  </div>
</div>
<?= $this->endSection() ?>