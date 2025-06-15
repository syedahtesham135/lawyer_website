<?php include 'connection.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Lawyer Website</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">LawyerFirm</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#lawyerNavbar"
        aria-controls="lawyerNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="lawyerNavbar">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Lawyers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Practice Areas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Book Appointment</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Case Studies</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-outline-light btn-sm ms-2" href="login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <img src="Lawyer-PNG-Background.png" alt="" style="width: 95%;">


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
<div class="container my-5">
  <h2 class="mb-4 text-center">Our Featured Lawyers</h2>
  <div class="row row-cols-1 row-cols-md-3 g-4">

    <!-- Lawyer Card 1 -->
    <div class="col">
      <div class="card h-100 shadow-sm">
        <img
          src="data:image/jpeg;base64,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"
          class="card-img-top" alt="Lawyer Photo">
        <div class="card-body">
          <h5 class="card-title">Adv. Sarah Malik</h5>
          <p class="card-text">Criminal Law Specialist with 10+ years of courtroom experience.</p>
        </div>
        <div class="card-footer bg-white">
          <a href="#" class="btn btn-outline-primary w-100">View Profile</a>
        </div>
      </div>
    </div>

    <!-- Lawyer Card 2 -->
    <div class="col">
      <div class="card h-100 shadow-sm">
        <img
          src="data:image/jpeg;base64,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"
          class="card-img-top" alt="Lawyer Photo">
        <div class="card-body">
          <h5 class="card-title">Adv. Ali Raza</h5>
          <p class="card-text">Civil & Property Disputes expert with deep legal insight.</p>
        </div>
        <div class="card-footer bg-white">
          <a href="#" class="btn btn-outline-primary w-100">View Profile</a>
        </div>
      </div>
    </div>

    <!-- Lawyer Card 3 -->
    <div class="col">
      <div class="card h-100 shadow-sm">
        <img
          src="data:image/jpeg;base64,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"
          class="card-img-top" alt="Lawyer Photo">
        <div class="card-body">
          <h5 class="card-title">Adv. Maria Khan</h5>
          <p class="card-text">Family & Divorce Lawyer with a compassionate approach to law.</p>
        </div>
        <div class="card-footer bg-white">
          <a href="#" class="btn btn-outline-primary w-100">View Profile</a>
        </div>

      </div>
      </div>
      <footer class="bg-dark col-md-12 text-light pt-5 pb-3">
        <div class="container">
          <div class="row">

            <!-- About -->
            <div class="col-md-4 mb-3">
              <h5>About Us</h5>
              <p>We are a trusted law firm dedicated to delivering expert legal advice and professional representation
                in all major areas of law.</p>
            </div>

            <!-- Quick Links -->
            <div class="col-md-4 mb-3">
              <h5>Quick Links</h5>
              <ul class="list-unstyled">
                <li><a href="#" class="text-light text-decoration-none">Home</a></li>
                <li><a href="#" class="text-light text-decoration-none">Our Lawyers</a></li>
                <li><a href="#" class="text-light text-decoration-none">Practice Areas</a></li>
                <li><a href="#" class="text-light text-decoration-none">Appointments</a></li>
                <li><a href="#" class="text-light text-decoration-none">Contact</a></li>
              </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-md-4 mb-3">
              <h5>Contact Us</h5>
              <p><i class="bi bi-geo-alt-fill me-2"></i>123 Justice Street, LawCity</p>
              <p><i class="bi bi-telephone-fill me-2"></i>+92 300 1234567</p>
              <p><i class="bi bi-envelope-fill me-2"></i>info@lawyerfirm.com</p>
              <div class="mt-3">
                <a href="#" class="text-light me-2"><i class="bi bi-facebook"></i></a>
                <a href="#" class="text-light me-2"><i class="bi bi-twitter"></i></a>
                <a href="#" class="text-light me-2"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>

          </div>
          <hr class="border-secondary">
          <div class="text-center">
            <p class="mb-0">&copy; 2025 LawyerFirm. All rights reserved.</p>
          </div>
        </div>
      </footer>


      </body>

</html>