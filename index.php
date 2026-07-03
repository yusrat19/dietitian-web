<?php
$pageTitle = "Healthy Life Nutrition";
include 'includes/header.php';
?>

<section class="hero">
  <div class="hero-grid">
    <div>
      <span class="eyebrow">Registered Nutrition Practice</span>
      <h1>Nutrition that fits your life</h1>
      <p class="lede">
        Professional nutrition counselling, personalized meal planning, weight
        management, diabetes nutrition, sports nutrition, and healthy
        lifestyle coaching — built around your routine, not a generic plan.
      </p>
      <div class="hero-actions">
        <a href="book-appointment.php" class="btn btn-primary">Book an Appointment</a>
        <a href="order-product.php" class="btn btn-secondary">Order Our Products</a>
      </div>
    </div>

    <div class="plate-wrap" aria-hidden="true">
      <svg viewBox="0 0 200 200">
        <!-- vegetables: half the plate -->
        <circle cx="100" cy="100" r="73" class="plate-ring veg plate-draw"
                pathLength="460" stroke-dasharray="230 230" stroke-dashoffset="0"
                transform="rotate(-90 100 100)" />
        <!-- grains: a quarter -->
        <circle cx="100" cy="100" r="73" class="plate-ring grain plate-draw"
                pathLength="460" stroke-dasharray="115 345" stroke-dashoffset="-230"
                transform="rotate(-90 100 100)" />
        <!-- protein: a quarter -->
        <circle cx="100" cy="100" r="73" class="plate-ring protein plate-draw"
                pathLength="460" stroke-dasharray="115 345" stroke-dashoffset="-345"
                transform="rotate(-90 100 100)" />
        <text x="100" y="96" text-anchor="middle" class="plate-center">Balanced</text>
        <text x="100" y="110" text-anchor="middle" class="plate-center">Plate</text>
      </svg>
    </div>
  </div>
</section>

<section class="services" id="services">
  <div class="section-head">
    <span class="eyebrow">What we offer</span>
    <h2>Our Services</h2>
  </div>

  <div class="service-grid">

    <div class="service-card">
      <svg class="service-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="5" y="3" width="14" height="18" rx="2"/><path d="M9 3v2h6V3M8 9h8M8 13h8M8 17h5"/></svg>
      <h3>Individual Nutrition Counselling</h3>
      <p>One-on-one sessions to understand your habits, goals, and health history.</p>
    </div>

    <div class="service-card">
      <svg class="service-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="12" cy="13" r="7"/><path d="M9 3h6M12 9v4l3 2"/></svg>
      <h3>Weight Loss Programs</h3>
      <p>Structured, sustainable plans built around your schedule and preferences.</p>
    </div>

    <div class="service-card">
      <svg class="service-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M4 21V9l8-6 8 6v12"/><path d="M9 21v-6h6v6"/></svg>
      <h3>Corporate Wellness</h3>
      <p>Nutrition programs designed to support healthier, more energized teams.</p>
    </div>

    <div class="service-card">
      <svg class="service-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M4 4h11a2 2 0 0 1 2 2v14H6a2 2 0 0 1-2-2V4Z"/><path d="M8 8h6M8 12h6"/></svg>
      <h3>Meal Planning &amp; Recipe Development</h3>
      <p>Practical, varied meal plans and recipes tailored to your goals.</p>
    </div>

    <div class="service-card">
      <svg class="service-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="3" y="4" width="18" height="12" rx="1"/><path d="M8 20h8M12 16v4"/></svg>
      <h3>Nutrition Workshops &amp; Seminars</h3>
      <p>Engaging group sessions on nutrition science and everyday healthy eating.</p>
    </div>

    <div class="service-card">
      <svg class="service-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M12 21s-7-4.35-9.5-8.5C.6 8.6 3 5 6.5 5 9 5 11 7 12 8.5 13 7 15 5 17.5 5 21 5 23.4 8.6 21.5 12.5 19 16.65 12 21 12 21Z"/></svg>
      <h3>Healthy Lifestyle Coaching</h3>
      <p>Ongoing support to build habits around food, movement, sleep, and stress.</p>
    </div>

    <div class="service-card">
      <svg class="service-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M12 3c4 3 6 6.5 6 10a6 6 0 0 1-12 0c0-3.5 2-7 6-10Z"/><path d="M12 13v6"/></svg>
      <h3>Nutritional Supplement Guidance</h3>
      <p>Evidence-based guidance on if and when supplements make sense for you.</p>
    </div>

    <div class="service-card">
      <svg class="service-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="17" cy="5" r="2"/><path d="m6 20 4-6 3 2 3-5M4 20h4M4 9l4 2 5-4"/></svg>
      <h3>Sports Nutrition</h3>
      <p>Fueling strategies to support training, performance, and recovery.</p>
    </div>

    <div class="service-card">
      <svg class="service-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="4" y="4" width="16" height="16" rx="3"/><path d="M8 12h8M12 8v8"/></svg>
      <h3>Nutrition Training Sessions</h3>
      <p>Practical coaching to improve your nutrition habits and performance.</p>
    </div>

  </div>
</section>

<section class="why" id="why">
  <div>
    <span class="eyebrow">Why work with us</span>
    <h2>A plan you can actually follow</h2>
    <p class="lede" style="margin-bottom:0;">
      No fad diets or one-size-fits-all templates — just clear guidance that
      fits your routine, your budget, and your goals.
    </p>
  </div>

  <ul class="why-list">
    <li>
      <span class="mark">—</span>
      <div>
        <h4>Personalized, not generic</h4>
        <p>Every plan starts with your history, habits, and preferences, not a template.</p>
      </div>
    </li>
    <li>
      <span class="mark">—</span>
      <div>
        <h4>Evidence-based guidance</h4>
        <p>Recommendations grounded in current nutrition science, explained clearly.</p>
      </div>
    </li>
    <li>
      <span class="mark">—</span>
      <div>
        <h4>Ongoing support</h4>
        <p>Regular check-ins to adjust your plan as your life and goals change.</p>
      </div>
    </li>
  </ul>
</section>

<section class="cta-band">
  <div class="container">
    <div>
      <h2>Ready to get started?</h2>
      <p>Book a session or reach out with any questions — we're happy to help.</p>
    </div>
    <div class="hero-actions">
      <a href="contact.php" class="btn btn-secondary" style="border-color:var(--paper); color:var(--paper);">Contact Us</a>
    </div>
  </div>
</section>

<?php
include 'includes/footer.php';
?>
