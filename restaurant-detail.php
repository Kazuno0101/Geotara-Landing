<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Restaurant-Detail</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <!-- Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

  <!-- Fonts -->
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Aos -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

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
  <div class="container" data-aos="fade-up" data-aos-duration="1000">
    <div class="row d-flex justify-content-center">
      <div class="col-lg-10 col-sm-12">
        <div class="container card m-content-2">

          <a href="hotel.php" class="text-decoration-none text-geo-success m-3 mt-5"><i class="bi bi-arrow-left"></i> Kembali</a>
          <h5 class="card-title fw-bolder">Restaurant Agus</h5>

          <div class="card mb-3">
            <img src="Assets/img/restaurant.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text text-geo-success"><i class="bi bi-cash-coin"></i> <span class="fs-6 text-dark">Rp 250.000,00 - Rp 750.000,00</span></p>
              <p class="card-text text-geo-success"><i class="bi bi-telephone"></i> <span class="fs-6 text-dark">089514450504</span></p>
              <p class="card-text text-geo-success"><i class="bi bi-house"></i> <span class="fs-6 text-dark">Kp Cimarinjung, Desa Ciwaru, Kecamatan Ciemas Kabupaten Sukabumi</span></p>
            </div>
          </div>

          <div class="p-2 mb-5">
            <h4>Menu</h4>
            <div class="row col-4">
              <ol class="list-group list-group-numbered">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                  <div class="ms-2 me-auto">
                    <div class="fw-bold">Makanan</div>
                  </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                  <div class="ms-2 me-auto">
                    <div class="fw-bold">Minum</div>
                  </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                  <div class="ms-2 me-auto">
                    <div class="fw-bold">Cemilan</div>
                  </div>
                </li>
              </ol>
            </div>
          </div>

          <h4 class="p-2">Galeri</h4>
          <div id="carouselExampleControls" class="container carousel" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card-carousel">
                        <div class="img-wrapper"><img src="Assets/img/hotel-detail-1.jpg" class="d-block w-100" alt="..."> </div>
                    </div>
                </div>
                <div class="carousel-item active">
                    <div class="card-carousel">
                        <div class="img-wrapper"><img src="Assets/img/hotel-detail-3.jpg" class="d-block w-100" alt="..."> </div>
                    </div>
                </div>
                <div class="carousel-item active">
                    <div class="card-carousel">
                        <div class="img-wrapper"><img src="Assets/img/hotel-detail-4.jpg" class="d-block w-100" alt="..."> </div>
                    </div>
                </div>
                <div class="carousel-item active">
                    <div class="card-carousel">
                        <div class="img-wrapper"><img src="Assets/img/hotel-detail-3.jpg" class="d-block w-100" alt="..."> </div>
                    </div>
                </div>
                <div class="carousel-item active">
                    <div class="card-carousel">
                        <div class="img-wrapper"><img src="Assets/img/hotel-detail-4.jpg" class="d-block w-100" alt="..."> </div>
                    </div>
                </div>
                <div class="carousel-item active">
                    <div class="card-carousel">
                        <div class="img-wrapper"><img src="Assets/img/hotel-detail-1.jpg" class="d-block w-100" alt="..."> </div>
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

        </div>
      </div>
    </div>
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
  <!-- Aos -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>