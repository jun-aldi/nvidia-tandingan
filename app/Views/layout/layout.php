<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.23/datatables.min.css" />
</head>
<body>

    <!-- nav section -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark" aria-label="Third navbar example">
    <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo base_url('/home'); ?>">
    <img src="<?= base_url() ?>/assets/img/logo.png" alt="" height="40"></a>
    </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample03">
        <ul class="navbar-nav me-auto mb-2 mb-sm-0">
          <li class="nav-item" >
          <a class="nav-link <?= ($page == 'home' ? 'active' : '')?>" aria-current="page" href="<?php echo base_url('/home'); ?>">Home</a>
          </li>
          <li class="nav-item">
          <a class="nav-link <?= ($page == 'technologies' ? 'active' : '')?>" aria-current="page" href="<?php echo base_url('/technologies'); ?>" >Technologies</a>
          </li>
          <li class="nav-item">
          <a class="nav-link <?= ($page == 'drivers' ? 'active' : '')?>" aria-current="page" href="<?php echo base_url('/driver'); ?>">Driver</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle <?= ($page == 'products' ? 'active' : '')?>" id="dropdown03" data-bs-toggle="dropdown" aria-expanded="false">Product</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown03">
              <li><a class="dropdown-item <?= ($page == 'products' ? 'active' : '')?>" href="<?php echo base_url('/geforce'); ?>"">Geforce Graphics Cards</a></li>
              <li><a class="dropdown-item" href="#">Laptop</a></li>
              <li><a class="dropdown-item" href="#">G-Sync Monitor</a></li>
            </ul>
          </li>
          <li class="nav-item">
          <a class="nav-link <?= ($page == 'about' ? 'active' : '')?>" aria-current="page" href="<?php echo base_url('/about'); ?>">About</a>
          </li>
          <li class="nav-item">
          <a class="nav-link <?= ($page == 'contact' ? 'active' : '')?>" aria-current="page" href="<?php echo base_url('/contact'); ?>">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- nav section -->

    <!-- Main section -->

    <main>
    <div class="container my-5 mx-auto">
        <div class="row">
            <div class="col-xl-12 p-0">
                <div class="jumbotron min-vh-auto m-0 d-flex flex-column justify-content-center">
                    <div class="row d-flex justify-content-center my-auto" >
                        <div class="col-12">
                        <?= $this->renderSection("content"); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>




    <!-- Main Section -->


<!-- Footer -->
<footer class="text-center text-lg-start bg-dark text-light">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <div>
          <img src="<?= base_url() ?>/assets/img/logo.png" alt="" height="10"><h6 class="text-uppercase fw-bold mb-4">NVIDIA</h6></a>
          </div>

          <p style="color: #76B900;">
          The world's most advanced graphics cards, gaming solutions, and gaming technology
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Angular</a>
          </p>
          <p>
            <a href="#!" class="text-reset">React</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Vue</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Laravel</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            COORPORATE INFORMATION
          </h6>
          <p>
            <a href="#!" class="text-reset" style="color: #76B900;">About Nvidia</a>
          </p>
          <p>
            <a href="#!" class="text-reset" style="color: #76B900;">Coorporate Review</a>
          </p>
          <p>
            <a href="#!" class="text-reset" style="color: #76B900;">Technologies</a>
          </p>
          <p>
            <a href="#!" class="text-reset" style="color: #76B900;">Nvidia Research</a>
          </p>
          <p>
            <a href="#!" class="text-reset" style="color: #76B900;"></a>Investor</a>
          </p>
          <p>
            <a href="#!" class="text-reset" style="color: #76B900;">Social Resposibility</a>
          </p>
          <p>
            <a href="#!" class="text-reset" style="color: #76B900;">Nvidia Foundation</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05); color : #76B900;">
    © 2022 Copyright:
    <a class="text-reset fw-bold" href="#" style="color: #76B900;">Juniar Aldi Nugroho K3519046</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</body>

</html>