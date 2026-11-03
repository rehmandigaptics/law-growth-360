<?php
$page_title = "Services - Law Growth 360";
?>

<?php
$currentPage = basename($_SERVER['PHP_SELF']);
if ($currentPage == "" || $currentPage == "services") {
  $currentPage = "services.php";
}

function activeMenu($pageName) {
  global $currentPage;
  return $currentPage === $pageName ? 'active' : '';
}
?>
<?php include('include/header.php') ?>


  <section class="lg360-services-hero">
    <div class="container lg360-services-container">
      <div class="row align-items-center">

        <!-- Left Content -->
        <div class="col-lg-7">
          <div class="lg360-services-content">

            <!-- <div class="lg360-breadcrumb">
              <span>Home</span>
              <span class="arrow">&gt;</span>
              <span>Services</span>
            </div> -->

            <h1 class="lg360-services-title">
              Our <span>Services</span>
            </h1>

            <div class="lg360-title-line"></div>

            <p class="lg360-services-desc">
              Law Growth 360 provides end-to-end marketing, automation,
              and growth systems for law firms that want more leads,
              better conversions, and predictable growth.
            </p>

            <div class="lg360-feature-row">

              <!-- Feature 01 -->
              <div class="lg360-feature-item">
                <div class="lg360-feature-icon">
                  <svg viewBox="0 0 64 64">
                    <circle cx="32" cy="18" r="5"></circle>
                    <circle cx="18" cy="25" r="5"></circle>
                    <circle cx="46" cy="25" r="5"></circle>
                    <path d="M24 52v-8c0-6 3-10 8-10s8 4 8 10v8"></path>
                    <path d="M9 52v-7c0-5 4-9 9-9 3 0 5 1 7 3"></path>
                    <path d="M55 52v-7c0-5-4-9-9-9-3 0-5 1-7 3"></path>
                    <path d="M47 7l2 4 4 2-4 2-2 4-2-4-4-2 4-2 2-4Z"></path>
                  </svg>
                </div>
                <h3 class="lg360-feature-title">Built for<br>Law Firms</h3>
              </div>

              <!-- Feature 02 -->
              <div class="lg360-feature-item">
                <div class="lg360-feature-icon">
                  <svg viewBox="0 0 64 64">
                    <path d="M10 52h44"></path>
                    <rect x="16" y="39" width="6" height="13"></rect>
                    <rect x="30" y="29" width="6" height="23"></rect>
                    <rect x="44" y="17" width="6" height="35"></rect>
                    <path d="M15 33l11-11 8 7 15-18"></path>
                    <path d="M44 11h7v7"></path>
                  </svg>
                </div>
                <h3 class="lg360-feature-title">Focused on Growth<br>& Results</h3>
              </div>

              <!-- Feature 03 -->
              <div class="lg360-feature-item">
                <div class="lg360-feature-icon">
                  <svg viewBox="0 0 64 64">
                    <path d="M14 38l15-15 12 12 9-9"></path>
                    <path d="M11 45c6 0 10 4 15 4h12c4 0 7-3 7-7v-2"></path>
                    <path d="M15 52h28"></path>
                    <circle cx="48" cy="15" r="5"></circle>
                    <path d="M48 5v4"></path>
                    <path d="M48 21v4"></path>
                    <path d="M38 15h4"></path>
                    <path d="M54 15h4"></path>
                    <path d="M41 8l3 3"></path>
                    <path d="M52 19l3 3"></path>
                    <path d="M55 8l-3 3"></path>
                    <path d="M44 19l-3 3"></path>
                  </svg>
                </div>
                <h3 class="lg360-feature-title">Automation That<br>Saves You Time</h3>
              </div>

            </div>

          </div>
        </div>

        <!-- Right Mission Card -->
        <div class="col-lg-5 d-flex justify-content-lg-end justify-content-start">
          <div class="lg360-mission-card">

            <div class="lg360-mission-icon">
              <svg viewBox="0 0 64 64">
                <circle cx="32" cy="32" r="19"></circle>
                <circle cx="32" cy="32" r="10"></circle>
                <circle cx="32" cy="32" r="3"></circle>
                <path class="accent" d="M43 21l10-10"></path>
                <path class="accent" d="M50 10h6v6"></path>
                <path class="accent" d="M45 19l5 5"></path>
              </svg>
            </div>

            <h2 class="lg360-mission-title">Our Mission</h2>

            <p class="lg360-mission-text">
              To help law firms attract more ideal clients, respond faster,
              convert more consultations, and build systems that scale.
            </p>

            <div class="lg360-mission-line"></div>

          </div>
        </div>

      </div>
    </div>
  </section>


  <section class="lg360-solutions-section">
    <div class="container lg360-solutions-container">

      <div class="lg360-solutions-header">
        <h2 class="lg360-solutions-title">
          Solutions That Drive Real Growth for Law Firms
        </h2>
        <p class="lg360-solutions-desc">
          From marketing to automation, we offer everything your firm needs to attract, engage, and convert more clients.
        </p>
      </div>

      <div class="row g-3">

        <!-- 01 -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="lg360-solution-card">
            <div class="lg360-card-icon">
              <i class="bi bi-magnet-fill"></i>
              <span class="lg360-small-badge">
                <i class="bi bi-stars"></i>
              </span>
            </div>

            <h3 class="lg360-card-title">Lead Generation</h3>
            <p class="lg360-card-text">
              Attract high-quality leads with Google Ads, Local SEO, social media, and targeted campaigns.
            </p>
            <a href="#" class="lg360-learn-link">
              Learn More <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>

        <!-- 02 -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="lg360-solution-card">
            <div class="lg360-card-icon">
              <i class="bi bi-robot"></i>
            </div>

            <h3 class="lg360-card-title">AI Receptionist<br>& Live Chat</h3>
            <p class="lg360-card-text">
              Never miss a lead again. AI chat and virtual receptionist qualify, answer, and capture 24/7.
            </p>
            <a href="#" class="lg360-learn-link">
              Learn More <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>

        <!-- 03 -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="lg360-solution-card">
            <div class="lg360-card-icon">
              <i class="bi bi-file-earmark-text"></i>
              <span class="lg360-small-badge">
                <i class="bi bi-check-lg"></i>
              </span>
            </div>

            <h3 class="lg360-card-title">Client Intake<br>Automation</h3>
            <p class="lg360-card-text">
              Automated intake forms, document collection, and consultation booking to save time and close more leads.
            </p>
            <a href="#" class="lg360-learn-link">
              Learn More <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>

        <!-- 04 -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="lg360-solution-card">
            <div class="lg360-card-icon">
              <i class="bi bi-person-vcard"></i>
            </div>

            <h3 class="lg360-card-title">CRM for<br>Law Firms</h3>
            <p class="lg360-card-text">
              Track every lead and client interaction from first contact to signed case.
            </p>
            <a href="#" class="lg360-learn-link">
              Learn More <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>

        <!-- 05 -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="lg360-solution-card">
            <div class="lg360-card-icon">
              <i class="bi bi-envelope-paper"></i>
              <span class="lg360-small-badge">
                <i class="bi bi-chat-dots"></i>
              </span>
            </div>

            <h3 class="lg360-card-title">Automated Follow-Up<br>& Nurturing</h3>
            <p class="lg360-card-text">
              Multi-channel follow-up via text, email, and calls to keep leads engaged and move them forward.
            </p>
            <a href="#" class="lg360-learn-link">
              Learn More <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>

        <!-- 06 -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="lg360-solution-card">
            <div class="lg360-card-icon">
              <i class="bi bi-chat-square-text"></i>
              <span class="lg360-small-badge">
                <i class="bi bi-star-fill"></i>
              </span>
            </div>

            <h3 class="lg360-card-title">Reputation<br>Management</h3>
            <p class="lg360-card-text">
              Get more 5-star reviews, build trust, and strengthen your online reputation.
            </p>
            <a href="#" class="lg360-learn-link">
              Learn More <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>

        <!-- 07 -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="lg360-solution-card">
            <div class="lg360-card-icon">
              <i class="bi bi-window-sidebar"></i>
            </div>

            <h3 class="lg360-card-title">Website Design &<br>Landing Pages</h3>
            <p class="lg360-card-text">
              Modern, mobile-friendly websites and high-converting landing pages designed for law firms.
            </p>
            <a href="#" class="lg360-learn-link">
              Learn More <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>

        <!-- 08 -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="lg360-solution-card">
            <div class="lg360-card-icon">
              <i class="bi bi-search"></i>
            </div>

            <h3 class="lg360-card-title">SEO & Local<br>Visibility</h3>
            <p class="lg360-card-text">
              Improve your search rankings, Google Business Profile, and local visibility to get found by more clients.
            </p>
            <a href="#" class="lg360-learn-link">
              Learn More <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>

        <!-- 09 -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="lg360-solution-card">
            <div class="lg360-card-icon">
              <i class="bi bi-currency-dollar"></i>
              <span class="lg360-small-badge">
                <i class="bi bi-cursor"></i>
              </span>
            </div>

            <h3 class="lg360-card-title">Paid Advertising</h3>
            <p class="lg360-card-text">
              Strategic Google Ads and social ads campaigns that generate consistent, high-quality leads.
            </p>
            <a href="#" class="lg360-learn-link">
              Learn More <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>

        <!-- 10 -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="lg360-solution-card">
            <div class="lg360-card-icon">
              <i class="bi bi-bar-chart-fill"></i>
            </div>

            <h3 class="lg360-card-title">Reporting &<br>Analytics</h3>
            <p class="lg360-card-text">
              Custom dashboards and reporting so you always know what’s working and where to grow.
            </p>
            <a href="#" class="lg360-learn-link">
              Learn More <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>

        <!-- 11 -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="lg360-solution-card">
            <div class="lg360-card-icon">
              <i class="bi bi-chat-left-text"></i>
            </div>

            <h3 class="lg360-card-title">Client Communication<br>Systems</h3>
            <p class="lg360-card-text">
              Centralize messages, emails, and texts so your team stays organized and clients stay informed.
            </p>
            <a href="#" class="lg360-learn-link">
              Learn More <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>

        <!-- 12 -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="lg360-solution-card">
            <div class="lg360-card-icon">
              <i class="bi bi-gear"></i>
            </div>

            <h3 class="lg360-card-title">Workflow & Process<br>Automation</h3>
            <p class="lg360-card-text">
              Reduce manual work and streamline your operations with smart automations.
            </p>
            <a href="#" class="lg360-learn-link">
              Learn More <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>




