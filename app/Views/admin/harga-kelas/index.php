<?= $this->extend('admin/layout/master') ?>

<?= $this->section('content') ?>
<div class="container-fluid px-4">
  <h1 class="mt-4">Harga Kelas</h1>
  <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Dashboard</a></li>
    <li class="breadcrumb-item active">Harga Kelas</li>
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
        Data Harga Kelas
      </div>
      <div class="float-end"><a class="btn btn-sm btn-primary" href="<?= base_url('admin/harga-kelas/tambah') ?>" role="button">Tambah harga kelas</a></div>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Kelas</th>
              <th>Kategori Kelas</th>
              <th>Harga</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody class="border-top-0">
            <?php foreach ($harga_kelas as $kelas => $kategori) : ?>
              <?php foreach ($kategori as $detail) : ?>
                <tr>
                  <?php if ($detail == reset($kategori)) : ?>
                    <td rowspan="<?= count($kategori) ?>" class="align-middle py-3"><?= $kelas ?></td>
                  <?php endif; ?>
                  <td class="py-3 align-middle"><?= $detail["nama_kategori"] ?></td>
                  <td class="py-3 align-middle"><?= "Rp " . number_format($detail["harga"], 0, ",", ".") ?></td>
                  <td class="py-3 align-middle">
                    <div class="btn-group btn-group-sm" role="group">
                      <a href="<?= base_url('admin/harga-kelas/') . $detail['id_harga_kelas'] . '/hapus' ?>" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></a>
                      <a href="<?= base_url('admin/harga-kelas/') . $detail['id_harga_kelas'] . '/ubah' ?>" class="btn btn-warning text-white"><i class="fa-regular fa-pen-to-square"></i></a>
                    </div>
                  </td>
                </tr>
              <?php endforeach ?>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>