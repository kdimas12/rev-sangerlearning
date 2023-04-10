<?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>
<footer class="bg-body-secondary pt-5">
  <div class="container">
    <div class="row">
      <div class="col-6 col-md-5 mb-3">
        <h5 class="text-muted fw-bold">Sanger Learning</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2">
            <small>
              Sanger Learning memiliki praktisi dan akademisi yang telah
              berpengalaman dalam menciptakan dan mengembangkan berbagai
              website, aplikasi, serta produk IT lainnya.
            </small>
          </li>
        </ul>
      </div>

      <div class="col-6 col-md-3 mb-3">
        <h5 class="text-muted fw-bold">Kontak Kami</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2">
            <small><a href="mailto:sangerproduction@gmail.com" class="p-0 text-decoration-underline">sangerproduction@gmail.com</a></small>
          </li>
          <li class="nav-item mb-2">
            <small>
              <a href="tel:0822-7499-9174" class="p-0 text-decoration-underline">0822 7499 9174</a>
            </small>
          </li>
          <li class="nav-item mb-2">
            <small>Jl. Sunggal, Komplek Sunggal Mas, Blok B No. 16, Medan, Indonesia</small>
          </li>
        </ul>
      </div>

      <div class="col-md-3 offset-md-1 mb-3">
        <h5 class="text-muted fw-bold">Ikuti Kami</h5>
        <ul class="list-unstyled d-flex">
          <li>
            <a class="link-dark" href="#"><i class="fa-brands fa-twitter fa-xl"></i></a>
          </li>
          <li class="ms-3">
            <a class="link-dark" href="#"><i class="fa-brands fa-instagram fa-xl"></i></a>
          </li>
          <li class="ms-3">
            <a class="link-dark" href="#"><i class="fa-brands fa-facebook fa-xl"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="container d-flex pt-4 mt-4 border-top">
    <p>&copy; <?= date('Y') ?> <a href="<?= base_url() ?>" class="link-dark fw-bold text-decoration-none">Sanger Learning</a>.</p>
  </div>
</footer>