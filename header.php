<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : 'Healthy Life Nutrition'; ?></title>
<meta name="description" content="Professional nutrition counselling, personalized meal planning, weight management, diabetes nutrition, sports nutrition, and healthy lifestyle coaching.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&family=Public+Sans:wght@400;500;600&family=IBM+Plex+Mono:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<header class="site-header">
  <nav class="nav">
    <a href="index.php" class="brand">
      <svg class="brand-mark" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <circle cx="16" cy="16" r="14" stroke="#4E6659" stroke-width="2"/>
        <path d="M16 6C16 6 10 11 10 17a6 6 0 0 0 12 0c0-6-6-11-6-11Z" fill="#E2934C"/>
      </svg>
      Healthy Life Nutrition
    </a>

    <ul class="nav-links">
      <li><a href="index.php#services">Services</a></li>
      <li><a href="index.php#why">Why Us</a></li>
      <li><a href="order-product.php">Order Products</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="book-appointment.php" class="nav-cta">Book an Appointment</a></li>
    </ul>

    <button class="nav-toggle" aria-label="Toggle menu" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>
  </nav>

  <div class="mobile-menu">
    <a href="index.php#services">Services</a>
    <a href="index.php#why">Why Us</a>
    <a href="order-product.php">Order Products</a>
    <a href="contact.php">Contact</a>
    <a href="book-appointment.php" class="nav-cta" style="text-align:center;">Book an Appointment</a>
  </div>
</header>
