<?= $this->extend('admin/layout/master') ?>

<?= $this->section('content') ?>
<div class="container-fluid px-4">
  <h1 class="mt-4">Pembayaran</h1>
  <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Dashboard</a></li>
    <li class="breadcrumb-item active">Pembayaran</li>
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
        Data Siswa
      </div>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table id="datatablesSimple" class="table">
          <thead>
            <tr>
              <th>Nama Siswa</th>
              <th>Kelas</th>
              <th>Proses Belajar</th>
              <th>Hari</th>
              <th>Jam</th>
              <th>Bukti Pembayaran</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 0; ?>
            <?php foreach ($konfirmasi as $konf) : ?>
              <tr>
                <td><?= $konf['nama'] ?></td>
                <td><?= $konf['nama_kelas'] ?></td>
                <td><?= $konf['nama_kategori'] ?></td>
                <td><?= $konf['hari_pembelajaran'] ?></td>
                <td><?= $konf['jam_pembelajaran'] ?></td>
                <td>
                  <?php if (!is_null($konf['bukti_pembayaran'])) : ?>
                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#buktiPembayaran<?= $i ?>">
                      Bukti pembayaran
                    </button>
                    <div class="modal fade" id="buktiPembayaran<?= $i ?>" tabindex="-1" aria-labelledby="buktiPembayaranLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg modal-fullscreen-sm-down">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="buktiPembayaranLabel">Bukti pembayaran <?= $konf['nama'] ?>, <?= $konf['nama_kelas'] ?></h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <img class="img-fluid" src="<?= base_url('bukti_pembayaran/') . $konf['bukti_pembayaran'] ?>">
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php $i++ ?>
                  <?php else : ?>
                    <button class="btn btn-warning btn-sm" disabled>Belum mengirim</button>
                  <?php endif ?>
                </td>
                <td>
                  <?php if (strtolower($konf['status']) == 'sudah bayar') : ?>
                    <button class="btn btn-sm btn-success" disabled><?= $konf['status'] ?></button>
                  <?php else : ?>
                    <a href="<?= base_url('admin/pembayaran/' . $konf['id_konfirmasi'] . '/konfirmasi') ?>" class="btn btn-sm btn-primary">Konfirmasi</a>
                  <?php endif ?>
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