<?= $this->extend('admin/layout/master') ?>

<?= $this->section('content') ?>
<div class="container-fluid px-4">
  <h1 class="mt-4">Siswa</h1>
  <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Dashboard</a></li>
    <li class="breadcrumb-item active">Siswa</li>
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
              <th>Jenis kelamin</th>
              <th>Email</th>
              <th>Nomor Whatsapp</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($user as $usr) : ?>
              <tr>
                <td><?= $usr['nama'] ?></td>
                <td><?= $usr['jenis_kelamin'] ?></td>
                <td><?= $usr['email'] ?></td>
                <td><?= $usr['nomor_whatsapp'] ?></td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>