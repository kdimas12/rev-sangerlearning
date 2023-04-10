<?= $this->extend('layout/master') ?>

<?= $this->section('content') ?>
<!-- jumbotron -->
<div class="container pt-md-5 pt-5">
  <div class="row g-5">
    <div class="col-md-7 col-xs-12 align-self-center text-center text-md-start">
      <p class="mb-0 fw-bold text-uppercase" style="color: var(--bd-sanger)">Get Started</p>
      <h2>
        Upgrading your <b>Skills</b> and <br />
        <b>Self-Improvement</b>
      </h2>
      <p>
        Kalian akan dibimbing oleh trainer yang profesional dan telah
        berpengalaman dalam mengembangkan berbagai macam website, aplikasi
        dan produk industri kreatif.
      </p>
      <a href="<?= (!session()->get('logged_in') ? base_url('daftar') : base_url('kelas')) ?>" class="btn btn-bd-sanger btn-sm">Daftarkan Sekarang</a>
    </div>
    <div class="col-md-5 col-12">
      <img src="<?= base_url('img/learning.svg') ?>" alt="learning" class="img-fluid" />
    </div>
  </div>
</div>

<!-- why choose us section -->
<div class="container py-4">
  <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
    <div class="col d-none d-sm-none d-md-flex flex-column align-items-start gap-2">
      <img src="<?= base_url('img/choose.svg') ?>" alt="choose" class="img-fluid" />
    </div>

    <div class="col">
      <div class="mb-4">
        <p class="mb-0 fw-bold text-uppercase" style="color: var(--bd-sanger)">Featured</p>
        <h2 class="fw-bold mb-0">Mengapa memilih kami?</h2>
        <p>Beberapa alasan bersama <b>Sanger Learning</b>.</p>
      </div>
      <div class="g-4">
        <div class="col d-flex align-items-start">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="1.75em" height="1.75em" class="bi text-body-secondary flex-shrink-0 me-3"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
            <path d="M224 256A128 128 0 1 1 224 0a128 128 0 1 1 0 256zM209.1 359.2l-18.6-31c-6.4-10.7 1.3-24.2 13.7-24.2H224h19.7c12.4 0 20.1 13.6 13.7 24.2l-18.6 31 33.4 123.9 36-146.9c2-8.1 9.8-13.4 17.9-11.3c70.1 17.6 121.9 81 121.9 156.4c0 17-13.8 30.7-30.7 30.7H285.5c-2.1 0-4-.4-5.8-1.1l.3 1.1H168l.3-1.1c-1.8 .7-3.8 1.1-5.8 1.1H30.7C13.8 512 0 498.2 0 481.3c0-75.5 51.9-138.9 121.9-156.4c8.1-2 15.9 3.3 17.9 11.3l36 146.9 33.4-123.9z" />
          </svg>
          <div>
            <h3 class="fw-bold mb-0 fs-4">Kumpulan Profesional</h3>
            <p>Dibimbing oleh beberapa pengajar yang sudah berpengalaman.</p>
          </div>
        </div>
        <div class="col d-flex align-items-start">
          <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
            <path d="M152.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 113C-2.3 103.6-2.3 88.4 7 79s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM224 96c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H192c-17.7 0-32-14.3-32-32zM48 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
          </svg>
          <div>
            <h3 class="fw-bold mb-0 fs-4">One Project</h3>
            <p>Menyelesaikan satu projek hingga selesai dari setiap kursus yang diberikan.</p>
          </div>
        </div>
        <div class="col d-flex align-items-start">
          <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
            <path d="M128 0c-13.3 0-24 10.7-24 24V142.1L81 119c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0l64-64c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-23 23V24c0-13.3-10.7-24-24-24zM344 200a40 40 0 1 0 -80 0 40 40 0 1 0 80 0zM168 296a40 40 0 1 0 -80 0 40 40 0 1 0 80 0zm312 40a40 40 0 1 0 0-80 40 40 0 1 0 0 80zM184 441.5l26.9 49.9c6.3 11.7 20.8 16 32.5 9.8s16-20.8 9.8-32.5l-36.3-67.5c1.7-1.7 3.2-3.6 4.3-5.8L248 345.5V400c0 17.7 14.3 32 32 32h48c17.7 0 32-14.3 32-32V345.5l26.9 49.9c1.2 2.2 2.6 4.1 4.3 5.8l-36.3 67.5c-6.3 11.7-1.9 26.2 9.8 32.5s26.2 1.9 32.5-9.8L424 441.5V480c0 17.7 14.3 32 32 32h48c17.7 0 32-14.3 32-32V441.5l26.9 49.9c6.3 11.7 20.8 16 32.5 9.8s16-20.8 9.8-32.5l-37.9-70.3c-15.3-28.5-45.1-46.3-77.5-46.3H470.2c-16.3 0-31.9 4.5-45.4 12.6l-33.6-62.3c-15.3-28.5-45.1-46.3-77.5-46.3H294.2c-32.4 0-62.1 17.8-77.5 46.3l-33.6 62.3c-13.5-8.1-29.1-12.6-45.4-12.6H118.2c-32.4 0-62.1 17.8-77.5 46.3L2.9 468.6c-6.3 11.7-1.9 26.2 9.8 32.5s26.2 1.9 32.5-9.8L72 441.5V480c0 17.7 14.3 32 32 32h48c17.7 0 32-14.3 32-32V441.5zM399 153l64 64c9.4 9.4 24.6 9.4 33.9 0l64-64c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-23 23V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V142.1l-23-23c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9z" />
          </svg>
          <div>
            <h3 class="fw-bold mb-0 fs-4">Kelas Intensive</h3>
            <p>Minimal 2 peserta kelas akan mulai sejak tanggal ditentukan.</p>
          </div>
        </div>
        <div class="col d-flex align-items-start">
          <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
            <path d="M54.2 202.9C123.2 136.7 216.8 96 320 96s196.8 40.7 265.8 106.9c12.8 12.2 33 11.8 45.2-.9s11.8-33-.9-45.2C549.7 79.5 440.4 32 320 32S90.3 79.5 9.8 156.7C-2.9 169-3.3 189.2 8.9 202s32.5 13.2 45.2 .9zM320 256c56.8 0 108.6 21.1 148.2 56c13.3 11.7 33.5 10.4 45.2-2.8s10.4-33.5-2.8-45.2C459.8 219.2 393 192 320 192s-139.8 27.2-190.5 72c-13.3 11.7-14.5 31.9-2.8 45.2s31.9 14.5 45.2 2.8c39.5-34.9 91.3-56 148.2-56zm64 160a64 64 0 1 0 -128 0 64 64 0 1 0 128 0z" />
          </svg>
          <div>
            <h3 class="fw-bold mb-0 fs-4">Free Internet</h3>
            <p>Internet tersedia secara gratis untuk mendukung proses pembelajaran.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container pb-4">
  <div class="mb-4">
    <p class="mb-0 fw-bold text-uppercase" style="color: var(--bd-sanger)">Review</p>
    <h2 class="fw-bold mb-0">Apa kata mereka?</h2>
    <p>Kata alumni <b>Sanger Learning</b>.</p>
  </div>
  <div class="row" data-masonry='{"percentPosition": true }'>
    <div class="col-sm-6 col-lg-4 mb-4">
      <div class="card p-3">
        <figure class="mb-0">
          <blockquote class="blockquote">
            <p>A well-known quote, contained in a blockquote element.</p>
          </blockquote>
          <figcaption class="blockquote-footer mb-0 text-body-secondary">
            Someone famous in <cite title="Source Title">Source Title</cite>
          </figcaption>
        </figure>
      </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4">
      <div class="card p-3">
        <figure class="mb-0">
          <blockquote class="blockquote">
            <p>A well-known quote, contained in a blockquote element.</p>
          </blockquote>
          <figcaption class="blockquote-footer mb-0 text-body-secondary">
            Someone famous in <cite title="Source Title">Source Title</cite>
          </figcaption>
        </figure>
      </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4">
      <div class="card p-3">
        <figure class="mb-0">
          <blockquote class="blockquote">
            <p>A well-known quote, contained in a blockquote element.</p>
          </blockquote>
          <figcaption class="blockquote-footer mb-0 text-body-secondary">
            Someone famous in <cite title="Source Title">Source Title</cite>
          </figcaption>
        </figure>
      </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4">
      <div class="card p-3">
        <figure class="mb-0">
          <blockquote class="blockquote">
            <p>A well-known quote, contained in a blockquote element.</p>
          </blockquote>
          <figcaption class="blockquote-footer mb-0 text-body-secondary">
            Someone famous in <cite title="Source Title">Source Title</cite>
          </figcaption>
        </figure>
      </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4">
      <div class="card p-3">
        <figure class="mb-0">
          <blockquote class="blockquote">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora eius, voluptatibus consequuntur minus fugit.</p>
          </blockquote>
          <figcaption class="blockquote-footer mb-0 text-body-secondary">
            Someone famous in <cite title="Source Title">Source Title</cite>
          </figcaption>
        </figure>
      </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4">
      <div class="card p-3">
        <figure class="mb-0">
          <blockquote class="blockquote">
            <p>A well-known quote, contained in a blockquote element.</p>
          </blockquote>
          <figcaption class="blockquote-footer mb-0 text-body-secondary">
            Someone famous in <cite title="Source Title">Source Title</cite>
          </figcaption>
        </figure>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>