<?php
$harga = "Rp " . number_format($konfirmasi['harga'], 0, ",", ".");
$total = "Rp " . number_format($konfirmasi['harga'] + 5, 0, ",", ".");
$validation = \Config\Services::validation();
?>
<?= $this->extend('layout/master') ?>

<?= $this->section('content') ?>
<div class="container py-4">
  <div class="mb-4">
    <p class="mb-0 fw-bold text-uppercase" style="color: var(--bd-sanger)">Invoice</p>
    <h2 class="fw-bold mb-0"><?= $konfirmasi['id_konfirmasi'] ?></h2>
    <p>Transfer sesuai dengan total yang tertera.</p>
  </div>
  <div>
    <table class="table">
      <thead>
        <tr>
          <th>Deskripsi</th>
          <th class="text-end">Jumlah</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?= $konfirmasi['nama_kelas'] ?></td>
          <td class="text-end"><?= $harga ?></td>
        </tr>
        <tr>
          <td>Kode Unik</td>
          <td class="text-end">Rp. 5</td>
        </tr>
      <tfoot>
        <tr>
          <th>Total</th>
          <th class="text-end"><?= $total ?></th>
        </tr>
      </tfoot>
      </tbody>
    </table>
  </div>
  <div class="mb-4">
    <h4 class="fw-bold mb-0">Metode Pembayaran</h4>
    <ul>
      <li>
        <p class="mb-0">BANK SYARIAH INDONESIA (BSI)</p>
        <div class="col-md-3">
          <div class="input-group">
            <input type="text" class="form-control fw-bold" value="123 4567 890" id="bsi" readonly>
            <button class="input-group-text btn-copy" data-clipboard-target="#bsi">
              <i class="fa-regular fa-clipboard"></i>
            </button>
          </div>
        </div>
        <p class="fw-bold">a.n Sanger Learning</p>
      </li>
      <li>
        <p class="mb-0">BANK RAKYAT INDONESIA (BRI)</p>
        <div class="col-md-3">
          <div class="input-group">
            <input type="text" class="form-control fw-bold" value="123 4567 890" id="bri" readonly>
            <button class="input-group-text btn-copy" data-clipboard-target="#bri">
              <i class="fa-regular fa-clipboard"></i>
            </button>
          </div>
        </div>
        <p class="fw-bold">a.n Sanger Learning</p>
      </li>
    </ul>
  </div>
  <div>
    <h4 class="fw-bold mb-0">Konfirmasi Pembayaran</h4>
    <p>Konfirmasi pembayaran kamu dengan mengisi form berikut.</p>
    <form action="" method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <div class="form-floating">
          <input type="text" class="form-control <?= ($validation->hasError('tanggal_pembayaran')) ? 'is-invalid' : '' ?>" id="tanggal_pembayaran" name="tanggal_pembayaran" placeholder="Tanggal Pembayaran">
          <label for="tanggal_pembayaran">Tanggal Pembayaran</label>
          <div class="invalid-feedback">
            <?= $validation->getError('tanggal_pembayaran') ?>
          </div>
        </div>
      </div>
      <div class="mb-3">
        <label for="bukti_pembayaran" class="form-label">Upload bukti pembayaran</label>
        <input class="form-control <?= ($validation->hasError('bukti_pembayaran')) ? 'is-invalid' : '' ?>" id="bukti_pembayaran" type="file" name="bukti_pembayaran">
        <div class="invalid-feedback">
          <?= $validation->getError('bukti_pembayaran') ?>
        </div>
      </div>
      <button type="submit" class="btn btn-bd-sanger btn-sm">Konfirmasi pembayaran</button>
    </form>
  </div>
</div>
<?= $this->endSection() ?>