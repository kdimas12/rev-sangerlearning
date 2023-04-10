<?= $this->extend('layout/master') ?>

<?= $this->section('content') ?>
<div class="container py-4">
  <div class="mb-4">
    <p class="mb-0 fw-bold text-uppercase" style="color: var(--bd-sanger)">Dashboard</p>
    <h2 class="fw-bold mb-0">Selamat Datang <?= session()->get('nama') ?>!</h2>
    <p>Semoga proses belajar kamu mengasyikkan.</p>
  </div>
  <div>
    <h4 class="fw-bold mb-0">Kelas yang diikuti</h4>
    <p>List kelas yang kamu ikuti</p>
    <table class="table">
      <thead>
        <tr>
          <th>Deskripsi</th>
          <th class="text-end">Status Pembayaran</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!$pendaftaran) : ?>
          <tr>
            <td colspan="2" class="text-center">Kamu belum mendaftar kelas</td>
          </tr>
        <?php else : ?>
          <?php foreach ($pendaftaran as $pen) : ?>
            <tr>
              <td><?= $pen['nama_kelas'] ?></td>
              <?php if ($pen['status'] !== 'Sudah bayar') : ?>
                <?php if (is_null($pen['bukti_pembayaran'])) : ?>
                  <td class="text-end"><a href="<?= base_url('invoice/' . $pen['id_konfirmasi']) ?>" class="btn btn-bd-sanger btn-sm">Konfirmasi pembayaran</a></td>
                <?php else : ?>
                  <td class="text-end"><button class="btn btn-primary btn-sm" disabled>Menunggu konfirmasi dari Admin</button></td>
                <?php endif ?>
              <?php else : ?>
                <td class="text-end"><button class="btn btn-success btn-sm" disabled><i class="fa-solid fa-square-check pe-2"></i>Sudah Membayar</button></td>
              <?php endif ?>
            </tr>
          <?php endforeach ?>
        <?php endif ?>
      </tbody>
    </table>
  </div>
</div>
<?= $this->endSection() ?>