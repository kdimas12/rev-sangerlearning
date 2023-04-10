<?php $validation = \Config\Services::validation() ?>
<?= $this->extend('layout/master') ?>

<?= $this->section('content') ?>
<div class="container py-4">
  <div>
    <?php if (session()->getFlashdata('berhasil')) : ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->getFlashdata('berhasil') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif ?>
    <div class="mb-4">
      <p class="mb-0 fw-bold text-uppercase" style="color: var(--bd-sanger)">Akun</p>
      <h2 class="fw-bold mb-0">Informasi dasar kamu</h2>
      <p>Kamu bisa mengubah semua data dibawah, kecuali <i>email</i>.</p>
    </div>
    <form action="" method="post">
      <div class="form-floating mb-3">
        <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ?>" id="nama" name="nama" placeholder="Nama lengkap" value="<?= $user['nama'] ?>">
        <label for="nama">Nama lengkap</label>
        <div class="invalid-feedback">
          <?= $validation->getError('nama') ?>
        </div>
      </div>
      <div class="form-floating mb-3">
        <select class="form-select <?= ($validation->hasError('jenis_kelamin')) ? 'is-invalid' : '' ?>" id="jenis_kelamin" name="jenis_kelamin">
          <option value="" <?= ($user['jenis_kelamin'] == '') ? 'selected' : '' ?>>-- Pilih --</option>
          <option value="laki-laki" <?= ($user['jenis_kelamin'] == 'laki-laki') ? 'selected' : '' ?>>Laki-laki</option>
          <option value="perempuan" <?= ($user['jenis_kelamin'] == 'perempuan') ? 'selected' : '' ?>>Perempuan</option>
        </select>
        <label for="jenis_kelamin">Jenis kelamin</label>
        <div class="invalid-feedback">
          <?= $validation->getError('jenis_kelamin') ?>
        </div>
      </div>
      <div class="form-floating mb-3">
        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" value="<?= $user['email'] ?>" disabled>
        <label for="email">Email</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control <?= ($validation->hasError('nomor_whatsapp')) ? 'is-invalid' : '' ?>" id="nomor_whatsapp" name="nomor_whatsapp" placeholder="08xxx" value="<?= $user['nomor_whatsapp'] ?>">
        <label for="nomor_whatsapp">Nomor WhatsApp</label>
        <div class="invalid-feedback">
          <?= $validation->getError('nomor_whatsapp') ?>
        </div>
      </div>
      <button type="submit" class="btn btn-bd-sanger btn-sm">Simpan Perubahan</button>
    </form>
  </div>
</div>
<?= $this->endSection() ?>