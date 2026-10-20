<?php
$page_title = "Home - Law Growth 360";
?>

<title><?php echo $page_title; ?></title>
<?php
$currentPage = basename($_SERVER['PHP_SELF']);
if ($currentPage == "" || $currentPage == "index") {
  $currentPage = "index.php";
}

function activeMenu($pageName) {
  global $currentPage;
  return $currentPage === $pageName ? 'active' : '';
}
?>
<?php include('include/header.php') ?>




<main>

  <!-- HERO SECTION - header removed as requested -->
  <section class="lg-hero">
    <div class="lg-hero-bg">
        <div class="lg-container">

            <div class="lg-hero-content">
                <div class="lg-hero-copy">
                    <h1>
                        GROWTH SYSTEMS FOR
                        <span>MODERN LAW FIRMS</span>
                    </h1>

                    <p class="lg-hero-lead">
                        Get more qualified leads. Convert more consultations.
                        Automate your intake. Grow your law firm with strategy,
                        technology, and execution.
                    </p>

                    <p class="lg-hero-text">
                        Law Growth 360 helps attorneys and law firms build complete
                        growth systems using websites, CRM, automation, AI intake,
                        follow-up workflows, reputation management, paid ads, SEO,
                        and client communication tools.
                    </p>

                    <div class="lg-hero-actions">
                        <a href="#" class="lg-btn lg-btn-gold" data-bs-toggle="modal" data-bs-target="#strategyCallModal">
                            BOOK A STRATEGY CALL
                        </a>

                        <a href="#" class="lg-btn lg-btn-outline">
                            SEE LAW FIRM SOLUTIONS →
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

  <!-- SERVICES OVERVIEW -->
  <section class="lg-service-section">
    <div class="lg-container">
      <div class="lg-section-title text-center">
        <h2>Built for Law Firms that Want Predictable Growth</h2>
        <p>
          Whether you are a solo attorney, small firm, or growing multi-practice law office,<br class="d-none d-md-block">
          we help you create the systems needed to attract, manage, and convert more clients.
        </p>
      </div>

      <div class="row g-0 lg-service-grid">
        <div class="col-6 col-md-4 col-xl-2">
          <div class="lg-service-card">
            <div class="lg-service-icon"><i class="bi bi-magnet-fill"></i></div>
            <h3>Lead Generation</h3>
            <p>Google Ads, Local SEO, landing pages, social media, and referral campaigns.</p>
          </div>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
          <div class="lg-service-card">
            <div class="lg-service-icon"><i class="bi bi-clipboard2-check"></i></div>
            <h3>Client Intake Automation</h3>
            <p>Automated forms, text/email follow-up, missed-call response, and consultation booking.</p>
          </div>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
          <div class="lg-service-card">
            <div class="lg-service-icon"><i class="bi bi-pc-display-horizontal"></i></div>
            <h3>CRM for Law Firms</h3>
            <p>Track every lead from first contact to signed client.</p>
          </div>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
          <div class="lg-service-card">
            <div class="lg-service-icon"><i class="bi bi-robot"></i></div>
            <h3>AI Receptionist & Follow-Up</h3>
            <p>Respond faster, qualify leads, and reduce lost opportunities.</p>
          </div>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
          <div class="lg-service-card">
            <div class="lg-service-icon"><i class="bi bi-chat-square-text"></i></div>
            <h3>Reputation Management</h3>
            <p>Review requests, Google Business Profile growth, and trust-building campaigns.</p>
          </div>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
          <div class="lg-service-card lg-no-border">
            <div class="lg-service-icon"><i class="bi bi-window-stack"></i></div>
            <h3>Website & Landing Pages</h3>
            <p>Professional, conversion-focused law firm websites.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PRACTICE AREAS -->
  <section class="lg-practice-section">
    <div class="lg-container">
      <h2 class="text-center">Practice Areas We Support</h2>
      <div class="lg-practice-grid">
        <div class="lg-practice-item"><i class="bi bi-person-badge"></i><span>Personal<br>Injury</span></div>
        <div class="lg-practice-item"><i class="bi bi-globe2"></i><span>Immigration<br>Law</span></div>
        <div class="lg-practice-item"><i class="bi bi-people"></i><span>Family<br>Law</span></div>
        <div class="lg-practice-item"><i class="fa-solid fa-scale-balanced"></i><span>Criminal<br>Defense</span></div>
        <div class="lg-practice-item"><i class="bi bi-file-earmark-text"></i><span>Estate<br>Planning</span></div>
        <div class="lg-practice-item"><i class="bi bi-house-door"></i><span>Real Estate<br>Law</span></div>
        <div class="lg-practice-item"><i class="bi bi-briefcase"></i><span>Business<br>Law</span></div>
        <div class="lg-practice-item"><i class="bi bi-diagram-3"></i><span>Employment<br>Law</span></div>
        <div class="lg-practice-item"><i class="bi bi-bank"></i><span>Bankruptcy<br>Law</span></div>
        <div class="lg-practice-item"><i class="bi bi-hammer"></i><span>Civil<br>Litigation</span></div>
      </div>
    </div>
  </section>

  <!-- PROCESS -->
 <section class="lg360-system-flow-section">
    <div class="container lg360-system-flow-container">

      <div class="lg360-system-flow-heading-wrap">
        <h2 class="lg360-system-flow-heading">
          The Law Growth <span>360</span> System
        </h2>
      </div>

      <div class="lg360-system-flow-timeline">
        <span class="lg360-system-flow-line" aria-hidden="true"></span>

        <!-- Step 01 -->
        <div class="lg360-system-flow-item">
          <div class="lg360-system-icon-box">
            <span class="lg360-system-step-badge">1</span>
            <i class="bi bi-megaphone"></i>
          </div>
          <h3 class="lg360-system-flow-title">Attract</h3>
          <p class="lg360-system-flow-text">
            We build traffic through SEO, ads, content, and local visibility.
          </p>
        </div>

        <!-- Step 02 -->
        <div class="lg360-system-flow-item">
          <div class="lg360-system-icon-box">
            <span class="lg360-system-step-badge">2</span>
            <i class="bi bi-funnel"></i>
          </div>
          <h3 class="lg360-system-flow-title">Capture</h3>
          <p class="lg360-system-flow-text">
            Every inquiry is routed into your CRM with tracking and automation.
          </p>
        </div>

        <!-- Step 03 -->
        <div class="lg360-system-flow-item">
          <div class="lg360-system-icon-box">
            <span class="lg360-system-step-badge">3</span>
            <i class="bi bi-people"></i>
          </div>
          <h3 class="lg360-system-flow-title">Convert</h3>
          <p class="lg360-system-flow-text">
            Follow-up workflows help turn leads into booked consultations.
          </p>
        </div>

        <!-- Step 04 -->
        <div class="lg360-system-flow-item">
          <div class="lg360-system-icon-box">
            <span class="lg360-system-step-badge">4</span>
            <i class="bi bi-chat-dots"></i>
          </div>
          <h3 class="lg360-system-flow-title">Retain</h3>
          <p class="lg360-system-flow-text">
            Client communication, reminders, and review requests keep your firm organized.
          </p>
        </div>

        <!-- Step 05 -->
        <div class="lg360-system-flow-item">
          <div class="lg360-system-icon-box">
            <span class="lg360-system-step-badge">5</span>
            <i class="bi bi-bar-chart-line"></i>
          </div>
          <h3 class="lg360-system-flow-title">Scale</h3>
          <p class="lg360-system-flow-text">
            Dashboards and reporting help you see what is working and where to grow next.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- FEATURE PANELS -->
