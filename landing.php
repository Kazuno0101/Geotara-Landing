<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Landing Page</title>
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
  <div class="container m-content-2">

    <!-- Wisata Populer -->
    <section id="wisata-populer" class="mb-6">
      <div class="row">
        <div class="col-12 text-center mb-5">
          <h2 class="fw-bolder">Populer Wisata di Ciletuh</h2>
          <p>Nikmati Pengalaman Seru Berjelajah Dengan Virtual Tour 360</p>
        </div>
      </div>
      <div class="row justify-content-center gap-5">
        <!-- Card -->
        <div class="col-md-3">
          <div class="card card-rounded shadow">
            <img src="Assets/img/geo-list-3.png" class="card-img-top p-3 rounded" alt="Card Image">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title text-center fs-6 fw-bold">Menelusuri Indahnya Curug Sodong</h5>
              <a href="geosite.php" class="btn btn-sm bg-geo-success text-light btn-success mt-auto align-self-start m-auto">Virtual Tour</a>
            </div>
          </div>
        </div>
        <!-- Card -->
        <div class="col-md-3">
          <div class="card card-rounded shadow">
            <img src="Assets/img/geo-list-4.png" class="card-img-top p-3 rounded" alt="Card Image">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title text-center fs-6 fw-bold">Keindahan Bukit Cimarunjung yang Terkenal</h5>
              <a href="geosite.php" class="btn btn-sm bg-geo-success text-light btn-success mt-auto align-self-start m-auto">Virtual Tour</a>
            </div>
          </div>
        </div>
        <!-- Card -->
        <div class="col-md-3">
          <div class="card card-rounded shadow">
            <img src="Assets/img/geo-list-5.png" class="card-img-top p-3 rounded" alt="Card Image">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title text-center fs-6 fw-bold">Pantai Citepus sebagai Wisata Favorit Di Tahun Baru</h5>
              <a href="geosite.php" class="btn btn-sm bg-geo-success text-light btn-success mt-auto align-self-start m-auto">Virtual Tour</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Geopark Ciletuh -->
    <section id="geopark-ciletuh" class="mb-6">
      <div class="row">
        <div class="col-12 text-center">
          <h2 class="fw-bolder">Geopark Ciletuh</h2>
          <p>Apa Sih Geopark Ciletuh?</p>
        </div>
      </div>
      <div class="row justify-content-center">
        <!-- Card -->
        <div class="col-12">
          <div class="card card-rounded shadow">
            <img src="Assets/img/geo-list-event-1.png" class="card-img-top p-3 rounded" alt="Card Image">
            <div class="card-body d-flex flex-column">
              <!-- <h5 class="card-title text-center fs-6 fw-bold">Menelusuri Indahnya Curug Sodong</h5> -->
              <p><b>The Ciletuh-Palabuhanratu Geopark</b> has an area of 126,100 hectares or 1,261 km2. Covering 74 villages, in 8 sub-districts
              namely Ciracap, Surade, Ciemas, Waluran, Simpenan, Palabuhanratu, Cikakak, and Cisolok Districts. Ciletuh Geopark was
              designated as a National Geopark by the Indonesian National Geopark Committee (KNGI) together with the Indonesian
              National Committee for UNESCO (KNIU) on 22 December 2015.</p>
              <p>Geopark expansion and name change became Ciletuh-Palabuhanratu
              inaugurated by the same committee on 21 June 2016 and designated as a UNESCO Global Geopark on 17 April 2018 with the
              geopark theme "Subduction Fossil, Plato Jampang, Magmatic Path Shift".</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Lokasi Geopark Ciletuh -->
    <section id="lokasi-geopark-ciletuh" class="mb-6">
      <div class="row">
        <div class="col-12 text-center">
          <h2 class="fw-bolder">Lokasi Geopark Ciletuh</h2>
          <p>Dimana Geopark Ciletuh?</p>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="card card-rounded shadow">
          <div class="row align-items-start">
            <div class="col">
              <img src="Assets/img/geosite maps.png" class="card-img-top p-3 rounded" alt="Card Image">
              <h5 class="ms-3 fw-semibold">Kabupaten Sukabumi</h5>
              <h5 class="ms-3 fw-normal fs-6">Jawa Barat</h5>
            </div>
            <div class="col mt-3">
              <h4 class="fw-semibold">Rute Ke Geopark Ciletuh</h4>
              <h6 class="fw-semibold">Bogor</h6>
              <p>Stasiun Bogor | Travel Kota Cianjur - Sukabumi | Travel Sukabumi - Ciletuh</p>
              <h6 class="fw-semibold">Bandung</h6>
              <p>Stasiun Bandung | Travel Kota Cianjur - Sukabumi | Travel Sukabumi - Ciletuh</p>
              <h6 class="fw-semibold">Jakarta</h6>
              <p>Stasiun Jakarta | Travel Kota Cianjur - Sukabumi | Travel Sukabumi - Ciletuh</p>
            </div>
          </div>
        </div>
      </div>

    </section>

    <!-- Artikel -->
    <section id="artikel" class="mb-6">
      <div class="row">
        <div class="col-12 text-center">
          <h2 class="fw-bolder">Artikel Ciletuh</h2>
          <p>Baca Artikel Terpopuler di Ciletuh</p>
        </div>
      </div>

      <div class="row justify-content-center gap-5">
        <!-- Card -->
        <div class="col-md-3">
          <div class="card card-rounded shadow">
            <img src="Assets/img/geo-list-3.png" class="card-img-top rounded rounded-b-1" alt="Card Image">
            <div class="card-img-overlay">
              <p class="card-title btn btn-light fw-bold">Top 1</p>
            </div>
            
            <div class="card-body d-flex flex-column">
              <h5 class="card-title fs-6 fw-bold">Curug Sodong menyimpan berbagai sejarah</h5>
              <a href="#" class="text-geo-success text-decoration-none mt-auto align-self-start z-i-10 fw-bold">Kunjungi</a>
            </div>
          </div>
        </div>
        <!-- Card -->
        <div class="col-md-3">
          <div class="card card-rounded shadow">
            <img src="Assets/img/geo-list-1.png" class="card-img-top rounded rounded-b-1" alt="Card Image">
            <div class="card-img-overlay">
              <p class="card-title btn btn-light fw-bold">Top 2</p>
            </div>
            
            <div class="card-body d-flex flex-column">
              <h5 class="card-title fs-6 fw-bold">Bukit Cimarunjung Menyimpan Berbagai Misteri</h5>
              <a href="#" class="text-geo-success text-decoration-none mt-auto align-self-start z-i-10 fw-bold">Kunjungi</a>
            </div>
          </div>
        </div>
        <!-- Card -->
        <div class="col-md-3">
          <div class="card card-rounded shadow">
            <img src="Assets/img/geo-list-2.png" class="card-img-top rounded rounded-b-1" alt="Card Image">
            <div class="card-img-overlay">
              <p class="card-title btn btn-light fw-bold">Top 3</p>
            </div>
            
            <div class="card-body d-flex flex-column">
              <h5 class="card-title fs-6 fw-bold">Curug Cigangsa, Warisan Alam yang Memanjakan Wisatawan</h5>
              <a href="#" class="text-geo-success text-decoration-none mt-auto align-self-start z-i-10 fw-bold">Kunjungi</a>
            </div>
          </div>
        </div>
        <!-- Card -->
        <div class="col-md-3">
          <div class="card card-rounded shadow">
            <img src="Assets/img/geo-list-2.png" class="card-img-top rounded rounded-b-1" alt="Card Image">
            <div class="card-img-overlay">
              <p class="card-title btn btn-light fw-bold">Top 4</p>
            </div>
            
            <div class="card-body d-flex flex-column">
              <h5 class="card-title fs-6 fw-bold">Curug Sodong menyimpan berbagai sejarah</h5>
              <a href="#" class="text-geo-success text-decoration-none mt-auto align-self-start z-i-10 fw-bold">Kunjungi</a>
            </div>
          </div>
        </div>
        <!-- Card -->
        <div class="col-md-3">
          <div class="card card-rounded shadow">
            <img src="Assets/img/geo-list-4.png" class="card-img-top rounded rounded-b-1" alt="Card Image">
            <div class="card-img-overlay">
              <p class="card-title btn btn-light fw-bold">Top 5</p>
            </div>
            
            <div class="card-body d-flex flex-column">
              <h5 class="card-title fs-6 fw-bold">Curug Cigangsa, Warisan Alam yang Memanjakan Wisatawan</h5>
              <a href="#" class="text-geo-success text-decoration-none mt-auto align-self-start z-i-10 fw-bold">Kunjungi</a>
            </div>
          </div>
        </div>
        <!-- Card -->
        <div class="col-md-3">
          <div class="card card-rounded shadow">
            <img src="Assets/img/geo-list-5.png" class="card-img-top rounded rounded-b-1" alt="Card Image">
            <div class="card-img-overlay">
              <p class="card-title btn btn-light fw-bold">Top 6</p>
            </div>
            
            <div class="card-body d-flex flex-column">
              <h5 class="card-title fs-6 fw-bold">Curug Sodong menyimpan berbagai sejarah</h5>
              <a href="#" class="text-geo-success text-decoration-none mt-auto align-self-start z-i-10 fw-bold">Kunjungi</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="explore">
      <div class="row">
        <div class="card shadow p-0">
          <img src="Assets/img/geo-list-event-1.png" class="card-img-top" alt="Card Image">
          <div class="card-img-overlay">
            <p class="card-title text-light fw-bolder fs-1 text-center pt-5">EXPLORE GEOPARK CILETUH</p>
            <a href="#" class="btn btn-sm btn-center bg-geo-success text-light btn-success mt-auto m-auto">Lihat Semua Virtual Tour</a>
          </div>
        </div>
      </div>
    </section>
    
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
</body>

</html>