<?= $this->extend('admin/layout/master') ?>

<?= $this->section('content') ?>
<div class="col-md-8 px-4">
  <h1 class="mt-4">Tambah Kategori Kelas</h1>
  <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="<?= base_url('admin/kelas') ?>">Kategori Kelas</a></li>
    <li class="breadcrumb-item active">Tambah Kategori Kelas</li>
  </ol>
  <?php $validation = \Config\Services::validation() ?>
  <div class="card mb-4">
    <div class="card-header">
      <i class="fas fa-table me-1"></i>
      Form tambah kategori kelas
    </div>
    <div class="card-body">
      <form action="<?= base_url('admin/kategori-kelas/tambah') ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>
        <div class="mb-3">
          <label for="kategori" class="form-label">Nama Kategori</label>
          <input type="text" class="form-control <?= ($validation->hasError('kategori')) ? 'is-invalid' : '' ?>" id="kategori" name="kategori">
          <div class="invalid-feedback">
            <?= $validation->getError('kategori') ?>
          </div>
        </div>
        <button type="submit" class="btn btn-sm btn-primary float-end" name="submit">Submit</button>
      </form>
    </div>
  </div>
</div>
<?= $this->endSection() ?>