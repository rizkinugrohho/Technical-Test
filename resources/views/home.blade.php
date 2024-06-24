<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Kelas.Center</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('/landing-page/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/landing-page/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('/landing-page/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('/landing-page/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('/landing-page/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('/landing-page/css/styles.css') }}" rel="stylesheet" />
    <link href="{{ asset('/landing-page/css/main.css') }}" rel="stylesheet" />
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-md navbar-light bg-white">
        <div class="container px-5">
            <a class="navbar-brand" href="#!">
                <img src="/landing-page/assets/logo.svg" alt="Kelas.com">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#!">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Benefit</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Paket</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Kelas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Kontak Kami</a></li>
                </ul>
                <div class="btn-container">
                    <a class="btn btn-brown btn-md px-3 me-sm-1" href="#features">Ajukan Demo</a>
                    <a class="btn btn-whitebrown btn-md px-5 me-sm-3" href="#features">Masuk</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header style="background-image: url('/landing-page/assets/background.png'); background-size: cover; height: 30rem;">
        <div class="container px-5 h-100 align-items-center justify-content-center">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center my-10">
                        <h1 class="display-10 fw-bolder text-white mb-2">Tingkatkan Performa Bisnis Anda</h1>
                        <p class="lead text-white mb-4">Semua solusi untuk mempermudah Training dan Upskilling karyawan
                            di perusahaan Anda</p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                            <a class="btn btn-brown btn-lg px-5 me-sm-3" href="#features">Ajukan Demo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <header class="bg-darkgrey py-5 h-100">
        <div class="container px-4">
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-10">
                    <div class="text-center">
                        <h1 class="display-10 fw-bolder text-black">Telah Dipercaya oleh 10.000+ Profesional User dari</h1>
                        <div class="client-logo-container d-flex d-sm-flex justify-content-sm-center pt-4">
                            <img class="col-xl-2 col-md-3 col-6 client-logo" src="/landing-page/assets/user/IEG.png" alt="IEG">
                            <img class="col-xl-2 col-md-3 col-6 client-logo" src="/landing-page/assets/user/indo.png" alt="Indo">
                            <img class="col-xl-2 col-md-3 col-6 client-logo" src="/landing-page/assets/user/Sctv.png" alt="Sctv">
                            <img class="col-xl-2 col-md-3 col-6 client-logo" src="/landing-page/assets/user/Emtek.png" alt="Emtek">
                            <img class="col-xl-2 col-md-3 col-6 client-logo" src="/landing-page/assets/user/Sicepat.png" alt="Sicepat">
                            <img class="col-xl-2 col-md-3 col-6 client-logo" src="/landing-page/assets/user/IdcloudHost.png" alt="IdcloudHost">
                            <img class="col-xl-2 col-md-3 col-6 client-logo" src="/landing-page/assets/user/Adirect.png" alt="Adirect">
                            <img class="col-xl-2 col-md-3 col-6 client-logo" src="/landing-page/assets/user/Volta.png" alt="Volta">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Content -->
    @include('content1')

    <!-- Paket -->
    @include('paket')

    <!-- Kelas -->
    @include('kelas')

    <div style="background-image: url('/landing-page/assets/CTA2.png'); background-size: cover; height: 20rem;">
        <div class="container px-5 h-100 align-items-center justify-content-center">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center my-7">
                        <h1 class="display-7 fw-bolder text-black mb-2">Tingkatkan Kualitas Perusahaan Anda</h1>
                        <p class="pcontent2 text-black mb-2">Kami ingin membantu dan menunjukkan kepada Anda bagaimana Kelas corp dapat membantu dalam mengelola<br> 
                        pelatihan dan membuat prosesnya lebih cepat dan lebih mudah.</p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center py-4">
                            <a class="btn btn-brown btn-lg px-5 me-sm-3" href="#">Ajukan Demo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="#" class="d-flex align-items-center">
                <img src="/landing-page/assets/company-info.svg" alt="Kelas.com">
            </a>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4 class="text-white">Company</h4>
          <ul>
            <li> <a href="#">Tentang Kami</a></li>
            <li> <a href="#">Ajukan Demo</a></li>
            <li> <a href="#">Kelas.Work</a></li>
            <li> <a href="#">Kelas.Com</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4 class="text-white">Kebijakan</h4>
          <ul>
            <li> <a href="#">Kebijakan Privasi</a></li>
            <li> <a href="#">Syarat & Ketentuan</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12">
          <h4 class="text-white">Hubungi Kami</h4>
          <p><span class="bi bi-envelope"></span> Nabilla.Anggraini@kelas.com</p>
          <p><span class="bi bi-whatsapp"></span> +62 811 3366 763 (Nabilla<br> Anggraini)</p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Arsha</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Vendor JS Files -->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/php-email-form/validate.js"></script>
    <script src="vendor/aos/aos.js"></script>
    <script src="vendor/glightbox/js/glightbox.min.js"></script>
    <script src="vendor/swiper/swiper-bundle.min.js"></script>
    <script src="vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>

    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- Main JS File -->
    <script src="js/main.js"></script>
</body>

</html>
