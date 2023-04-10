<?= $this->extend('admin/layout/master') ?>

<?= $this->section('content') ?>
<div class="container-fluid px-4">
  <h1 class="mt-4">Kategori Kelas</h1>
  <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Dashboard</a></li>
    <li class="breadcrumb-item active">Kategori Kelas</li>
  </ol>
  <?php if (session()->getFlashdata('berhasil')) : ?>
    <div class="alert alert-success" role="alert">
      <?= session()->getFlashdata('berhasil') ?>
    </div>
  <?php endif ?>
  <div class="card mb-4">
    <div class="card-header">
      <div class="float-start">
        <i class="fas fa-table me-1"></i>
        Data Kategori Kelas
      </div>
      <div class="float-end"><a class="btn btn-sm btn-primary" href="<?= base_url('admin/kategori-kelas/tambah') ?>" role="button">Tambah kategori</a></div>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table id="datatablesSimple" class="table">
          <thead>
            <tr>
              <th>Kategori Kelas</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($kategori as $kat) : ?>
              <tr>
                <td><?= $kat['nama_kategori'] ?></td>
                <td>
                  <div class="btn-group btn-group-sm" role="group">
                    <a href="<?= base_url('admin/kategori-kelas/') . $kat['id_kategori'] . '/hapus' ?>" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></a>
                    <a href="<?= base_url('admin/kategori-kelas/') . $kat['id_kategori'] . '/ubah' ?>" class="btn btn-warning text-white"><i class="fa-regular fa-pen-to-square"></i></a>
                  </div>
                </td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>