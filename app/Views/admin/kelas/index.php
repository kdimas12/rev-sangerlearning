<?= $this->extend('admin/layout/master') ?>

<?= $this->section('content') ?>
<div class="container-fluid px-4">
  <h1 class="mt-4">Kelas</h1>
  <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Dashboard</a></li>
    <li class="breadcrumb-item active">Kelas</li>
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
        Data Kelas
      </div>
      <div class="float-end"><a class="btn btn-sm btn-primary" href="<?= base_url('admin/kelas/tambah') ?>" role="button">Tambah kelas</a></div>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table id="datatablesSimple" class="table">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Deskripsi</th>
              <th>Thumbnail</th>
              <th>Jumlah pertemuan</th>
              <th>Durasi pertemuan</th>
              <th>Materi</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($kelas as $k) : ?>
              <tr>
                <td><?= $k['nama_kelas'] ?></td>
                <td><?= $k['deskripsi'] ?></td>
                <td><?= $k['thumbnail'] ?></td>
                <td><?= $k['jumlah_pertemuan'] ?></td>
                <td><?= $k['durasi_pertemuan'] ?></td>
                <td><?= $k['materi'] ?></td>
                <td>
                  <div class="btn-group btn-group-sm" role="group">
                    <a href="<?= base_url('admin/kelas/') . $k['id_kelas'] . '/hapus' ?>" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></a>
                    <a href="<?= base_url('admin/kelas/') . $k['id_kelas'] . '/ubah' ?>" class="btn btn-warning text-white"><i class="fa-regular fa-pen-to-square"></i></a>
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