<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>IC Estudio Arquitectura - Home 2</title>
  <!-- Bootstrap CSS v5.3 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    /* White/Black Minimalist Theme */
    body { background-color: #ffffff; color: #000000; font-family: 'Segoe UI', sans-serif; }
    /* Navbar */
    .navbar { background-color: #ffffff; box-shadow: none; }
    .navbar-brand { font-weight: 600; color: #000 !important; }
    .nav-link { color: #000 !important; font-weight: 500; }
    .nav-link.active, .nav-link:hover { text-decoration: underline; }
    /* Buttons */
    .btn-outline-dark { border: 1px solid #000; color: #000; transition: background-color .3s, color .3s; }
    .btn-outline-dark:hover { background-color: #000; color: #fff; }
    /* Hero Section */
    .hero {
      position: relative;
      height: 80vh;
      background: url('https://source.unsplash.com/1600x900/?architecture,modern') center/cover no-repeat;
      filter: grayscale(100%);
    }
    .hero::before {
      content: '';
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0,0,0,0.4);
    }
    .hero-content {
      position: relative;
      z-index: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100%;
      text-align: center;
      color: #ffffff;
    }
    /* Section Titles */
    .section-title { font-size: 2.5rem; font-weight: 600; margin-bottom: 1rem; }
    /* Services Section */
    #services .card {
      background: none;
      border: none;
      border-bottom: 1px solid #e0e0e0;
      padding-bottom: 1rem;
      margin-bottom: 1rem;
      transition: border-color .3s;
    }
    #services .card:hover { border-color: #000; }
    #services .bi { font-size: 2rem; margin-bottom: .5rem; }
    /* Portfolio Section */
    #portfolio .card {
      border: none;
      box-shadow: 0 4px 8px rgba(0,0,0,0.05);
      transition: transform .3s;
    }
    #portfolio .card:hover { transform: translateY(-5px); }
    .placeholder-image {
      background-color: #f0f0f0;
      width: 100%;
      height: 0;
      padding-bottom: 75%; /* 4:3 ratio */
    }
    /* Footer */
    .footer { background-color: #f8f9fa; padding: 2rem 1rem; }
    .footer p { margin: 0; color: #555; }
    .footer a { color: #000; margin: 0 .5rem; }
    .footer a:hover { color: #555; }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">IC Estudio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav2">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav2">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home 1</a></li>
          <li class="nav-item"><a class="nav-link active" href="{{ url('/home2') }}">Home 2</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/home3') }}">Home 3</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <header class="hero">
    <div class="hero-content">
      <h1 class="display-4">IC Estudio Arquitectura</h1>
      <p class="lead mt-3">Minimalismo y sofisticación en cada proyecto.</p>
      <a href="#services" class="btn btn-outline-dark btn-lg mt-4">Ver Servicios</a>
    </div>
  </header>

  <!-- Services Section -->
  <section id="services" class="py-5 mt-5">
    <div class="container">
      <div class="row justify-content-center text-center mb-4">
        <div class="col-md-6">
          <h2 class="section-title">Nuestros Servicios</h2>
          <p>Soluciones arquitectónicas integrales adaptadas a tu visión.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="card-body text-center">
              <i class="bi bi-brush"></i>
              <h5 class="mt-3">Diseño de Interiores</h5>
              <p class="mt-2">Espacios únicos que equilibran forma y función.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body text-center">
              <i class="bi bi-building"></i>
              <h5 class="mt-3">Arquitectura Comercial</h5>
              <p class="mt-2">Entornos corporativos con impacto visual y eficiencia.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body text-center">
              <i class="bi bi-house"></i>
              <h5 class="mt-3">Renovación Urbana</h5>
              <p class="mt-2">Transformamos espacios públicos en lugares inolvidables.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Section -->
  <section id="portfolio" class="py-5">
    <div class="container">
      <div class="row justify-content-center text-center mb-4">
        <div class="col-md-6">
          <h2 class="section-title">Proyectos Recientes</h2>
        </div>
      </div>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card shadow-sm">
            <div class="placeholder-image"></div>
            <div class="card-body text-center">
              <h5 class="card-title">Residencia Moderna</h5>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow-sm">
            <div class="placeholder-image"></div>
            <div class="card-body text-center">
              <h5 class="card-title">Estudio Creativo</h5>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow-sm">
            <div class="placeholder-image"></div>
            <div class="card-body text-center">
              <h5 class="card-title">Edificio Urbano</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer text-center mt-5">
    <div class="container">
      <p>&copy; {{ date('Y') }} IC Estudio Arquitectura. Todos los derechos reservados.</p>
      <div>
        <a href="#"><i class="bi bi-facebook"></i></a>
        <a href="#" class="ms-3"><i class="bi bi-instagram"></i></a>
        <a href="#" class="ms-3"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>
  </footer>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
