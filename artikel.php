<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Artikel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- Fonts -->
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="Assets/css/style.css" />
  <link rel="stylesheet" href="Assets/css/style-carousel.css" />
</head>

<body class="bg-primary-color">
  <!-- Navbar -->
  <nav class="p-3 shadow navbar fixed-top navbar-expand-lg navbar-dark bg-geo-primary">
    <div class="container">
      <a class="p-0 navbar-brand" href="#home">
        <img src="./Assets/img/Logo Geotara.png" alt="Bootstrap" width="35" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active fw-bold" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active fw-bold" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active fw-bold" href="#partnership">Partnership</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active fw-bold" href="#virtualtour">Virtual Tour</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active fw-bold" href="#event">Event</a>
          </li>
        </ul>
        <form class="d-flex ms-5 w" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
        </form>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->

  <!-- Content -->
  <div class="container-fluid bg-dark text-light background-artikel">
    <div class="container jumbotron text-center">
        <div class="display-4 fs-1 fw-bolder">Artikel</div>
    </div>
  </div>

  <div id="carouselExampleControls" class="container carousel" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="card-carousel">
                <div class="img-wrapper"><img src="Assets/img/artikel-1.jpg" class="d-block w-100" alt="..."> </div>
                <div class="card-body p-4">
                    <h5 class="card-title fw-bolder">Pantai Ujung Genteng sebagai Wisata Favorit Di Tahun Baru</h5>
                    <p class="card-text mt-2">Meski Pantai Ujung Genteng berada pada garis pantai laut selatan...</p>
                    <a href="#" class="btn btn-success bg-geo-success text-light">Lihat</a>
                </div>
            </div>
        </div>
        <div class="carousel-item active">
            <div class="card-carousel">
                <div class="img-wrapper"><img src="Assets/img/artikel-2.jpg" class="d-block w-100" alt="..."> </div>
                <div class="card-body p-4">
                    <h5 class="card-title fw-bolder">Pantai Cimaja menjadi Pusat Destinasi Turis</h5>
                    <p class="card-text mt-2">Meski Pantai Ujung Genteng berada pada garis pantai laut selatan lalu...</p>
                    <a href="#" class="btn btn-success bg-geo-success text-light">Lihat</a>
                </div>
            </div>
        </div>
        <div class="carousel-item active">
            <div class="card-carousel">
                <div class="img-wrapper"><img src="Assets/img/artikel-3.jpg" class="d-block w-100" alt="..."> </div>
                <div class="card-body p-4">
                    <h5 class="card-title fw-bolder">Geyser Cisolok</h5>
                    <p class="card-text mt-2">Geological Park atau sering kita sebut Geopark adalah kawasan yang memiliki unsur geologi...</p>
                    <a href="#" class="btn btn-success bg-geo-success text-light">Lihat</a>
                </div>
            </div>
        </div>
        <div class="carousel-item active">
            <div class="card-carousel">
                <div class="img-wrapper"><img src="Assets/img/artikel-4.jpg" class="d-block w-100" alt="..."> </div>
                <div class="card-body p-4">
                    <h5 class="card-title fw-bolder">Pantai Ujung Genteng sebagai Wisata Favorit Di Tahun Baru</h5>
                    <p class="card-text mt-2">Meski Pantai Ujung Genteng berada pada garis pantai laut selatan...</p>
                    <a href="#" class="btn btn-success bg-geo-success text-light">Lihat</a>
                </div>
            </div>
        </div>
        <div class="carousel-item active">
            <div class="card-carousel">
                <div class="img-wrapper"><img src="Assets/img/artikel-5.jpg" class="d-block w-100" alt="..."> </div>
                <div class="card-body p-4">
                    <h5 class="card-title fw-bolder">Pantai Cimaja menjadi Pusat Destinasi Turis</h5>
                    <p class="card-text mt-2">Meski Pantai Ujung Genteng berada pada garis pantai laut selatan lalu...</p>
                    <a href="#" class="btn btn-success bg-geo-success text-light">Lihat</a>
                </div>
            </div>
        </div>
        <div class="carousel-item active">
            <div class="card-carousel">
                <div class="img-wrapper"><img src="Assets/img/artikel-6.jpg" class="d-block w-100" alt="..."> </div>
                <div class="card-body p-4">
                    <h5 class="card-title fw-bolder">Geyser Cisolok</h5>
                    <p class="card-text mt-2">Geological Park atau sering kita sebut Geopark adalah kawasan yang memiliki unsur geologi...</p>
                    <a href="#" class="btn btn-success bg-geo-success text-light">Lihat</a>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bg-success-carousel" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon bg-success-carousel" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- End Content -->

  <!-- Footer -->
  <footer class="text-center navbar footer bg-geo-primary text-light">
    <p class="p-3 m-auto">Credit @By Geotara</p>
  </footer>
  <!-- End Footer -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
  <script src="Assets/js/carousel.js"></script>
</body>

</html>