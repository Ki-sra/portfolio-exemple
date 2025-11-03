<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Developer Portfolio</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"/>
  <link rel="icon" type="image/png" href="favicon.png"/>
  <style>
    html, body {
      margin: 0;
      padding: 0;
      scroll-behavior: smooth;
      font-family: Arial, sans-serif;
      color: #fff;
      background: url('bg.jpg') no-repeat center center fixed;
      background-size: cover;
    }

    section {
      min-height: 69vh;
      padding: 60px 15px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .hero {
      background: rgba(0, 0, 0, 0.4);
      text-align: center;
      color: white;
    }

    .hero .hero-content {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      border-radius: 20px;
      padding: 40px;
      display: inline-block;
      max-width: 800px;
    }

    .progress {
      height: 20px;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 4px 12px rgba(0,0,0,0.3);
    }

    .social-icons {
      display: flex;
      justify-content: center;
      gap: 15px;
      margin-top: 20px;
    }

    .social-icon {
      color: #fff;
      font-size: 24px;
      transition: transform 0.3s, color 0.3s;
    }

    .social-icon:hover {
      transform: scale(1.2);
      color: #0d6efd;
    }

    footer {
      background-color: rgba(0, 0, 0, 0.7);
    }

    .blur-section {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      border-radius: 20px;
      padding: 40px;
      margin: 20px auto;
      width: 100%;
      max-width: 900px;
    }

    .navbar-modern {
      background: rgba(10, 10, 10, 0.9);
      backdrop-filter: blur(12px);
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.4);
      border-bottom: 1px solid rgba(255, 255, 255, 0.05);
      padding: 0.8rem 0;
    }

    .navbar-modern .navbar-brand {
      font-weight: 600;
      font-size: 1.7rem;
      color: #0dcaf0;
      letter-spacing: 1px;
    }

    .navbar-modern .nav-link {
      color: #f1f1f1;
      margin-left: 1rem;
      font-weight: 500;
      transition: all 0.3s ease;
    }

    .navbar-modern .nav-link:hover {
      color: #0dcaf0;
    }

    .btn-logout {
      background-color: transparent;
      color: #fff;
      border: 1px solid #ff4d4d;
      padding: 8px 16px;
      border-radius: 30px;
      font-weight: 500;
      transition: all 0.3s ease;
    }

    .btn-logout:hover {
      background-color: #ff4d4d;
      color: #fff;
      transform: scale(1.05);
    }

    @media (max-width: 768px) {
      .hero .hero-content {
        padding: 20px;
        font-size: 16px;
      }
    }

    /* Offset section for fixed navbar */
    #about {
      padding-top: 100px;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-modern fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Kisra</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
          <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
        <a href="logout.php" class="btn btn-logout ms-3">Logout</a>
      </div>
    </div>
  </nav>

  <!-- About + Hero Section (Merged) -->
  <section id="about" class="hero text-center text-light" data-aos="zoom-in">
    <div class="container">
      <div class="hero-content mx-auto">
        <h1>Hi, I'm Kisra 👋</h1>
        <p class="mb-4">
          A highly motivated and passionate web developer with strong expertise in HTML, CSS, JavaScript, and modern web frameworks. I love building clean, interactive, and user-friendly web experiences. Constantly exploring new tools and technologies to stay ahead of the curve.
        </p>
        <a href="#projects" class="btn btn-light">View My Work</a>

        <hr class="my-4" style="border-color: rgba(255,255,255,0.2);">

        <h2 class="mt-4">About Me</h2>
        <p>
          I'm a developer with a love for building clean, interactive web experiences. I enjoy working on creative solutions that blend design with functionality and thrive on challenges that help me grow.
        </p>
      </div>
    </div>
  </section>

  <!-- Skills Section -->
  <section id="skills" class="text-light text-center" data-aos="fade-up">
    <div class="container blur-section">
      <h2>Skills</h2>
      <div class="row">
        <div class="col-md-4">
          <i class="fab fa-html5 fa-3x"></i>
          <p>HTML</p>
          <div class="progress">
            <div class="progress-bar bg-success" style="width: 40%;">40%</div>
          </div>
        </div>
        <div class="col-md-4">
          <i class="fab fa-css3-alt fa-3x"></i>
          <p>CSS</p>
          <div class="progress">
            <div class="progress-bar bg-primary" style="width: 30%;">30%</div>
          </div>
        </div>
        <div class="col-md-4">
          <i class="fab fa-js fa-3x"></i>
          <p>JavaScript</p>
          <div class="progress">
            <div class="progress-bar bg-warning" style="width: 35%;">35%</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Projects Section -->
  <section id="projects" class="section container">
    <h2 class="text-center">Projects</h2>
    <div class="row">
      <div class="col-md-4" data-aos="fade-up">
        <div class="card">
          <img src="image/quiz.png" class="card-img-top" alt="Project 1">
          <div class="card-body">
            <h5 class="card-title">Project 1 Quiz</h5>
            <p class="card-text">A quiz about development.</p>
            <a href="http://kisra.byethost10.com/" class="btn btn-primary">View</a>
          </div>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-up">
        <div class="card">
          <img src="image/logg.png" class="card-img-top" alt="Project 2">
          <div class="card-body">
            <h5 class="card-title">log in page</h5>
            <p class="card-text">this web site with log in page using php</p>
            <a href="#" class="btn btn-primary">View</a>
          </div>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-up">
        <div class="card">
          <img src="image/store.png" class="card-img-top" alt="Project 3">
          <div class="card-body">
            <h5 class="card-title">Project 3</h5>
            <p class="card-text">store with promo code to apply</p>
            <a href="#" class="btn btn-primary">View</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact" class="text-light text-center">
    <div class="container blur-section">
      <h2>Contact Me</h2>
      <p>Email: kousrahamza82@gmail.com</p>
      <div class="social-icons">
        <a href="https://github.com/Ki-sra" class="social-icon"><i class="fab fa-github"></i></a>
        <a href="https://www.instagram.com/ki_sra/" class="social-icon"><i class="fab fa-instagram"></i></a>
        <a href="https://www.facebook.com/hamza.kisra.94" class="social-icon"><i class="fab fa-facebook"></i></a>
        <a href="https://x.com/999Kisra" class="social-icon"><i class="fab fa-twitter"></i></a>
        <a href="https://www.youtube.com/@kisra9996" class="social-icon"><i class="fab fa-youtube"></i></a>
      </div>
    </div>
  </section>

  <footer class="text-center py-3">
    <p>&copy; 2025 Kisra. All Rights Reserved.</p>
  </footer>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>AOS.init();</script>
</body>
</html>