<section class="lg360-lead-choice-section">
  <div class="container lg360-container">
    <div class="row g-3">

      <!-- Left Card -->
      <div class="col-lg-6">
        <div class="lg360-lead-card lg360-dark-card">
          <div class="lg360-lead-img">
            <img src="assets/images/after-hours-man.png" alt="Law firm lead follow up">
          </div>

          <div class="lg360-lead-content">
            <h2>STOP LOSING LEADS <br>AFTER HOURS</h2>
            <p>
              Many legal leads choose the first firm that responds. Law Growth 360 helps your firm reply instantly, even when your team is busy or unavailable.
            </p>

            <ul>
              <li><span>✓</span> Missed Call Text Back</li>
              <li><span>✓</span> AI Chat &amp; Intake</li>
              <li><span>✓</span> Online Consultation Booking</li>
              <li><span>✓</span> Automated Follow-Up</li>
              <li><span>✓</span> Lead Source Tracking</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Right Card -->
      <div class="col-lg-6">
        <div class="lg360-lead-card lg360-light-card">
          <div class="lg360-why-content">
            <h2>WHY LAW FIRMS CHOOSE <br>LAW GROWTH 360</h2>

            <ul>
              <li><span>✓</span> Built specifically for legal service businesses</li>
              <li><span>✓</span> Combines marketing, CRM, automation, and strategy</li>
              <li><span>✓</span> Improves response time and lead conversion</li>
              <li><span>✓</span> Creates visibility into your pipeline</li>
              <li><span>✓</span> Reduces manual admin work</li>
              <li><span>✓</span> Supports growth without adding unnecessary staff</li>
            </ul>
          </div>

          <div class="lg360-court-img">
            <img src="assets/images/court-columns.png" alt="Court building">
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


  <!-- CTA SECTION - footer removed as requested -->
  <section class="lg-cta-section">
    <div class="lg-container">
      <div class="lg-cta-box">
        <div class="lg-cta-icon"><i class="bi bi-calendar2-week"></i></div>
        <div class="lg-cta-text">
          <h2>Ready to Grow Your Law Firm?</h2>
          <p>Let’s build a system that helps your firm attract better leads, respond faster, and convert more consultations.</p>
        </div>
        <div class="lg-cta-actions">
          <a href="#" class="lg-btn lg-btn-gold">Schedule a Free Growth Audit <i class="bi bi-arrow-right"></i></a>
          <a href="#" class="lg-btn lg-btn-dark">Get Started <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </section>

</main>


<?php include('include/footer.php') ?>