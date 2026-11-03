<?php
$page_title = "Contact Us - Law Growth 360";
?>

<?php
$currentPage = basename($_SERVER['PHP_SELF']);
if ($currentPage == "" || $currentPage == "contact") {
  $currentPage = "contact.php";
}

function activeMenu($pageName) {
  global $currentPage;
  return $currentPage === $pageName ? 'active' : '';
}
?>
<?php include('include/header.php') ?>


  <main>
    <!-- Hero Contact Section -->
    <section class="lg360-hero">
      <div class="lg360-hero-visual" aria-hidden="true"></div>
      <div class="lg360-hero-overlay" aria-hidden="true"></div>

      <div class="container lg360-wide-container position-relative">
        <div class="row align-items-center g-5 lg360-hero-row">
          <div class="col-lg-5 col-xl-5">
            <div class="lg360-hero-copy">
              <p class="lg360-kicker">Contact Us</p>
              <h1>Let’s Build Your <br>Law Firm’s <span>Growth Plan.</span></h1>
              <div class="lg360-title-line"></div>
              <p class="lg360-hero-text">We’re here to help you attract more clients, streamline operations, and grow your firm with smart marketing, automation, and growth systems.</p>

              <div class="lg360-contact-list">
                <div class="lg360-contact-item">
                  <div class="lg360-icon-box">
                    <svg viewBox="0 0 24 24" fill="none"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.86 19.86 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.86 19.86 0 0 1 2.12 4.18 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.12.9.32 1.78.6 2.63a2 2 0 0 1-.45 2.11L8 9.72a16 16 0 0 0 6.28 6.28l1.26-1.26a2 2 0 0 1 2.11-.45c.85.28 1.73.48 2.63.6A2 2 0 0 1 22 16.92Z"/></svg>
                  </div>
                  <div>
                    <h4>(866) 360-LAW1</h4>
                    <p>Mon - Fri: 9:00 AM - 6:00 PM (EST)</p>
                  </div>
                </div>

                <div class="lg360-contact-item">
                  <div class="lg360-icon-box">
                    <svg viewBox="0 0 24 24" fill="none"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2Z"/><path d="m22 6-10 7L2 6"/></svg>
                  </div>
                  <div>
                    <h4>hello@lawgrowth360.com</h4>
                    <p>We reply within 1 business day</p>
                  </div>
                </div>

                <div class="lg360-contact-item">
                  <div class="lg360-icon-box">
                    <svg viewBox="0 0 24 24" fill="none"><path d="M21 10c0 7-9 12-9 12S3 17 3 10a9 9 0 1 1 18 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                  </div>
                  <div>
                    <h4>Serving Law Firms Nationwide</h4>
                    <p>Virtual meetings available anywhere in the U.S.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-5 col-xl-5 ms-lg-auto">
            <div class="lg360-form-card">
              <h2>Send Us a Message</h2>
              <p>Fill out the form below and our team will get back to you shortly.</p>

              <form class="lg360-form" action="#" method="post">
                <div class="row g-3">
                  <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Full Name" aria-label="Full Name">
                  </div>
                  <div class="col-md-6">
                    <input type="email" class="form-control" placeholder="Email Address" aria-label="Email Address">
                  </div>
                  <div class="col-md-6">
                    <input type="tel" class="form-control" placeholder="Phone Number" aria-label="Phone Number">
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Law Firm Name" aria-label="Law Firm Name">
                  </div>
                  <div class="col-12">
                    <select class="form-select" aria-label="Practice Area">
                      <option selected>Practice Area</option>
                      <option>Personal Injury</option>
                      <option>Immigration Law</option>
                      <option>Family Law</option>
                      <option>Criminal Defense</option>
                      <option>Estate Planning</option>
                      <option>Business & Corporate Law</option>
                      <option>Employment Law</option>
                      <option>Civil Litigation</option>
                    </select>
                  </div>
                  <div class="col-12">
                    <textarea class="form-control" rows="5" placeholder="How can we help you?" aria-label="How can we help you?"></textarea>
                  </div>
                  <div class="col-12">
                    <button class="btn lg360-btn w-100" type="submit">Send Message <span>→</span></button>
                  </div>
                </div>
              </form>

              <div class="lg360-secure-note">
                <svg viewBox="0 0 24 24" fill="none"><rect x="5" y="11" width="14" height="10" rx="2"/><path d="M8 11V7a4 4 0 0 1 8 0v4"/></svg>
                <span>Your information is secure and will never be shared.</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Help Section -->
    <section class="lg360-help-section">
      <div class="container lg360-wide-container">
        <div class="lg360-section-heading text-center">
          <h2>How We Can Help Your Firm</h2>
          <span></span>
        </div>

        <div class="row g-0 lg360-help-grid">
          <div class="col-6 col-lg-2">
            <div class="lg360-help-card">
              <div class="lg360-help-icon">
                <svg viewBox="0 0 48 48" fill="none"><circle cx="24" cy="15" r="7"/><path d="M13 40v-3c0-6 5-11 11-11s11 5 11 11v3"/><circle cx="10" cy="18" r="5"/><path d="M3 38v-2c0-5 3.5-9 8-9"/><circle cx="38" cy="18" r="5"/><path d="M45 38v-2c0-5-3.5-9-8-9"/></svg>
              </div>
              <h3>Get More Leads</h3>
              <p>Attract high-quality leads through proven marketing strategies.</p>
            </div>
          </div>
          <div class="col-6 col-lg-2">
            <div class="lg360-help-card">
              <div class="lg360-help-icon">
                <svg viewBox="0 0 48 48" fill="none"><path d="M24 6v6M24 36v6M6 24h6M36 24h6M11.3 11.3l4.2 4.2M32.5 32.5l4.2 4.2M36.7 11.3l-4.2 4.2M15.5 32.5l-4.2 4.2"/><circle cx="24" cy="24" r="12"/><circle cx="24" cy="24" r="5"/></svg>
              </div>
              <h3>Automate & Save Time</h3>
              <p>Streamline intake, follow-ups, and client communication with automation.</p>
            </div>
          </div>
          <div class="col-6 col-lg-2">
            <div class="lg360-help-card">
              <div class="lg360-help-icon">
                <svg viewBox="0 0 48 48" fill="none"><path d="M8 40h32"/><path d="M12 36V24h7v12"/><path d="M22 36V18h7v18"/><path d="M32 36V10h7v26"/><path d="M9 18c8-2 14-5 20-12l9 3"/><path d="M38 9v9h-9"/></svg>
              </div>
              <h3>Convert More Clients</h3>
              <p>Turn more inquiries into consultations and signed cases.</p>
            </div>
          </div>
          <div class="col-6 col-lg-2">
            <div class="lg360-help-card">
              <div class="lg360-help-icon">
                <svg viewBox="0 0 48 48" fill="none"><path d="m24 5 5.7 11.6 12.8 1.9-9.2 9 2.2 12.7L24 34.2 12.5 40.2l2.2-12.7-9.2-9 12.8-1.9L24 5Z"/></svg>
              </div>
              <h3>Build Your Reputation</h3>
              <p>Improve reviews, online visibility, and client trust.</p>
            </div>
          </div>
          <div class="col-6 col-lg-2">
            <div class="lg360-help-card">
              <div class="lg360-help-icon">
                <svg viewBox="0 0 48 48" fill="none"><rect x="7" y="10" width="34" height="24" rx="2"/><path d="M17 40h14M24 34v6"/><path d="m14 27 7-7 6 4 7-10"/><path d="M34 14v8h-8"/></svg>
              </div>
              <h3>Track & Grow</h3>
              <p>See what’s working with real-time dashboards and reporting.</p>
            </div>
          </div>
          <div class="col-6 col-lg-2">
            <div class="lg360-help-card last">
              <div class="lg360-help-icon">
                <svg viewBox="0 0 48 48" fill="none"><path d="M10 29v-6a14 14 0 0 1 28 0v6"/><rect x="5" y="25" width="9" height="12" rx="3"/><rect x="34" y="25" width="9" height="12" rx="3"/><path d="M34 37c-2 4-6 6-10 6h-4"/><path d="M18 43h6"/></svg>
              </div>
              <h3>We’re Here to Support</h3>
              <p>Our team is with you every step of the way.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Strategy / Map Section -->
    <section class="lg360-service-area" id="strategy-call">
      <div class="container lg360-wide-container">
        <div class="row align-items-center g-4 g-xl-5">
          <div class="col-lg-5 col-xl-5">
            <div class="lg360-call-card">
              <div class="lg360-call-icon">
                <svg viewBox="0 0 48 48" fill="none"><rect x="8" y="12" width="32" height="28" rx="3"/><path d="M16 8v8M32 8v8M8 20h32"/><path d="M16 28h4M23 28h4M30 28h4M16 34h4M23 34h4"/></svg>
              </div>
              <div>
                <h2>Schedule a Strategy Call</h2>
                <p>Let’s discuss your goals and create a customized growth plan for your law firm.</p>
                <a href="#" class="btn lg360-btn" data-bs-toggle="modal" data-bs-target="#strategyCallModal">Book a Strategy Call <span>→</span></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-xl-4 text-center">
            <img class="lg360-map-img" src="assets/images/usa-map.png" alt="Map showing Law Growth 360 serving law firms across the United States">
          </div>

          <div class="col-lg-3 col-xl-3">
            <div class="lg360-serving-copy">
              <h2><span>Proudly Serving</span><br>Law Firms Across<br>the United States</h2>
              <p>No matter where your firm is located, we can help you grow. Virtual meetings available.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Powered By Strip -->
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
                  <svg viewBox="0 0 48 48" fill="none"><circle cx="24" cy="24" r="17"/><path d="m16 24 5 5 12-13"/></svg>
                  <span>Proven Growth<br>Frameworks</span>
                </div>
              </div>
              <div class="col-6 col-md-3">
                <div class="lg360-proof-item">
                  <svg viewBox="0 0 48 48" fill="none"><circle cx="24" cy="24" r="17"/><path d="M15 25h9l6-10M30 15h7v7"/></svg>
                  <span>Advanced Automation<br>& AI Solutions</span>
                </div>
              </div>
              <div class="col-6 col-md-3">
                <div class="lg360-proof-item">
                  <svg viewBox="0 0 48 48" fill="none"><path d="M24 5 39 12v10c0 10-6 18-15 21C15 40 9 32 9 22V12L24 5Z"/><path d="m18 24 4 4 8-9"/></svg>
                  <span>Reliable Technology<br>& Data Security</span>
                </div>
              </div>
              <div class="col-6 col-md-3">
                <div class="lg360-proof-item">
                  <svg viewBox="0 0 48 48" fill="none"><path d="M8 38c12 0 16-8 16-18"/><path d="M24 20c0 10 6 18 16 18"/><path d="M12 32l-4 6 7-2M36 32l4 6-7-2M21 11l3-5 3 5"/></svg>
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
