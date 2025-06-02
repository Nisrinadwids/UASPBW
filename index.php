<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous"></script>
    <title>CuyPerpus.com</title>
    <link rel="icon" href="assets/logoUrl.png" type="image/png">
  </head>
  <style>
  
  body {
    font-family: 'Poppins', sans-serif;
    background-color: #f8f9fb;
  }


  .navbar {
    background-color: #ffffff !important;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    padding: 1rem 2rem;
  }

  .navbar .nav-link {
    color: #333;
    font-weight: 500;
    margin-right: 1rem;
    transition: all 0.3s;
  }

  .navbar .nav-link:hover {
    color: #6C63FF;
  }

  .navbar img {
    border-radius: 10px;
  }

  
  #homeSection h2 {
    font-size: 3rem;
  }

  #homeSection .btn {
    background-color: #6C63FF;
    border: none;
    color: white;
    opacity: 0.9;
  }

  #homeSection .btn:hover {
    opacity: 1;
  }

  
  .about-section {
    background: linear-gradient(135deg, #9db6dc 0%, #d2e1f5 100%);
  }

  .about-section h2 {
    font-size: 2.4rem;
    line-height: 1.3;
  }

  .about-section p {
    font-size: 1rem;
    line-height: 1.6;
  }

  
  .about-section .bg-white {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .about-section .bg-white:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 24px rgba(0, 0, 0, 0.1);
  }

  
  footer {
    background-color: #1f1f1f;
  }

  footer h3 {
    font-weight: 600;
  }

  footer p {
    font-size: 18px;
    color: #ccc;
  }

  footer img {
    border-radius: 12px;
  }

  .contact-info {
    display: flex;
    gap: 20px; 
    flex wrap: wrap;
    align-items: center:
  }

  .contact-info .contact-item {
    display: flex;
    align-items: center; 
    gap: 5px;
    flex-wrap: nowrap;
  }

  .contact-item a {
  color: #4f8cff;
  text-decoration: none;
  white-space: nowrap; 
}

@media (max-width: 768px) {
  .contact-info {
    flex-direction: column;
    gap: 20px;
    align-items: flex-start; 
  }

.contact-info .contact-item {
    flex-direction: row;
    flex-wrap: wrap;
  }

  .contact-item a {
    white-space: normal; 
  }
}

</style>

  <body>
    
   <nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary shadow-sm justify-content-between">
  <div class="container-fluid">
    <img src="assets/logoan.png" alt="logo" width="80px">
    <a href="sign/link_login.html" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#homeSection">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#aboutSection">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#footer">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

  <section id="homeSection" class="p-5">
  <div class="container">
    <div class="row align-items-center">
      
      <div class="col-lg-6">
        <h2 class="fw-bold text-success display-5">
          <span class="text-primary">PERPUS</span>BANG
        </h2>
        <p class="fs-5 text-muted mb-4" style="font-family: 'Poppins', sans-serif;">
          "Temukan Dunia Pengetahuan di Ujung Jari Anda:<br>
          Perpustakaan Online <span class="fw-bold">PerpusBang</span> Membawa Anda ke Dunia Buku Digital."
        </p>
        <a class="btn btn-primary btn-lg rounded-pill" href="sign/link_login.html" style="opacity:0.5; backdrop-filter: blur(5px);">Mulai!</a>

      </div>
      
      <div class="col-lg-6 text-center">
        <img src="assets/buku22.png" class="img-fluid rounded-4 " style="max-width: 120%;" alt="Illustration">
      </div>
      
    </div>
  </div>
</section>

    
  <section id="aboutSection" class="about-section p-5" style="background-color: #9db6dc; min-height: 80vh;">
  <div class="container">
    <div class="row align-items-stretch">
      
      <div class="col-lg-6 d-flex">
        <div class="bg-white p-4 rounded-4 shadow-sm w-100">
          <h6 class="text-warning fw-semibold mb-2">How it started</h6>
          <h2 class="fw-bold mb-4" style="font-size: 2.5rem;">
            Our Dream is <br><span class="text-primary">Global Learning Transformation</span>
          </h2>
          <p class="text-muted " style="font-family: 'Poppins', sans-serif;">
            PerpusBang adalah platform digital untuk menghadirkan akses pembelajaran dan pengetahuan tanpa batas kepada masyarakat, dengan semangat kolaborasi dan transformasi digital yang inklusif dan progresif.
          </p>
          <p class="text-muted mb-0 " style="font-family: 'Poppins', sans-serif;">
            Kami percaya bahwa pengetahuan adalah kekuatan, dan setiap individu berhak mendapatkan akses ke sumber daya pendidikan yang berkualitas. Inilah sebabnya kami menciptakan aplikasi perpustakaan online kami, yang dirancang untuk menjadi pintu gerbang ke ribuan buku, artikel, dan sumber daya belajar lainnya, semuanya hanya dalam genggaman Anda.
          </p>
        </div>
      </div>

      
      <div class="col-lg-6 d-flex flex-column justify-content-between">
        <img src="assets/Study.jpg" alt="Team Photo" class="img-fluid rounded-4 shadow mb-4" style="max-width: 100%;">
        <div class="bg-white p-4 rounded-4 shadow-sm">
          <h5 class="text-primary fw-semibold" style="font-family: 'Poppins', sans-serif;"> Dikembangkan Oleh:</h5>
          <p class="mb-0 " style="font-family: 'Poppins', sans-serif;">
            - Fauzan Farhan Gayo (2310631250056)<br>
            - Nisrina Dwi Devina Sari (2310631250071)<br> 
            - Freidrick Albert Pakpahan (2310631250058)<br>
            - Dwi Ayu Meilinda Maharani (2310631250047)<br>
             - Muhammad Fadllan Ziadh R (2010631250066)<br>
            - Rizka Amaniah (2310631250076)
           
          </p>
        </div>
      </div>
    </div>

   
    <div class="row text-center justify-content-center pt-5 mt-4">
      <div class="col-md-6 col-lg-3 mb-4">
        <div class="bg-white p-4 rounded-4 shadow-sm h-100">
          <h4 class="fw-bold text-primary mb-2" style="font-family: 'Poppins', sans-serif;">📘</h4>
          <p class="mb-0">Meningkatkan literasi digital masyarakat.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 mb-4">
        <div class="bg-white p-4 rounded-4 shadow-sm h-100">
          <h4 class="fw-bold text-primary mb-2" style="font-family: 'Poppins', sans-serif;">🌐</h4>
          <p class="mb-0">Menyediakan akses buku dan materi pembelajaran secara online.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 mb-4">
        <div class="bg-white p-4 rounded-4 shadow-sm h-100">
          <h4 class="fw-bold text-primary mb-2" style="font-family: 'Poppins', sans-serif;">📖</h4>
          <p class="mb-0">Mendorong kebiasaan membaca di kalangan pelajar dan umum.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 mb-4">
        <div class="bg-white p-4 rounded-4 shadow-sm h-100">
          <h4 class="fw-bold text-primary mb-2" style="font-family: 'Poppins', sans-serif;">🚀</h4>
          <p class="mb-0">Membangun ekosistem belajar yang inklusif dan kolaboratif.</p>
        </div>
      </div>
    </div>
  </div>
</section>


    
    <footer id="footer" class="p-3 bg-dark">
  <div class="row">
    <div class="col">
      <img src="assets/logoan.png" width="120px" class="mb-3">
    </div>
  </div>
  <div class="row p-3">
    <div class="col-12 col-md-6 mt-3">
      <h3 class="text-light fs-5">Kontak Kami</h3>
      <div class="contact-info">
        <div class="contact-item">
          <p class="mb-0 text-secondary me-2">Email:</p> <a href="mailto:perpusbang@gmail.com" target="_blank">
            <i class="fas fa-envelope"></i> perpusbang@gmail.com
          </a>
        </div>
        <div class="contact-item">
          <p class="mb-0 text-secondary me-2">Instagram:</p> <a href="https://www.instagram.com/perpusbang.id" target="_blank">
            <i class="fab fa-instagram"></i> @perpusbang.id
          </a>
        </div>
        <div class="contact-item">
          <p class="mb-0 text-secondary me-2">Alamat:</p> <a href="https://g.co/kgs/jSaLoHd" target="_blank" > 
           <i class="fas fa-map-marker-alt"></i> Fasilkom Unsika
          </a>
        </div>
      </div>
    </div>
    <hr class="text-light mt-3">
    <div class="d-flex justify-content-center align-items-center mt-3">
      <p class="text-light">Made with ❤️ Kelompok 1  2025</p>
    </div>
  </div>
</footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>