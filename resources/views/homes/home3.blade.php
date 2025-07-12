<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>IC Estudio Arquitectura - Home 3</title>
  <!-- Bootstrap CSS v5.3 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    /* Creative Theme Updated to Navy Blue */
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #f0f0f0;
      color: #333;
      overflow-x: hidden;
    }
    nav {
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(10px);
    }
    .navbar-brand { font-weight: 700; color: #1b263b !important; }
    .nav-link { color: #555 !important; }
    .nav-link:hover, .nav-link.active { color: #1b263b !important; }
    /* Hero */
    .hero {
      background: linear-gradient(135deg, #1b263b 0%, #415a77 100%);
      height: 90vh;
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: #fff;
    }
    .hero::before {
      content: '';
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: url('https://source.unsplash.com/1600x900/?architecture,design') center/cover no-repeat;
      opacity: 0.3;
    }
    .hero-content {
      position: relative;
      z-index: 1;
      max-width: 700px;
    }
    .hero h1 { font-size: 3rem; font-weight: 800; }
    .hero p { font-size: 1.2rem; margin-bottom: 2rem; }
    .btn-gradient {
      background: linear-gradient(45deg, #1b263b, #415a77);
      border: none;
      color: #fff;
    }
    /* Features */
    #features { padding: 5rem 1rem; }
    .feature-icon {
      font-size: 2rem;
      color: #1b263b;
      margin-bottom: 1rem;
    }
    /* Projects */
    #projects { background: #fff; padding: 5rem 1rem; }
    .project-card { border: none; overflow: hidden; transition: transform .3s; }
    .project-card:hover { transform: scale(1.05); }
    .project-card img { height: 200px; object-fit: cover; }
    /* Testimonials */
    #testimonials { background: #f9f9ff; padding: 5rem 1rem; }
    .testimonial { position: relative; padding: 2rem; background: #fff; border-radius: .5rem; }
    .testimonial::before {
      content: '\201C';
      font-size: 4rem;
      position: absolute;
      top: -10px; left: 20px;
      color: #1b263b;
      opacity: .2;
    }
    /* Contact CTA */
    #cta { background: #1b263b; color: #fff; padding: 5rem 1rem; text-align: center; }
    /* Footer */
    footer { background: #2d2d2d; color: #ccc; padding: 2rem 1rem; }
    footer a { color: #bbb; }
    footer a:hover { color: #fff; }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">IC Estudio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav3" aria-controls="nav3" aria-expanded="false">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="nav3">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home 1</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/home2') }}">Home 2</a></li>
          <li class="nav-item"><a class="nav-link active" href="{{ url('/home3') }}">Home 3</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-content animate" style="animation: fadeInUp 1s ease forwards;">
      <h1>Espacios<br>que Inspiran</h1>
      <p>Innovación y creatividad fusionadas en cada proyecto.</p>
      <a href="#features" class="btn btn-gradient btn-lg">Conócenos</a>
    </div>
  </section>

  <!-- Features Section -->
  <section id="features">
    <div class="container">
      <div class="row text-center mb-5">
        <div class="col">
          <h2>Lo que Ofrecemos</h2>
          <p class="text-muted">Nuestro enfoque multidisciplinario para cada reto.</p>
        </div>
      </div>
      <div class="row g-4">
        <div class="col-md-4 text-center">
          <i class="bi bi-lightbulb feature-icon"></i>
          <h5>Conceptualización</h5>
          <p>Desarrollamos ideas únicas que reflejan tu esencia.</p>
        </div>
        <div class="col-md-4 text-center">
          <i class="bi bi-pencil-square feature-icon"></i>
          <h5>Diseño Personalizado</h5>
          <p>Espacios a medida, optimizados para funcionalidad y estética.</p>
        </div>
        <div class="col-md-4 text-center">
          <i class="bi bi-bricks feature-icon"></i>
          <h5>Ejecución Precisa</h5>
          <p>Supervisión detallada para resultados de alta calidad.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Projects Section -->
  <section id="projects">
    <div class="container">
      <div class="row text-center mb-5">
        <div class="col">
          <h2>Proyectos Destacados</h2>
        </div>
      </div>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card project-card">
            <img src="https://source.unsplash.com/400x300/?villa,architecture" alt="Proyecto 1">
            <div class="card-body">
              <h5 class="card-title">Villa de Lujo</h5>
              <p>Diseño sofisticado en entorno natural.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card project-card">
            <img src="https://source.unsplash.com/400x300/?studio,architecture" alt="Proyecto 2">
            <div class="card-body">
              <h5 class="card-title">Estudio Creativo</h5>
              <p>Espacio inspirador para trabajo colaborativo.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card project-card">
            <img src="https://source.unsplash.com/400x300/?urban,building" alt="Proyecto 3">
            <div class="card-body">
              <h5 class="card-title">Edificio Urbano</h5>
              <p>Arquitectura contemporánea en ciudad vibrante.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section id="testimonials">
    <div class="container">
      <div class="row text-center mb-5">
        <div class="col">
          <h2>Testimonios</h2>
        </div>
      </div>
      <div class="row g-4 justify-content-center">
        <div class="col-md-6">
          <div class="testimonial">
            <p>El equipo de IC Estudio transformó nuestro hogar en un espacio de ensueño. ¡Profesionalismo total!</p>
            <footer class="blockquote-footer mt-3">María López, Cliente Residencial</footer>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section id="cta">
    <div class="container animate" style="animation: fadeInUp 1s ease forwards;">
      <h2>¿Te gustaría trabajar con nosotros?</h2>
      <p>Contacta a nuestro equipo y empecemos tu proyecto.</p>
      <a href="#" class="btn btn-light btn-lg">Contáctanos</a>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container text-center">
      <p>&copy; {{ date('Y') }} IC Estudio Arquitectura. Todos los derechos reservados.</p>
      <div>
        <a href="#" class="me-3"><i class="bi bi-facebook"></i></a>
        <a href="#" class="me-3"><i class="bi bi-instagram"></i></a>
        <a href="#"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>
  </footer>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