<section class="lg360-process-section">
  <div class="container lg360-process-container">

    <div class="lg360-process-header">
      <h2 class="lg360-process-title">Our Approach</h2>
    </div>

    <div class="lg360-process-timeline">

      <!-- Step 01 -->
      <div class="lg360-process-item">
        <div class="lg360-process-icon-wrap">
          <i class="bi bi-bullseye"></i>
          <span class="lg360-process-step-number">1</span>
        </div>
        <h3 class="lg360-process-name">Discover</h3>
        <p class="lg360-process-text">
          We learn about your firm, goals, and ideal clients.
        </p>
      </div>

      <!-- Step 02 -->
      <div class="lg360-process-item">
        <div class="lg360-process-icon-wrap">
          <i class="bi bi-clipboard-check"></i>
          <span class="lg360-process-step-number">2</span>
        </div>
        <h3 class="lg360-process-name">Strategize</h3>
        <p class="lg360-process-text">
          We create a custom growth plan tailored to your firm.
        </p>
      </div>

      <!-- Step 03 -->
      <div class="lg360-process-item">
        <div class="lg360-process-icon-wrap">
          <i class="bi bi-rocket-takeoff"></i>
          <span class="lg360-process-step-number">3</span>
        </div>
        <h3 class="lg360-process-name">Implement</h3>
        <p class="lg360-process-text">
          We build, automate, and launch your growth systems.
        </p>
      </div>

      <!-- Step 04 -->
      <div class="lg360-process-item">
        <div class="lg360-process-icon-wrap">
          <i class="bi bi-bar-chart-line"></i>
          <span class="lg360-process-step-number">4</span>
        </div>
        <h3 class="lg360-process-name">Optimize</h3>
        <p class="lg360-process-text">
          We analyze performance and continuously improve results.
        </p>
      </div>

      <!-- Step 05 -->
      <div class="lg360-process-item">
        <div class="lg360-process-icon-wrap">
          <i class="bi bi-people"></i>
          <span class="lg360-process-step-number">5</span>
        </div>
        <h3 class="lg360-process-name">Scale</h3>
        <p class="lg360-process-text">
          We help you scale what works and grow your firm.
        </p>
      </div>

    </div>

  </div>
</section>



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



<?php include('include/footer.php') ?>