<style>
  body {
    overflow-x: hidden;
    width: 100%;
  }

  .h-sec2 h1.margin-top,
  .detail-page-sec1 {
    margin-top: 110px !important;
  }

  .header .d1 {
    margin-top: 15px !important;
    padding: 5px 0 !important;
  }

  /* Mobile Header Adjustments */
  @media screen and (max-width: 991px) {

    .h-sec2 h1.margin-top,
    .detail-page-sec1 {
      margin-top: 150px !important;
    }

    .header .logo-container {
      text-align: left;
    }

    .header .logo {
      max-width: 220px !important;
    }

    .collapse-container {
      display: flex;
      justify-content: flex-end;
      width: 100%;
      padding-right: 0;
    }

    .header .d1 .row>[class*="col-"] {
      padding-left: 10px;
      padding-right: 10px;
    }

    .navbar-toggler {
      border-color: rgba(200, 42, 239, 0.5) !important;
      padding: 6px !important;
      margin-top: 15px;
    }

    .navbar-collapse {
      background: #0e0e0e;
      padding: 20px;
      border-radius: 15px;
      margin-top: 15px;
      border: 1px solid rgba(200, 42, 239, 0.2);
    }
  }
</style>
<div class="row header">
  <div class="col-lg-12 d1">
    <div class="row">
      <div class="col-lg-2 d-none d-lg-block"></div>
      <div class="col-8 col-lg-2">
        <div class="logo-container">
          <img class="img-responsive logo" src="images/logo.png" style="max-width: 138px;">
        </div>
      </div>
      <div class="col-4 col-lg-6">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: transparent !important;">
          <div class="container">
            <div class="collapse-container">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
              </button>
            </div>
            <div class="collapse navbar-collapse" id="mainNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="services.php" role="button" data-bs-toggle="dropdown">
                    Services
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="ai-development.php">AI Development Services</a></li>
                    <li><a class="dropdown-item" href="predictive-modelling.php">Predictive Modelling</a></li>
                    <li><a class="dropdown-item" href="chat-gpt-integration.php">Chat GPT Integrations</a></li>
                    <li><a class="dropdown-item" href="natural-language-processing.php">Natural Language Processing</a>
                    </li>
                    <li><a class="dropdown-item" href="machine-learning.php">Machine Learning</a></li>
                    <li><a class="dropdown-item" href="computer-vision.php">Computer Vision</a></li>
                    <li><a class="dropdown-item" href="staff-augmentation.php">Staff Augmentation</a></li>
                    <li><a class="dropdown-item" href="ai-chatbot-development.php">AI Chatbot Development</a></li>
                    <li><a class="dropdown-item" href="mobile-app-development.php">Mobile App Development</a></li>
                    <li><a class="dropdown-item" href="custom-software.php">Custom Software</a></li>
                    <li><a class="dropdown-item" href="digital-marketing.php">Digital Marketing</a></li>
                    <li><a class="dropdown-item" href="devops.php">DevOps</a></li>
                    <li><a class="dropdown-item" href="custom-web-development.php">Custom Web Development</a></li>
                    <li><a class="dropdown-item" href="ui-ux-design.php">UI UX Design</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                    Pages
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Web Design</a></li>
                    <li><a class="dropdown-item" href="#">Development</a></li>
                    <li><a class="dropdown-item" href="#">SEO</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                    Archive
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Web Design</a></li>
                    <li><a class="dropdown-item" href="#">Development</a></li>
                    <li><a class="dropdown-item" href="#">SEO</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact-us.php">Contact Us</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
      <div class="col-lg-2 d-none d-lg-block">
        <div class="contact-d-container">
          <div class="contact-d">
            <div class="phone-d">
              <i class="fas fa-phone-volume"></i>
            </div>
            <div class="number-d">
              <span style="">(409) 404-0823</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>