<?php
$page_title = "Practice Areas - Law Growth 360";
?>

<title><?php echo $page_title; ?></title>
<?php
$currentPage = basename($_SERVER['PHP_SELF']);
if ($currentPage == "" || $currentPage == "practice") {
  $currentPage = "practice.php";
}

function activeMenu($pageName) {
  global $currentPage;
  return $currentPage === $pageName ? 'active' : '';
}
?>
<?php include('include/header.php') ?>



<!-- Header intentionally removed as requested -->

  <main class="lg-pa-page">

    <!-- Practice Area Hero -->
    <section class="lg-pa-hero">
      <div class="lg-pa-hero-visual" aria-hidden="true"></div>
      <div class="lg-pa-hero-shade" aria-hidden="true"></div>

      <div class="lg-pa-container position-relative">
        <div class="row align-items-center min-vh-lg-hero">
          <div class="col-lg-7 col-xl-6">
            <div class="lg-pa-hero-content">
              <span class="lg-pa-eyebrow">Practice Areas</span>
              <h1>We Help Law Firms <span>Grow in Every Practice.</span></h1>
              <p class="lg-pa-hero-text">
                Law Growth 360 partners with attorneys and law firms across a wide range of practice areas. Our growth systems are tailored to attract the right clients, convert more consultations, and help your firm grow consistently.
              </p>

              <div class="lg-pa-proof-line">
                <span class="lg-pa-target-icon"><i class="bi bi-bullseye"></i></span>
                <span>Data-driven. Automation-powered. Results-focused.</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Practice Areas Cards -->
    <section class="lg-pa-cards-section">
      <div class="lg-pa-container">
        <div class="lg-pa-section-head text-center">
          <h2>Practice Areas We Support</h2>
          <span></span>
        </div>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-5 g-4 lg-pa-card-row">
          <div class="col">
            <article class="lg-pa-card h-100">
              <div class="lg-pa-icon-wrap">
                <i class="bi bi-person-lines-fill"></i>
              </div>
              <h3>Personal Injury</h3>
              <p>Attract high-quality injury cases and maximize consultations with proven marketing strategies.</p>
              <a href="#" class="lg-pa-link">Learn More <i class="bi bi-arrow-right"></i></a>
            </article>
          </div>

          <div class="col">
            <article class="lg-pa-card h-100">
              <div class="lg-pa-icon-wrap">
                <i class="bi bi-globe2"></i>
              </div>
              <h3>Immigration Law</h3>
              <p>Connect with individuals and families seeking immigration help through targeted campaigns.</p>
              <a href="#" class="lg-pa-link">Learn More <i class="bi bi-arrow-right"></i></a>
            </article>
          </div>

          <div class="col">
            <article class="lg-pa-card h-100">
              <div class="lg-pa-icon-wrap">
                <i class="bi bi-people"></i>
              </div>
              <h3>Family Law</h3>
              <p>Generate more family law leads and improve client intake with smart automation and follow-up.</p>
              <a href="#" class="lg-pa-link">Learn More <i class="bi bi-arrow-right"></i></a>
            </article>
          </div>

          <div class="col">
            <article class="lg-pa-card h-100">
              <div class="lg-pa-icon-wrap">
                <i class="bi bi-shield-check"></i>
              </div>
              <h3>Criminal Defense</h3>
              <p>Get found by the right clients when they need help most. We drive leads that convert into cases.</p>
              <a href="#" class="lg-pa-link">Learn More <i class="bi bi-arrow-right"></i></a>
            </article>
          </div>

          <div class="col">
            <article class="lg-pa-card h-100">
              <div class="lg-pa-icon-wrap">
                <i class="bi bi-file-earmark-text"></i>
              </div>
              <h3>Estate Planning</h3>
              <p>Build trust, educate your audience, and grow your estate planning practice with consistent leads.</p>
              <a href="#" class="lg-pa-link">Learn More <i class="bi bi-arrow-right"></i></a>
            </article>
          </div>

          <div class="col">
            <article class="lg-pa-card h-100">
              <div class="lg-pa-icon-wrap">
                <i class="bi bi-house-door"></i>
              </div>
              <h3>Real Estate Law</h3>
              <p>Attract buyers, sellers, investors, and businesses with targeted marketing and local visibility.</p>
              <a href="#" class="lg-pa-link">Learn More <i class="bi bi-arrow-right"></i></a>
            </article>
          </div>

          <div class="col">
            <article class="lg-pa-card h-100">
              <div class="lg-pa-icon-wrap">
                <i class="bi bi-briefcase"></i>
              </div>
              <h3>Business &amp; Corporate Law</h3>
              <p>Generate qualified leads for business formation, contracts, compliance, and more.</p>
              <a href="#" class="lg-pa-link">Learn More <i class="bi bi-arrow-right"></i></a>
            </article>
          </div>

          <div class="col">
            <article class="lg-pa-card h-100">
              <div class="lg-pa-icon-wrap">
                <i class="bi bi-person-badge"></i>
              </div>
              <h3>Employment Law</h3>
              <p>Reach employees and employers with strategies that drive consultations and case sign-ups.</p>
              <a href="#" class="lg-pa-link">Learn More <i class="bi bi-arrow-right"></i></a>
            </article>
          </div>

          <div class="col">
            <article class="lg-pa-card h-100">
              <div class="lg-pa-icon-wrap">
                <i class="bi bi-bank"></i>
              </div>
              <h3>Bankruptcy Law</h3>
              <p>Increase visibility and bring in more clients seeking debt relief with effective lead generation systems.</p>
              <a href="#" class="lg-pa-link">Learn More <i class="bi bi-arrow-right"></i></a>
            </article>
          </div>

          <div class="col">
            <article class="lg-pa-card h-100">
              <div class="lg-pa-icon-wrap">
                <i class="bi bi-columns-gap"></i>
              </div>
              <h3>Civil Litigation</h3>
              <p>Grow your litigation practice with high-intent leads and strong intake and follow-up processes.</p>
              <a href="#" class="lg-pa-link">Learn More <i class="bi bi-arrow-right"></i></a>
            </article>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Strip -->
    <section class="lg-pa-cta-section">
      <div class="lg-pa-container">
        <div class="lg-pa-cta-box">
          <div class="lg-pa-cta-left">
            <div class="lg-pa-cta-icon">
              <i class="bi bi-chat-left-text"></i>
            </div>
            <div>
              <h2>Don’t See Your Practice Area?</h2>
              <p>We work with law firms in many other practice areas. Let’s build a growth strategy tailored to your firm.</p>
            </div>
          </div>

          <div class="lg-pa-cta-action">
            <a href="#" class="lg-pa-btn" data-bs-toggle="modal" data-bs-target="#strategyCallModal">Book a Strategy Call <i class="bi bi-arrow-right"></i></a>
          </div>

          <div class="lg-pa-cta-phone">
            <i class="bi bi-telephone"></i>
            <div>
              <span>Or Call Us Directly</span>
              <strong>(866) 360-LAW1</strong>
            </div>
          </div>
        </div>
      </div>
    </section>



    <section class="lg360-powered-strip">
      <div class="container lg360-wide-container">
        <div class="row align-items-center g-4">
          <div class="col-lg-2 col-md-4">
            <img class="lg360-powered-logo" src="assets/images/Logos-12.png" alt="Powered by 360 Growth Lab">
          </div>
          <div class="col-lg-4 col-md-8">
            <p class="lg360-powered-text">Law Growth 360 is powered by the systems, technology, and expertise of 360 Growth Lab, a business growth and automation company helping organizations scale through strategy, marketing, and innovation.</p>
          </div>
          <div class="col-lg-6">
            <div class="row g-3 lg360-proof-row">
              <div class="col-6 col-md-3">
                <div class="lg360-proof-item">
                  <svg viewBox="0 0 48 48" fill="none"><circle cx="24" cy="24" r="17"></circle><path d="m16 24 5 5 12-13"></path></svg>
                  <span>Proven Growth<br>Frameworks</span>
                </div>
              </div>
              <div class="col-6 col-md-3">
                <div class="lg360-proof-item">
                  <svg viewBox="0 0 48 48" fill="none"><circle cx="24" cy="24" r="17"></circle><path d="M15 25h9l6-10M30 15h7v7"></path></svg>
                  <span>Advanced Automation<br>&amp; AI Solutions</span>
                </div>
              </div>
              <div class="col-6 col-md-3">
                <div class="lg360-proof-item">
                  <svg viewBox="0 0 48 48" fill="none"><path d="M24 5 39 12v10c0 10-6 18-15 21C15 40 9 32 9 22V12L24 5Z"></path><path d="m18 24 4 4 8-9"></path></svg>
                  <span>Reliable Technology<br>&amp; Data Security</span>
                </div>
              </div>
              <div class="col-6 col-md-3">
                <div class="lg360-proof-item">
                  <svg viewBox="0 0 48 48" fill="none"><path d="M8 38c12 0 16-8 16-18"></path><path d="M24 20c0 10 6 18 16 18"></path><path d="M12 32l-4 6 7-2M36 32l4 6-7-2M21 11l3-5 3 5"></path></svg>
                  <span>Scalable Systems<br>for Long-Term Success</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>


  <?php include('include/footer.php') ?>
