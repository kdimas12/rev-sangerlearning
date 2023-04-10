<?php $validation = \Config\Services::validation() ?>
<?= $this->extend('layout/master') ?>

<?= $this->section('content') ?>
<div class="container py-4">
  <div>
    <div class="mb-4">
      <p class="mb-0 fw-bold text-uppercase" style="color: var(--bd-sanger)">Pendaftaran</p>
      <h2 class="fw-bold mb-0">Form Pendaftaran</h2>
      <p>Isi form berikut sesuai dengan yang kamu inginkan.</p>
    </div>
    <form action="" method="post">
      <h4 class="fw-bold mb-0">Data Calon Peserta</h4>
      <p>Pilih Kelas dan Proses pembelajaran, data diri kamu bisa mengubahnya pada halaman <b><a href="<?= base_url('akun') ?>">Akun</a></b>.</p>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama lengkap" value="<?= $user['nama'] ?>" disabled>
        <label for="nama">Nama lengkap</label>
      </div>
      <div class="form-floating mb-3">
        <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" disabled>
          <option value="" <?= ($user['jenis_kelamin'] == '') ? 'selected' : '' ?>>-- Pilih --</option>
          <option value="laki-laki" <?= ($user['jenis_kelamin'] == 'laki-laki') ? 'selected' : '' ?>>Laki-laki</option>
          <option value="perempuan" <?= ($user['jenis_kelamin'] == 'perempuan') ? 'selected' : '' ?>>Perempuan</option>
        </select>
        <label for="jenis_kelamin">Jenis kelamin</label>
      </div>
      <div class="form-floating mb-3">
        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" value="<?= $user['email'] ?>" disabled>
        <label for="email">Email</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="nomor_whatsapp" name="nomor_whatsapp" placeholder="08xxx" value="<?= $user['nomor_whatsapp'] ?>" disabled>
        <label for="nomor_whatsapp">Nomor WhatsApp</label>
      </div>

      <div class="row g-3 mb-3">
        <div class="col-12 col-md">
          <label for="kelas" class="form-label">Pilih Kelas</label>
          <select class="form-select <?= ($validation->hasError('kelas')) ? 'is-invalid' : '' ?>" id="kelas" name="kelas">
            <?php foreach ($kelas as $kel) : ?>
              <option value="<?= $kel['id_kelas'] ?>"><?= $kel['nama_kelas'] ?></option>
            <?php endforeach ?>
          </select>
          <div class="invalid-feedback">
            <?= $validation->getError('kelas') ?>
          </div>
        </div>
        <div class="col-12 col-md">
          <label for="proses_pembelajaran" class="form-label">Proses Pembelajaran</label>
          <select class="form-select <?= ($validation->hasError('proses_pembelajaran')) ? 'is-invalid' : '' ?>" id="proses_pembelajaran" name="proses_pembelajaran">
            <?php foreach ($kategori as $ket) : ?>
              <option value="<?= $ket['id_kategori'] ?>"><?= $ket['nama_kategori'] ?></option>
            <?php endforeach ?>
          </select>
          <div class="invalid-feedback">
            <?= $validation->getError('proses_pembelajaran') ?>
          </div>
        </div>
      </div>
      <h4 class="fw-bold mb-0">Jadwal Kelas</h4>
      <p>Pilih hari dan jam yang tepat bagi kamu untuk belajar.</p>
      <div class="row g-3 mb-3">
        <div class="col-12 col-md">
          <label for="hari" class="form-label">Hari Belajar</label>
          <select class="form-select <?= ($validation->hasError('hari')) ? 'is-invalid' : '' ?>" id="hari" name="hari">
            <option value="Senin, Kamis">Senin, Kamis</option>
            <option value="Selasa, Jumat">Selasa, Jumat</option>
            <option value="Rabu, Sabtu">Rabu, Sabtu</option>
          </select>
          <div class="invalid-feedback">
            <?= $validation->getError('hari') ?>
          </div>
        </div>
        <div class="col-12 col-md">
          <label for="jam" class="form-label">Jam Belajar</label>
          <select class="form-select <?= ($validation->hasError('jam')) ? 'is-invalid' : '' ?>" id="jam" name="jam">
            <option value="10:00-12:00">10:00 - 12:00</option>
            <option value="15:00-17:00">15:00 - 17:00</option>
            <option value="19:00-21:00">19:00 - 21:00</option>
          </select>
          <div class="invalid-feedback">
            <?= $validation->getError('jam') ?>
          </div>
        </div>
      </div>

      <button type="submit" class="btn btn-bd-sanger btn-sm">Daftar kelas sekarang</button>
    </form>
  </div>
</div>
<?= $this->endSection() ?>