<?= $this->extend('admin/layout/master') ?>

<?= $this->section('content') ?>
<div class="col-md-8 px-4">
  <h1 class="mt-4">Ubah Harga Kelas</h1>
  <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="<?= base_url('admin/harga-kelas') ?>">Harga Kelas</a></li>
    <li class="breadcrumb-item active">Ubah Harga Kelas</li>
  </ol>
  <?php $validation = \Config\Services::validation() ?>
  <div class="card mb-4">
    <div class="card-header">
      <i class="fas fa-table me-1"></i>
      Form ubah harga kelas
    </div>
    <div class="card-body">
      <form action="" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>
        <div class="mb-3">
          <label for="nama_kelas" class="form-label">Nama Kelas</label>
          <select name="nama_kelas" id="nama_kelas" class="form-select <?= ($validation->hasError('nama_kelas')) ? 'is-invalid' : '' ?>">
            <option value="">-- Pilih --</option>
            <?php foreach ($kelas as $kel) : ?>
              <option value="<?= $kel['id_kelas'] ?>" <?= ($hargaKelas['id_kelas'] == $kel['id_kelas']) ? 'selected' : '' ?>><?= $kel['nama_kelas'] ?></option>
            <?php endforeach ?>
          </select>
          <div class="invalid-feedback">
            <?= $validation->getError('nama_kelas') ?>
          </div>
        </div>

        <div class="mb-3">
          <label for="kategori_kelas" class="form-label">Kategori Kelas</label>
          <select name="kategori_kelas" id="kategori_kelas" class="form-select <?= ($validation->hasError('kategori_kelas')) ? 'is-invalid' : '' ?>">
            <option value="">-- Pilih --</option>
            <?php foreach ($kategori as $kat) : ?>
              <option value="<?= $kat['id_kategori'] ?>" <?= ($hargaKelas['id_kategori'] == $kat['id_kategori']) ? 'selected' : '' ?>><?= $kat['nama_kategori'] ?></option>
            <?php endforeach ?>
          </select>
          <div class="invalid-feedback">
            <?= $validation->getError('kategori_kelas') ?>
          </div>
        </div>

        <div class="mb-3">
          <label for="harga_kelas" class="form-label">Harga Kelas</label>
          <input type="text" name="harga_kelas" id="harga_kelas" class="form-control <?= ($validation->hasError('harga_kelas')) ? 'is-invalid' : '' ?>" value="<?= $hargaKelas['harga'] ?>">
          <div class="invalid-feedback">
            <?= $validation->getError('harga_kelas') ?>
          </div>
        </div>
        <button type="submit" class="btn btn-sm btn-primary float-end" name="submit">Submit</button>
      </form>
    </div>
  </div>
</div>
<?= $this->endSection() ?>