<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Law Growth 360</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<script>
  if (!window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    document.documentElement.classList.add('lg360-anim-pending');
  }
</script>

  <!-- Header -->
  <header class="lg360-header">
    <nav class="navbar navbar-expand-lg lg360-navbar">
      <div class="container lg360-wide-container">
        <a class="navbar-brand lg360-brand" href="index.php">
          <img src="assets/images/Logos-11.png" alt="Law Growth 360 Logo">
        </a>

        <button class="navbar-toggler lg360-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#lg360Menu" aria-controls="lg360Menu" aria-expanded="false" aria-label="Toggle navigation">
          <span></span><span></span><span></span>
        </button>

        <div class="collapse navbar-collapse lg360-menu" id="lg360Menu">
          <ul class="navbar-nav ms-auto align-items-lg-center lg360-nav-list">

  <li class="nav-item">
    <a class="nav-link <?php echo activeMenu('index.php'); ?>" href="index.php">Home</a>
  </li>

  <li class="nav-item">
    <a class="nav-link <?php echo activeMenu('about.php'); ?>" href="about.php">About Us</a>
  </li>

  <li class="nav-item">
    <a class="nav-link <?php echo activeMenu('services.php'); ?>" href="services.php">Services</a>
  </li>

  <li class="nav-item">
    <a class="nav-link <?php echo activeMenu('practice.php'); ?>" href="practice.php">Practice Areas</a>
  </li>

  <li class="nav-item">
    <a class="nav-link <?php echo activeMenu('contact.php'); ?>" href="contact.php">Contact Us</a>
  </li>

</ul>
          <a href="#" class="btn lg360-btn lg360-btn-sm ms-lg-3" data-bs-toggle="modal" data-bs-target="#strategyCallModal">Book a Strategy Call</a>
        </div>
      </div>
    </nav>
  </header>