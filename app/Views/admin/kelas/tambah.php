<?= $this->extend('admin/layout/master') ?>

<?= $this->section('content') ?>
<div class="col-md-8 px-4">
  <h1 class="mt-4">Tambah Kelas</h1>
  <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="<?= base_url('admin/kelas') ?>">Kelas</a></li>
    <li class="breadcrumb-item active">Tambah Kelas</li>
  </ol>
  <?php $validation = \Config\Services::validation() ?>
  <div class="card mb-4">
    <div class="card-header">
      <i class="fas fa-table me-1"></i>
      Form tambah kelas
    </div>
    <div class="card-body">
      <form action="<?= base_url('admin/kelas/tambah') ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>
        <div class="mb-3">
          <label for="nama_kelas" class="form-label">Nama kelas</label>
          <input type="text" class="form-control <?= ($validation->hasError('nama_kelas')) ? 'is-invalid' : '' ?>" id="nama_kelas" name="nama_kelas" autofocus>
          <div class="invalid-feedback">
            <?= $validation->getError('nama_kelas') ?>
          </div>
        </div>
        <div class="mb-3">
          <label for="deskripsi" class="form-label">Deskripsi</label>
          <textarea class="form-control <?= ($validation->hasError('deskripsi')) ? 'is-invalid' : '' ?>" name="deskripsi" id="deskripsi" rows="3"></textarea>
          <div class="invalid-feedback">
            <?= $validation->getError('deskripsi') ?>
          </div>
        </div>

        <div class="row g-3 mb-3">
          <div class="col">
            <label for="jumlah_pertemuan" class="form-label">Jumlah pertemuan</label>
            <input type="number" class="form-control <?= ($validation->hasError('jumlah_pertemuan')) ? 'is-invalid' : '' ?>" id="jumlah_pertemuan" name="jumlah_pertemuan">
            <div class="invalid-feedback">
              <?= $validation->getError('jumlah_pertemuan') ?>
            </div>
          </div>
          <div class="col">
            <label for="durasi_pertemuan" class="form-label">Durasi pertemuan</label>
            <input type="number" class="form-control <?= ($validation->hasError('durasi_pertemuan')) ? 'is-invalid' : '' ?>" id="durasi_pertemuan" name="durasi_pertemuan">
            <div class="invalid-feedback">
              <?= $validation->getError('durasi_pertemuan') ?>
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="materi" class="form-label">Materi</label>
          <textarea class="form-control <?= ($validation->hasError('materi')) ? 'is-invalid' : '' ?>" name="materi" id="materi" rows="3"></textarea>
          <div class="invalid-feedback">
            <?= $validation->getError('materi') ?>
          </div>
          <div class="text-warning form-text">*Penulisan materi dipisah dengan titik koma (;)</div>
        </div>
        <!-- <div class="mb-3">
          <label for="thumbnail" class="form-label">Thumbnail</label>
          <input class="form-control <?= ($validation->hasError('thumbnail')) ? 'is-invalid' : '' ?>" type="file" id="thumbnail" name="thumbnail">
          <div class="invalid-feedback">
            <?= $validation->getError('thumbnail') ?>
          </div>
        </div> -->


        <button type="submit" class="btn btn-primary float-end" name="submit">Submit</button>
      </form>
    </div>
  </div>
</div>
<?= $this->endSection() ?>