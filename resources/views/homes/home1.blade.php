<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IC Estudio Arquitectura</title>
    <!-- Bootstrap CSS v5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        /* Custom Dark Theme */
        body {
            background-color: #121212;
            color: #e0e0e0;
        }
        .navbar, .footer {
            background-color: #1f1f1f;
        }
        .navbar .navbar-brand,
        .navbar .nav-link,
        .footer p,
        .footer a {
            color: #e0e0e0 !important;
        }
        .navbar .nav-link.active,
        .navbar .nav-link:hover,
        .footer a:hover {
            color: #bb86fc !important;
        }
        .btn-primary {
            background-color: #bb86fc;
            border-color: #bb86fc;
            transition: transform .2s;
        }
        .btn-primary:hover {
            background-color: #9a64d3;
            border-color: #9a64d3;
            transform: scale(1.05);
        }
        .card {
            background-color: #1e1e1e;
            border: none;
            transition: transform .3s, box-shadow .3s;
        }
        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.5);
        }
        .card-title {
            color: #bb86fc;
        }
        /* Hero Section */
        .hero {
            background: url('https://source.unsplash.com/1600x900/?architecture,dark') center/cover no-repeat;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }
        .hero::before {
            content: '';
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background: rgba(0,0,0,0.6);
        }
        .hero-content {
            position: relative;
            z-index: 1;
            text-align: center;
            max-width: 800px;
        }
        /* Animation */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate { opacity: 0; animation: fadeInUp 1s ease forwards; }
        /* Portfolio Section */
        .portfolio-card img {
            object-fit: cover;
            height: 200px;
        }
        /* CTA */
        .cta {
            background: #2c1a4b;
            text-align: center;
            padding: 4rem 1rem;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
      <div class="container">
        <a class="navbar-brand fw-bold" href="{{ url('/') }}">IC Estudio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link active" href="{{ url('/') }}">Home 1</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/home2') }}">Home 2</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/home3') }}">Home 3</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero">
      <div class="hero-content animate" style="animation-delay: 0.3s;">
        <h1 class="display-3 fw-bold text-light">IC Estudio Arquitectura</h1>
        <p class="lead text-light my-4">Transformamos espacios en experiencias inolvidables.</p>
        <a href="#services" class="btn btn-primary btn-lg">Explora Nuestros Servicios</a>
      </div>
    </header>

    <!-- Services Section -->
    <section id="services" class="py-5">
      <div class="container">
        <div class="row text-center mb-5">
          <div class="col">
            <h2 class="fw-bold animate" style="animation-delay: 0.5s;">Nuestros Servicios</h2>
            <p class="text-light">Soluciones arquitectónicas integrales adaptadas a tu visión.</p>
          </div>
        </div>
        <div class="row g-4">
          <div class="col-md-4 animate" style="animation-delay: 0.7s;">
            <div class="card h-100 shadow-sm">
              <div class="card-body text-center">
                <i class="bi bi-brush fs-1 mb-3 text-primary"></i>
                <h5 class="card-title">Diseño de Interiores</h5>
                <p class="card-text text-light">Ambientes únicos que combinan estética y funcionalidad.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 animate" style="animation-delay: 0.9s;">
            <div class="card h-100 shadow-sm">
              <div class="card-body text-center">
                <i class="bi bi-building fs-1 mb-3 text-primary"></i>
                <h5 class="card-title">Arquitectura Comercial</h5>
                <p class="card-text text-light">Espacios corporativos que potencian tu marca.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 animate" style="animation-delay: 1.1s;">
            <div class="card h-100 shadow-sm">
              <div class="card-body text-center">
                <i class="bi bi-house fs-1 mb-3 text-primary"></i>
                <h5 class="card-title">Renovación Urbana</h5>
                <p class="card-text text-light">Revitalizamos entornos para una mejor calidad de vida.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="py-5 bg-dark">
      <div class="container">
        <div class="row text-center mb-5">
          <div class="col">
            <h2 class="fw-bold text-light animate" style="animation-delay: 1.3s;">Proyectos Recientes</h2>
            <p class="text-light">Una muestra de nuestro trabajo más destacado.</p>
          </div>
        </div>
        <div class="row g-4">
          <div class="col-md-4 animate" style="animation-delay: 1.5s;">
            <div class="card portfolio-card overflow-hidden shadow-sm">
              <img src="https://source.unsplash.com/400x300/?modern,architecture" class="w-100" alt="Proyecto 1">
              <div class="card-body">
                <h5 class="card-title">Residencia Moderna</h5>
              </div>
            </div>
          </div>
          <div class="col-md-4 animate" style="animation-delay: 1.7s;">
            <div class="card portfolio-card overflow-hidden shadow-sm">
              <img src="https://source.unsplash.com/400x300/?office,architecture" class="w-100" alt="Proyecto 2">
              <div class="card-body">
                <h5 class="card-title">Oficinas Innovadoras</h5>
              </div>
            </div>
          </div>
          <div class="col-md-4 animate" style="animation-delay: 1.9s;">
            <div class="card portfolio-card overflow-hidden shadow-sm">
              <img src="https://source.unsplash.com/400x300/?urban,design" class="w-100" alt="Proyecto 3">
              <div class="card-body">
                <h5 class="card-title">Renovación Urbana</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Call to Action -->
    <section class="cta text-light">
      <div class="container animate" style="animation-delay: 2s;">
        <h2 class="fw-bold mb-3">¿Listo para tu próximo proyecto?</h2>
        <p class="mb-4">Contáctanos y hagamos realidad tu visión arquitectónica.</p>
        <a href="#contact" class="btn btn-lg btn-primary">Contáctanos</a>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer py-4 text-center">
      <div class="container">
        <p class="mb-1">&copy; {{ date('Y') }} IC Estudio Arquitectura. Todos los derechos reservados.</p>
        <div>
          <a href="#" class="me-3"><i class="bi bi-facebook fs-4"></i></a>
          <a href="#" class="me-3"><i class="bi bi-instagram fs-4"></i></a>
          <a href="#"><i class="bi bi-linkedin fs-4"></i></a>
        </div>
      </div>
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
