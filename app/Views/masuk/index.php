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
              <input type="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : '' ?>" id="email" name="email" placeholder="name@example.com">
              <label for="email">Email</label>
              <div class="invalid-feedback">
                <?= $validation->getError('email') ?>
              </div>
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : '' ?>" id="password" name="password" placeholder="Kata sandi">
              <label for="password">Kata sandi</label>
              <div class="invalid-feedback">
                <?= $validation->getError('password') ?>
              </div>
            </div>
            <div class="d-grid">
              <button type="submit" class="btn btn-bd-sanger">Masuk</button>
            </div>
          </form>
        </div>
        <div class="card-footer text-center py-3">
          <div class="small"><a href="<?= base_url('daftar') ?>">Belum punya akun? daftar</a></div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>