<?php
$page_title = "About Us - Law Growth 360";
?>

<title><?php echo $page_title; ?></title>
<?php
$currentPage = basename($_SERVER['PHP_SELF']);
if ($currentPage == "" || $currentPage == "about") {
  $currentPage = "about.php";
}

function activeMenu($pageName) {
  global $currentPage;
  return $currentPage === $pageName ? 'active' : '';
}
?>
<?php include('include/header.php') ?>


 <section class="lg360-hero-section">
    <div class="container lg360-container">
      <div class="row">
        <div class="col-lg-7 col-md-8">
          <div class="lg360-content">

            <div class="lg360-eyebrow">
              About Law Growth 360
            </div>

            <h1 class="lg360-title">
              Helping Law Firms
              <span>Grow Smarter.</span>
            </h1>

            <p class="lg360-description">
              Law Growth 360 helps attorneys attract more qualified clients,
              streamline intake, and scale their practice through modern marketing,
              automation, and growth systems.
            </p>

            <div class="lg360-powered-box">
              <div class="lg360-icon-wrap">
                <svg viewBox="0 0 24 24">
                  <circle cx="12" cy="12" r="8"></circle>
                  <circle cx="12" cy="12" r="3"></circle>
                  <path d="M12 4V1.8"></path>
                  <path d="M20 12h2.2"></path>
                  <path d="M12 20v2.2"></path>
                  <path d="M4 12H1.8"></path>
                </svg>
              </div>

              <div>
                Powered by the Growth Systems of <strong>360 Growth Lab</strong>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!-- <div class="lg360-small-circle"></div> -->
    </div>
  </section>




    <section class="lg360-about-section">
    <div class="container lg360-about-container">
      <div class="row align-items-stretch">

        <!-- Left Content -->
        <div class="col-lg-6">
          <div class="lg360-left-content">

            <h2 class="lg360-section-title">Who We Are</h2>

            <p class="lg360-about-text">
              Law Growth 360 is the legal industry division of
              <span class="lg360-green">360 Growth Lab.</span>
            </p>

            <p class="lg360-about-text">
              We combine legal marketing expertise with proven growth
              frameworks, automation systems, and business strategy
              developed across multiple industries.
            </p>

            <p class="lg360-about-text">
              Our team is passionate about helping law firms build sustainable
              growth engines that attract, convert, and retain more clients.
            </p>

            <div class="lg360-backed-box">
              <div class="lg360-backed-icon">
                <svg viewBox="0 0 64 64">
                  <path d="M10 54h44"></path>
                  <path d="M14 50h36"></path>
                  <path d="M18 25h28"></path>
                  <path d="M20 25v25"></path>
                  <path d="M28 25v25"></path>
                  <path d="M36 25v25"></path>
                  <path d="M44 25v25"></path>
                  <path d="M12 25h40L32 13 12 25Z"></path>
                  <path d="M32 13V7"></path>
                  <path d="M29 7h6"></path>
                </svg>
              </div>

              <p class="lg360-backed-text">
                Backed by the experience, technology,<br>
                and innovation of <span class="lg360-green">360 Growth Lab.</span>
              </p>
            </div>

          </div>
        </div>

        <!-- Right Content -->
        <div class="col-lg-6 lg360-divider-col">
          <div class="lg360-right-content">

            <!-- Mission -->
            <div class="lg360-info-item">
              <div class="lg360-info-icon">
                <svg viewBox="0 0 64 64">
                  <circle cx="32" cy="32" r="20"></circle>
                  <circle cx="32" cy="32" r="10"></circle>
                  <circle cx="32" cy="32" r="3"></circle>
                  <path d="M42 22l10-10"></path>
                  <path d="M48 12h4v4"></path>
                </svg>
              </div>

              <div>
                <h3 class="lg360-info-title">Our Mission</h3>
                <p class="lg360-info-text">
                  To empower law firms with the technology, systems, and strategies
                  needed to deliver exceptional client experiences while achieving
                  predictable growth.
                </p>
              </div>
            </div>

            <div class="lg360-horizontal-line"></div>

            <!-- Vision -->
            <div class="lg360-info-item">
              <div class="lg360-info-icon">
                <svg viewBox="0 0 64 64">
                  <path d="M6 32s10-16 26-16 26 16 26 16-10 16-26 16S6 32 6 32Z"></path>
                  <circle cx="32" cy="32" r="7"></circle>
                  <circle cx="32" cy="32" r="2"></circle>
                </svg>
              </div>

              <div>
                <h3 class="lg360-info-title">Our Vision</h3>
                <p class="lg360-info-text">
                  To become the trusted growth partner for law firms across the
                  United States by transforming how legal practices attract,
                  engage, convert, and retain clients.
                </p>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>


   <section class="lg360-what-section">
    <div class="container lg360-what-container">

      <div class="lg360-what-header">
        <h2 class="lg360-what-title">What We Do</h2>
        <p class="lg360-what-desc">
          We build end-to-end growth systems that help law firms get more leads,
          convert more consultations, and run more efficient operations.
        </p>
      </div>

      <div class="row g-0 lg360-services-row">

        <!-- 01 -->
        <div class="col-12 col-sm-6 col-md-4 col-lg lg360-service-col">
          <div class="lg360-service-card">
            <div class="lg360-service-icon">
              <svg viewBox="0 0 64 64">
                <path d="M23 37c-8-8-9-18-2-25l7 7-7 7"></path>
                <path d="M27 41c8 8 18 9 25 2l-7-7-7 7"></path>
                <path d="M22 38l16-16"></path>
                <circle cx="45" cy="13" r="4"></circle>
                <path d="M49 18c5 1 8 4 9 9"></path>
                <path d="M41 18c-5 1-8 4-9 9"></path>
              </svg>
            </div>
            <h3 class="lg360-service-heading">Lead Generation</h3>
            <p class="lg360-service-text">
              Attract qualified leads through SEO, paid ads, social media, and content marketing.
            </p>
          </div>
        </div>

        <!-- 02 -->
        <div class="col-12 col-sm-6 col-md-4 col-lg lg360-service-col">
          <div class="lg360-service-card">
            <div class="lg360-service-icon">
              <svg viewBox="0 0 64 64">
                <path d="M18 27c0-9 6-15 14-15s14 6 14 15v14c0 5-4 9-9 9H27c-5 0-9-4-9-9V27Z"></path>
                <path d="M22 20h20"></path>
                <circle cx="25" cy="34" r="1.5"></circle>
                <circle cx="32" cy="34" r="1.5"></circle>
                <circle cx="39" cy="34" r="1.5"></circle>
                <path d="M25 50l-4 6"></path>
                <path d="M39 50l4 6"></path>
              </svg>
            </div>
            <h3 class="lg360-service-heading">Client Intake & Automation</h3>
            <p class="lg360-service-text">
              Automate intake, follow-ups, and appointment booking so no lead slips through.
            </p>
          </div>
        </div>

        <!-- 03 -->
        <div class="col-12 col-sm-6 col-md-4 col-lg lg360-service-col">
          <div class="lg360-service-card">
            <div class="lg360-service-icon">
              <svg viewBox="0 0 64 64">
                <rect x="12" y="13" width="40" height="30" rx="2"></rect>
                <path d="M24 53h16"></path>
                <path d="M32 43v10"></path>
                <path d="M20 34l8-8 6 6 10-14"></path>
                <path d="M38 18h6v6"></path>
                <path d="M18 39h28"></path>
              </svg>
            </div>
            <h3 class="lg360-service-heading">CRM & Pipeline Management</h3>
            <p class="lg360-service-text">
              Track every lead and case from first contact to retained client.
            </p>
          </div>
        </div>

        <!-- 04 -->
        <div class="col-12 col-sm-6 col-md-4 col-lg lg360-service-col">
          <div class="lg360-service-card">
            <div class="lg360-service-icon">
              <svg viewBox="0 0 64 64">
                <path d="M16 18h32c4 0 7 3 7 7v12c0 4-3 7-7 7H30l-10 8v-8h-4c-4 0-7-3-7-7V25c0-4 3-7 7-7Z"></path>
                <path d="M22 28h14"></path>
                <path d="M22 36h22"></path>
                <path d="M48 14v-4"></path>
                <path d="M56 20h4"></path>
                <path d="M8 20H4"></path>
              </svg>
            </div>
            <h3 class="lg360-service-heading">Communication Automation</h3>
            <p class="lg360-service-text">
              Nurture leads and keep clients informed with multi-channel automation.
            </p>
          </div>
        </div>

        <!-- 05 -->
        <div class="col-12 col-sm-6 col-md-4 col-lg lg360-service-col">
          <div class="lg360-service-card">
            <div class="lg360-service-icon">
              <svg viewBox="0 0 64 64">
                <circle cx="32" cy="30" r="20"></circle>
                <path d="M24 52l-6 8"></path>
                <path d="M40 52l6 8"></path>
                <path d="M32 18l4 8 9 1-6.5 6.2 1.5 9-8-4.3-8 4.3 1.5-9L19 27l9-1 4-8Z"></path>
              </svg>
            </div>
            <h3 class="lg360-service-heading">Reputation Management</h3>
            <p class="lg360-service-text">
              Build trust with review generation, monitoring, and online reputation.
            </p>
          </div>
        </div>

        <!-- 06 -->
        <div class="col-12 col-sm-6 col-md-4 col-lg lg360-service-col">
          <div class="lg360-service-card">
            <div class="lg360-service-icon">
              <svg viewBox="0 0 64 64">
                <rect x="12" y="14" width="40" height="38" rx="3"></rect>
                <path d="M12 24h40"></path>
                <circle cx="19" cy="19" r="1"></circle>
                <circle cx="25" cy="19" r="1"></circle>
                <circle cx="31" cy="19" r="1"></circle>
                <path d="M20 31h10"></path>
                <path d="M20 38h16"></path>
                <path d="M20 45h8"></path>
              </svg>
            </div>
            <h3 class="lg360-service-heading">Website & Landing Pages</h3>
            <p class="lg360-service-text">
              High-converting websites and landing pages built for law firms.
            </p>
          </div>
        </div>

        <!-- 07 -->
        <div class="col-12 col-sm-6 col-md-4 col-lg lg360-service-col">
          <div class="lg360-service-card">
            <div class="lg360-service-icon">
              <svg viewBox="0 0 64 64">
                <path d="M10 54h44"></path>
                <rect x="15" y="36" width="6" height="18"></rect>
                <rect x="29" y="26" width="6" height="28"></rect>
                <rect x="43" y="14" width="6" height="40"></rect>
              </svg>
            </div>
            <h3 class="lg360-service-heading">Analytics & Reporting</h3>
            <p class="lg360-service-text">
              Clear dashboards and reporting so you can make smarter decisions.
            </p>
          </div>
        </div>

      </div>

    </div>
  </section>


  <section class="lg360-values-section">
    <div class="container lg360-values-container">
      <div class="row align-items-stretch g-4">

        <!-- Left Side Core Values -->
        <div class="col-lg-8 d-flex align-items-center">
          <div class="lg360-values-wrapper">

            <h2 class="lg360-section-heading">Our Core Values</h2>

            <div class="row g-0 lg360-values-row">

              <!-- Value 01 -->
              <div class="col-12 col-sm-6 col-md-4 col-xl lg360-value-col">
                <div class="lg360-value-card">
                  <div class="lg360-value-icon">
                    <svg viewBox="0 0 64 64">
                      <path d="M20 10h24v14c0 9-5 16-12 18-7-2-12-9-12-18V10Z"></path>
                      <path d="M20 16H10v8c0 7 5 12 12 12"></path>
                      <path d="M44 16h10v8c0 7-5 12-12 12"></path>
                      <path d="M32 42v10"></path>
                      <path d="M22 54h20"></path>
                    </svg>
                  </div>
                  <h3 class="lg360-value-title">Results Driven</h3>
                  <p class="lg360-value-text">
                    We measure success by the growth and results we create for our clients.
                  </p>
                </div>
              </div>

              <!-- Value 02 -->
              <div class="col-12 col-sm-6 col-md-4 col-xl lg360-value-col">
                <div class="lg360-value-card">
                  <div class="lg360-value-icon">
                    <svg viewBox="0 0 64 64">
                      <circle cx="32" cy="17" r="6"></circle>
                      <circle cx="18" cy="24" r="5"></circle>
                      <circle cx="46" cy="24" r="5"></circle>
                      <path d="M22 48v-7c0-6 4-10 10-10s10 4 10 10v7"></path>
                      <path d="M8 48v-6c0-5 4-9 10-9 3 0 5 1 7 3"></path>
                      <path d="M56 48v-6c0-5-4-9-10-9-3 0-5 1-7 3"></path>
                      <path d="M14 48h36"></path>
                    </svg>
                  </div>
                  <h3 class="lg360-value-title">Client Focused</h3>
                  <p class="lg360-value-text">
                    We put your clients and your firm’s goals at the center of everything we do.
                  </p>
                </div>
              </div>

              <!-- Value 03 -->
              <div class="col-12 col-sm-6 col-md-4 col-xl lg360-value-col">
                <div class="lg360-value-card">
                  <div class="lg360-value-icon">
                    <svg viewBox="0 0 64 64">
                      <path d="M24 38c-4-3-7-8-7-14 0-9 7-16 15-16s15 7 15 16c0 6-3 11-7 14"></path>
                      <path d="M25 44h14"></path>
                      <path d="M27 50h10"></path>
                      <path d="M29 56h6"></path>
                      <path d="M32 2v5"></path>
                      <path d="M52 10l-4 4"></path>
                      <path d="M12 10l4 4"></path>
                      <path d="M58 28h-5"></path>
                      <path d="M6 28h5"></path>
                    </svg>
                  </div>
                  <h3 class="lg360-value-title">Innovative</h3>
                  <p class="lg360-value-text">
                    We leverage the latest technology and automation to keep your firm ahead.
                  </p>
                </div>
              </div>

              <!-- Value 04 -->
              <div class="col-12 col-sm-6 col-md-4 col-xl lg360-value-col">
                <div class="lg360-value-card">
                  <div class="lg360-value-icon">
                    <svg viewBox="0 0 64 64">
                      <path d="M32 8l20 8v14c0 13-8 22-20 26-12-4-20-13-20-26V16l20-8Z"></path>
                      <path d="M23 32l6 6 12-14"></path>
                    </svg>
                  </div>
                  <h3 class="lg360-value-title">Transparent</h3>
                  <p class="lg360-value-text">
                    We believe in clear communication, honest reporting, and full transparency.
                  </p>
                </div>
              </div>

              <!-- Value 05 -->
              <div class="col-12 col-sm-6 col-md-4 col-xl lg360-value-col">
                <div class="lg360-value-card">
                  <div class="lg360-value-icon">
                    <svg viewBox="0 0 64 64">
                      <path d="M44 14h10v10"></path>
                      <path d="M20 50H10V40"></path>
                      <path d="M52 24c-3-8-10-14-20-14-7 0-13 3-17 8"></path>
                      <path d="M12 40c3 8 10 14 20 14 7 0 13-3 17-8"></path>
                    </svg>
                  </div>
                  <h3 class="lg360-value-title">Continuous Improvement</h3>
                  <p class="lg360-value-text">
                    We constantly test, optimize, and improve for better results.
                  </p>
                </div>
              </div>

            </div>
          </div>
        </div>

        <!-- Right Side Impact -->
        <div class="col-lg-4">
          <div class="lg360-impact-box">

            <h2 class="lg360-impact-title">Our Impact</h2>

            <div class="lg360-impact-grid">

              <!-- Impact 01 -->
              <div class="lg360-impact-item">
                <div class="lg360-impact-icon">
                  <svg viewBox="0 0 64 64">
                    <path d="M10 48l12-12 8 7 18-24"></path>
                    <path d="M42 19h8v8"></path>
                    <path d="M14 54h38"></path>
                    <path d="M20 48v6"></path>
                    <path d="M30 42v12"></path>
                    <path d="M40 32v22"></path>
                    <path d="M50 24v30"></path>
                  </svg>
                </div>
                <p class="lg360-impact-text">More Leads<br>Generated</p>
              </div>

              <!-- Impact 02 -->
              <div class="lg360-impact-item">
                <div class="lg360-impact-icon">
                  <svg viewBox="0 0 64 64">
                    <circle cx="32" cy="18" r="7"></circle>
                    <circle cx="17" cy="24" r="6"></circle>
                    <circle cx="47" cy="24" r="6"></circle>
                    <path d="M21 50v-8c0-7 4-12 11-12s11 5 11 12v8"></path>
                    <path d="M7 50v-7c0-6 4-10 10-10 3 0 5 1 7 3"></path>
                    <path d="M57 50v-7c0-6-4-10-10-10-3 0-5 1-7 3"></path>
                  </svg>
                </div>
                <p class="lg360-impact-text">More Consultations<br>Booked</p>
              </div>

              <!-- Impact 03 -->
              <div class="lg360-impact-item">
                <div class="lg360-impact-icon">
                  <svg viewBox="0 0 64 64">
                    <path d="M17 45l20-20"></path>
                    <path d="M22 20l22 22"></path>
                    <path d="M18 16l30 30"></path>
                    <path d="M11 51h22"></path>
                    <path d="M12 56h20"></path>
                    <path d="M42 48l10 10"></path>
                  </svg>
                </div>
                <p class="lg360-impact-text">More Clients<br>Retained</p>
              </div>

              <!-- Impact 04 -->
              <div class="lg360-impact-item">
                <div class="lg360-impact-icon">
                  <svg viewBox="0 0 64 64">
                    <path d="M32 8l7 16 17 2-13 11 4 17-15-9-15 9 4-17L8 26l17-2 7-16Z"></path>
                  </svg>
                </div>
                <p class="lg360-impact-text">Stronger Firms<br>Built</p>
              </div>

            </div>

          </div>
        </div>

      </div>
    </div>
  </section>



    <section class="lg360-powered-section">
    <div class="container lg360-powered-container">
      <div class="row align-items-start">

        <!-- Left Text -->
        <div class="col-lg-5 col-md-7">
          <div class="lg360-powered-content">

            <h2 class="lg360-powered-title">
              Powered By <span>360 Growth Lab</span>
            </h2>

            <p class="lg360-powered-text">
              360 Growth Lab is a business growth and digital transformation company
              that helps organizations scale through strategy, technology, automation,
              and operational excellence.
            </p>

            <p class="lg360-powered-text mb-lg-0">
              Law Growth 360 leverages the systems, tools, and expertise of
              360 Growth Lab to deliver best-in-class solutions specifically
              designed for law firms.
            </p>

          </div>
        </div>

        <!-- Checklist -->
        <div class="col-lg-4 col-md-5">
          <div class="lg360-check-list">

            <div class="lg360-check-item">
              <div class="lg360-check-icon">
                <svg viewBox="0 0 24 24">
                  <path d="M5 13l4 4L19 7"></path>
                </svg>
              </div>
              <p class="lg360-check-text">
                Proven growth frameworks<br>
                across multiple industries
              </p>
            </div>

            <div class="lg360-check-item">
              <div class="lg360-check-icon">
                <svg viewBox="0 0 24 24">
                  <path d="M5 13l4 4L19 7"></path>
                </svg>
              </div>
              <p class="lg360-check-text">
                Advanced automation<br>
                and AI solutions
              </p>
            </div>

            <div class="lg360-check-item">
              <div class="lg360-check-icon">
                <svg viewBox="0 0 24 24">
                  <path d="M5 13l4 4L19 7"></path>
                </svg>
              </div>
              <p class="lg360-check-text">
                Reliable technology<br>
                and data security
              </p>
            </div>

            <div class="lg360-check-item">
              <div class="lg360-check-icon">
                <svg viewBox="0 0 24 24">
                  <path d="M5 13l4 4L19 7"></path>
                </svg>
              </div>
              <p class="lg360-check-text">
                Scalable systems built<br>
                for long-term success
              </p>
            </div>

          </div>
        </div>

        <!-- Empty column reserved for background image spacing -->
        <div class="col-lg-3 d-none d-lg-block"></div>

      </div>
    </div>
  </section>





    <section class="lg360-cta-section">
    <div class="container lg360-cta-container">
      <div class="lg360-cta-inner">

        <!-- Left Heading -->
        <div class="lg360-cta-left">
          <div class="lg360-cta-icon">
            <svg viewBox="0 0 64 64">
              <rect x="14" y="16" width="36" height="36" rx="4"></rect>
              <path d="M22 10v10"></path>
              <path d="M42 10v10"></path>
              <path d="M14 26h36"></path>
              <path d="M23 34h5"></path>
              <path d="M36 34h5"></path>
              <path d="M23 43h5"></path>
              <path d="M36 43h5"></path>
            </svg>
          </div>

          <h2 class="lg360-cta-title">
            Ready to Build Your Firm’s Growth Engine?
          </h2>
        </div>

        <!-- Divider -->
        <div class="lg360-cta-divider"></div>

        <!-- Center Text -->
        <p class="lg360-cta-text">
          Let’s build a customized growth system that helps your firm attract more clients,
          increase conversions, and scale with ease.
        </p>

        <!-- Buttons -->
        <div class="lg360-cta-actions">
          <a href="#" class="lg360-cta-btn lg360-cta-btn-primary">
            Schedule A Strategy Call
            <svg viewBox="0 0 24 24">
              <path d="M5 12h14"></path>
              <path d="M13 6l6 6-6 6"></path>
            </svg>
          </a>

          <a href="#" class="lg360-cta-btn lg360-cta-btn-outline">
            Get A Free Growth Audit
            <svg viewBox="0 0 24 24">
              <path d="M5 12h14"></path>
              <path d="M13 6l6 6-6 6"></path>
            </svg>
          </a>
        </div>

      </div>
    </div>
  </section>


<?php include('include/footer.php') ?>