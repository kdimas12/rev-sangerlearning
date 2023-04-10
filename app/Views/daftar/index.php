<?php $validation = \Config\Services::validation() ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sanger Learning</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= base_url('css/styles.css') ?>">
</head>

<body class="bg-body-tertiary">
  <main>
    <div class="container">
      <div class="card col-md-6 mx-auto mt-4">
        <div class="card-header">
          <a href="<?= base_url() ?>"><img src="<?= base_url('img/logo-sanger.png') ?>" width="50%"></a>
        </div>
        <div class="card-body">
          <?php if (session()->getFlashdata('gagal')) : ?>
            <div class="alert alert-danger" role="alert">
              <?= session()->getFlashdata('gagal') ?>
            </div>
          <?php endif ?>
          <form action="" method="post">
            <div class="form-floating mb-3">
              <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ?>" id="nama" name="nama" placeholder="Nama lengkap">
              <label for="nama">Nama lengkap</label>
              <div class="invalid-feedback">
                <?= $validation->getError('nama') ?>
              </div>
            </div>
            <div class="form-floating mb-3">
              <select class="form-select <?= ($validation->hasError('jenis_kelamin')) ? 'is-invalid' : '' ?>" id="jenis_kelamin" name="jenis_kelamin">
                <option value="">-- Pilih --</option>
                <option value="laki-laki">Laki-laki</option>
                <option value="perempuan">Perempuan</option>
              </select>
              <label for="jenis_kelamin">Jenis kelamin</label>
              <div class="invalid-feedback">
                <?= $validation->getError('jenis_kelamin') ?>
              </div>
            </div>
            <div class="form-floating mb-3">
              <input type="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : '' ?>" id="email" name="email" placeholder="name@example.com">
              <label for="email">Email</label>
              <div class="invalid-feedback">
                <?= $validation->getError('email') ?>
              </div>
            </div>
            <div class="row g-2">
              <div class="col-md">
                <div class="form-floating mb-3">
                  <input type="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : '' ?>" id="password" name="password" placeholder="Kata sandi">
                  <label for="password">Kata sandi</label>
                  <div class="invalid-feedback">
                    <?= $validation->getError('password') ?>
                  </div>
                </div>
              </div>
              <div class="col-md">
                <div class="form-floating mb-3">
                  <input type="password" class="form-control <?= ($validation->hasError('konfirmasi_password')) ? 'is-invalid' : '' ?>" id="konfirmasi_password" name="konfirmasi_password" placeholder="Konfirmasi kata sandi">
                  <label for="konfirmasi_password">Konfirmasi kata sandi</label>
                  <div class="invalid-feedback">
                    <?= $validation->getError('konfirmasi_password') ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control <?= ($validation->hasError('nomor_whatsapp')) ? 'is-invalid' : '' ?>" id="nomor_whatsapp" name="nomor_whatsapp" placeholder="08xxx">
              <label for="nomor_whatsapp">Nomor WhatsApp</label>
              <div class="invalid-feedback">
                <?= $validation->getError('nomor_whatsapp') ?>
              </div>
            </div>
            <div class="d-grid">
              <button type="submit" class="btn btn-bd-sanger">Buat akun</button>
            </div>
          </form>
        </div>
        <div class="card-footer text-center py-3">
          <div class="small"><a href="<?= base_url('masuk') ?>">Sudah punya akun? masuk</a></div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>