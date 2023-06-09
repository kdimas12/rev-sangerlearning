<?= $this->extend('layout/master') ?>

<?= $this->section('content') ?>
<div class="container py-4">
  <div class="row align-items-center g-lg-5">
    <div class="col-lg-7">
      <div class="mb-4">
        <p class="mb-0 fw-bold text-uppercase" style="color: var(--bd-sanger)">Kontak</p>
        <h2 class="fw-bold mb-0">Ada pertanyaan?</h2>
        <p>Kami siap membantu kamu, jangan ragu untuk menghubungi kami.</p>
      </div>
      <div class="col d-flex align-items-center mb-3">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1.75em" height="1.75em" class="bi text-body-secondary flex-shrink-0 me-3"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
          <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
        </svg>
        <div>
          <h5 class="fw-bold mb-0">Telepon</h5>
          <p class="mb-0">+62 852 7719 4064</p>
        </div>
      </div>
      <div class="col d-flex align-items-center mb-3">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" width="1.75em" height="1.75em" class="bi text-body-secondary flex-shrink-0 me-3"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
          <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
        </svg>
        <div>
          <h5 class="fw-bold mb-0">Lokasi</h5>
          <p class="mb-0">Jl. Sunggal, Komplek Sunggal Mas, Blok B No. 16, Medan, Indonesia</p>
        </div>
      </div>
      <div class="col d-flex align-items-center mb-3">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1.75em" height="1.75em" class="bi text-body-secondary flex-shrink-0 me-3"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
          <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
        </svg>
        <div>
          <h5 class="fw-bold mb-0">Email</h5>
          <p class="mb-0"><a href="mailto:sangerproduction@gmail.com">sangerproduction@gmail.com</a></p>
        </div>
      </div>
    </div>
    <div class="col-md-10 mx-auto col-lg-5">
      <form action="" method="post" class="p-4 border rounded-3 bg-body-tertiary">
        <h4 class="fw-bold mb-0">Hubungi kami</h4>
        <p>Kirim pesan melalui form berikut.</p>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="nama" placeholder="Nama kamu" name="nama">
          <label for="nama">Nama kamu</label>
        </div>
        <div class="form-floating mb-3">
          <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
          <label for="email">Email</label>
        </div>
        <div class="form-floating mb-3">
          <textarea class="form-control" placeholder="Tinggalkan pesan di sini" id="pesan" style="height: 120px"></textarea>
          <label for="pesan">Pesan</label>
        </div>
        <button class="w-100 btn btn-bd-sanger" type="submit">Kirim pesan</button>
      </form>
    </div>
  </div>
</div>
<?= $this->endSection() ?>