<!DOCTYPE html>
<html lang="en">

<head>
  <title>Nextinn</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
    rel="stylesheet">

  <link rel="icon" type="image/x-icon" href="images/favicon.png">
  <style>
    * {
      font-family: 'Plus Jakarta Sans', sans-serif;
    }

    :root {
      --primary-color-1: #D1D1D1 !important;
      --color-1: #D1D1D1 !important;
      --color-5: #1F1F1F !important;
      --color-2: #8B8B8B !important;
      --clr1: #D1D1D1 !important;
      --clr2: #FFFFFF !important;
      --clr3: #C82AEF !important;
      --clr4: #8B8B8B !important;
      --clr5: white !important;
      --clr6: #988b8b !important;
      --clr7: black !important;
      --clr8: #0e0e0e !important;
      --clr9: #BCBCBC !important;
      --clr10: #7A7A7A !important;
      --th-bg-color-2: #0E0E0E !important;
      --th-bg-clr-3: #040404 !important;
    }

    body {
      background-color: black;
    }

    /* Utility Classes */
    .margin-left-minus-9 {
      margin-left: -9px;
    }

    .font-bold {
      font-weight: bold;
    }

    .font-bold-7 {
      font-weight: 700;
    }

    .p-r {
      position: relative !important;
    }

    .in-bl {
      display: inline-block !important;
    }

    .m-t-2 {
      margin-top: 2px;
    }

    .ml5 {
      margin-left: 5px;
    }

    .mt70 {
      margin-top: 70px
    }

    .p-b-70 {
      padding-bottom: 70px;
    }

    .br20 {
      border-radius: 20px;
    }

    .p14 {
      padding: 14px;
    }

    /* Utility Classes */



    /* Header */
    .header .d1 {
      background-color: #0e0e0e;
      margin-left: 14px;
      margin-top: 14px;
      max-width: 98%;
    }

    .header .logo {
      margin-top: 6px;
    }

    .header nav ul li a {
      color: #D1D1D1 !important;
    }

    .header nav ul li ul {
      background-color: black !important;
      border: 1px solid #bb18d1;
    }

    .header nav ul li ul li {}

    .header nav ul li ul li a {
      color: #D1D1D1 !important;
    }

    .header nav ul li ul li a:hover {
      /* border-bottom: 1px solid #bb18d1; */
      background-color: transparent !important;
      font-weight: 500;
    }

    .header .contact-d {
      border-radius: 30px;
      background-color: black;
      padding: 4px 0px;
      max-width: 202px;
      box-shadow: -3px -2px 3px #c82aef;
    }

    .header .contact-d .phone-d {
      background-color: #C82AEF;
      width: 38px;
      padding: 6px 10px;
      border-radius: 23px;
      margin-left: 5px;
      display: inline-block;
    }

    .header .contact-d .phone-d i {
      color: white !important;
      font-size: 25px;
    }

    .header .contact-d .number-d {
      display: inline-block;
    }

    .header .contact-d .number-d span {
      color: #D1D1D1;
      margin-left: 9px;
    }

    /* Header */

    /*Home Section 2*/

    .h-sc2 {
      border-bottom: 1px solid var(--color-5);
    }

    .h-sec2 {
      background-image: url('images/bg-img-1.png');
      background-repeat: no-repeat;
      background-size: cover
    }

    .h-sec2 h1.margin-top {
      margin-top: 58px;
    }

    .h-sec2 h1 {
      font-family: 'Plus Jakarta Sans', sans-serif;
      font-size: 86px;
      max-width: 1043px;
      color: #D1D1D1;
      background: linear-gradient(to right, #ffffff, #988b8b, black);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .h-sec2 .p1 {
      color: #8B8B8B;
      max-width: 598px;
    }

    .h-sec2 .p2 {
      color: #8B8B8B;
      text-align: justify;
      font-size: 14px;
    }

    .get-started {
      border-radius: 30px;
      background-color: black;
      padding: 4px 0px;
      max-width: 202px;
      box-shadow: -3px -2px 3px #c82aef;
    }

    .get-started .phone-d {
      background-color: #C82AEF;
      width: 38px;
      padding: 6px 10px;
      border-radius: 23px;
      margin-left: 17px;
      display: inline-block;
    }

    .get-started .phone-d i {
      color: white !important;
      font-size: 25px;
    }

    .get-started .number-d {
      display: inline-block;
      margin-left: 22px;
    }

    .get-started .number-d span {
      color: #D1D1D1;
      margin-left: 9px;
    }

    .person-images {
      max-width: 53px;
      border: 4px solid #c82aef;
      border-radius: 27px;
    }

    .h-sec2 .positive-reviews {
      color: var(--primary-color-1);
      max-width: 166px;
    }

    .h-sec2 .per-imgs-d {
      top: -15px;
    }

    /*Home Section 2*/


    @media (min-width: 992px) {
      .navbar .dropdown:hover .dropdown-menu {
        display: block;
        margin-top: 0;
      }
    }

    @media screen and (max-width: 575px) {
      .header .logo-container {
        max-width: 144px;
        margin: auto;
      }

      nav .container .collapse-container {
        max-width: 58px;
        margin: auto;
      }

      .h-sec11 .sec2 input.form-control.email-input {
        width: 100%;
      }

      .header .contact-d-container {
        max-width: 203px;
        margin: auto;
      }

      .text-center-m {
        text-align: center;
      }
    }
  </style>


</head>

<body>
  <div class="container-fluid">

    <?php
    include "header.php";
    ?>

    <style>
      .serv-sec1 {
        margin-top: 61px;
      }

      .serv-sec1 .info p {
        color: var(--clr3);
        margin-top: 21px;
      }

      .serv-sec1 .info p i {
        color: var(--clr3);
      }

      .serv-sec1 .info p span {
        color: var(--clr1);
      }

      .serv-sec1 .info .heading-container {
        margin-bottom: 41px;
      }

      .serv-sec1 .info h1 {
        background: linear-gradient(to right, #ffffff, #988b8b, black);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-size: 51px;
      }

      .serv-sec1 .boxes {
        background: linear-gradient(to bottom right, #0E0E0E, #1F1F1F);
        padding: 17px;
        border-radius: 15px;
        padding-bottom: 26px;
        margin-top: 20px;
      }

      .serv-sec1 .boxes .icon-container {
        padding: 15px;
        display: inline-block;
        border-radius: 9px;
        background: linear-gradient(to bottom right, #1F1F1F, #0E0E0E);
        /* margin-top: 75px; */
        /* box-shadow: -1px -1px 2px #c82aef,
                    12px 0px black, 
                    -12px 0px black, 
                    -0px -12px black, 
                    -0px 12px black, 
                    10px -10px black, 
                    10px 10px black, 
                    -10px -10px black, 
                    -10px 10px black, 
                    -25px -11px black, 
                    -25px 11px black */
      }

      .serv-sec1 .boxes h1 {
        font-size: 20px;
        color: var(--clr1);
        position: relative;
        top: 17px;
        margin-left: 10px;
      }

      .serv-sec1 .boxes .container1 {
        border: 11px solid black;
        display: inline-block;
        border-radius: 18px;
        display: inline-block;
        box-shadow: -1px -1px 1px #c529eb;
      }

      .serv-sec1 .boxes .heading-container {
        width: 184px;
      }

      .serv-sec1 .boxes .icon-container img {
        max-width: 57px;
      }

      .serv-sec1 .boxes .view-details-d {
        border-radius: 30px;
        background-color: black;
        padding: 4px 0px;
        max-width: 370px;
        box-shadow: -3px -2px 3px #c82aef;
        margin-top: 41px;
        cursor: pointer;
      }

      .serv-sec1 .boxes .view-details-d .icon-d {
        background-color: #C82AEF;
        width: 38px;
        padding: 6px 10px;
        border-radius: 23px;
        margin-left: 5px;
        display: inline-block;
        margin-left: 63px;
      }

      .serv-sec1 .boxes .view-details-d .icon-d i {
        color: white !important;
        font-size: 25px;
      }

      .serv-sec1 .boxes .view-details-d .text-d {
        display: inline-block;
        margin-left: 93px;
      }

      .serv-sec1 .boxes .view-details-d .text-d span {
        color: var(--clr1);
      }

      .serv-sec1 .boxes h3 {
        font-size: 18px;
        margin-top: 33px;
        color: var(--clr4);
        line-height: 1.5;
        min-height: 216px;
      }

      .serv-sec1 .custom-solution-d p {
        color: var(--clr1);
        margin-top: 33px;
      }

      .serv-sec1 .custom-solution-d p span {
        color: var(--clr3);
      }

      .serv-sec1 .boxes .icon-container i {
        color: var(--clr3);
        font-size: 41px;
      }

      @media screen and (max-width: 575px) {
        .serv-sec1 {
          margin-top: 968px;
        }

        .serv-sec1 .boxes .view-details-d .text-d {
          margin-left: 123px;
        }

        .serv-sec1 .boxes .view-details-d .icon-d {
          margin-left: 104px;
        }
      }
    </style>

    <!-- Section 7 -->
    <div class="row serv-sec1">
      <div class="col-lg-2"></div>
      <div class="col-lg-10">
        <div class="row">
          <div class="col-lg-10">
            <div class="row info">
              <div class="col-lg-12">
                <!-- <p class="text-center">
                  <i class="far fa-dot-circle"></i>
                  <span class="in-bl ml5">Why Choose Nextinn</span>
                </p> -->
                <div class="heading-container">
                  <h1 class="text-center">Services</h1>
                  <!-- <h1 class="text-center">Real Results</h1> -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-10">
          <div class="row">
            <div class="col-lg-4">
              <div class="boxes">
                <div class="container1">
                  <div class="icon-container">
                    <img class="img-responsive" src="images/sec7icon.png">
                  </div>
                </div>
                <div class="in-bl heading-container">
                  <h1>AI Chatbot Development</h1>
                </div>
                <h3>
                  Our AI Chatbot Development Services are here to transform how businesses interact with customers. We
                  create smart chatbots that talk just like humans.
                </h3>
                <a href="ai-chatbot-development.php">
                  <div class="view-details-d">
                    <div class="text-d">
                      <span>View Details</span>
                    </div>
                    <div class="icon-d">
                      <i class="fas fa-arrow-right"></i>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="boxes">
                <div class="container1">
                  <div class="icon-container">
                    <img class="img-responsive" src="images/sec7icon2.png">
                  </div>
                </div>
                <div class="in-bl heading-container">
                  <h1>ChatGPT Integration</h1>
                </div>
                <h3>
                  Enhance user experiences with our ChatGPT Integration Services. Use advanced NLP and ML to create more
                  intuitive and personalized customer interactions.
                </h3>
                <a href="chat-gpt-integration.php">
                  <div class="view-details-d">
                    <div class="text-d">
                      <span>View Details</span>
                    </div>
                    <div class="icon-d">
                      <i class="fas fa-arrow-right"></i>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="boxes">
                <div class="container1">
                  <div class="icon-container">
                    <img class="img-responsive" src="images/sec7icon3.png">
                  </div>
                </div>
                <div class="in-bl heading-container">
                  <h1>Machine & Deep Learning</h1>
                </div>
                <h3>
                  Machine Learning (ML) is revolutionizing many industries, with the market expected to reach $204.30
                  billion by 2024. Using our expertise in AI, we harness the power of machine and deep learning to
                  create innovative systems.
                </h3>
                <div class="view-details-d">
                  <div class="text-d">
                    <span>View Details</span>
                  </div>
                  <div class="icon-d">
                    <i class="fas fa-arrow-right"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="boxes">
                <div class="container1">
                  <div class="icon-container">
                    <img class="img-responsive" src="images/sec7icon4.png">
                  </div>
                </div>
                <div class="in-bl heading-container">
                  <h1>Predictive Modeling</h1>
                </div>
                <h3>
                  At Nextinn, we offer innovative Predictive Modeling Services for your business. Our
                  Predictive Modeling services help you to make better decisions, anticipate market trends, identify
                  potential risks and opportunities, and remain agile.
                </h3>
                <div class="view-details-d">
                  <div class="text-d">
                    <span>View Details</span>
                  </div>
                  <div class="icon-d">
                    <i class="fas fa-arrow-right"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="boxes">
                <div class="container1">
                  <div class="icon-container">
                    <img class="img-responsive" src="images/sec7icon5.png">
                  </div>
                </div>
                <div class="in-bl heading-container">
                  <h1>Custom Software Development</h1>
                </div>
                <h3>
                  With over 10 years of experience, Nextinn is a reliable custom software development
                  company that transforms your unique ideas into reality. Our Custom Software Development Services will
                  give you a competitive edge in your industry.
                </h3>
                <div class="view-details-d">
                  <div class="text-d">
                    <span>View Details</span>
                  </div>
                  <div class="icon-d">
                    <i class="fas fa-arrow-right"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="boxes">
                <div class="container1">
                  <div class="icon-container">
                    <img class="img-responsive" src="images/sec7icon6.png">
                  </div>
                </div>
                <div class="in-bl heading-container">
                  <h1>UI/UX</h1>
                </div>
                <h3>
                  The first impression matters a lot. Whether it's your website or app, the first time users interact
                  with it shapes how they feel about it. Having a strong digital presence is really important in today's
                  competitive world.
                </h3>
                <div class="view-details-d">
                  <div class="text-d">
                    <span>View Details</span>
                  </div>
                  <div class="icon-d">
                    <i class="fas fa-arrow-right"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="boxes">
                <div class="container1">
                  <div class="icon-container">
                    <!-- <img class="img-responsive" src=""> -->
                    <i class="fas fa-robot"></i>
                  </div>
                </div>
                <div class="in-bl heading-container">
                  <h1>AI Development Services</h1>
                </div>
                <h3>
                  At Nextinn, we combine innovation with intelligence. Our expert team uses the latest
                  technologies to create custom AI solutions that fit your specific needs, transforming your operations.
                </h3>
                <div class="view-details-d">
                  <div class="text-d">
                    <span>View Details</span>
                  </div>
                  <div class="icon-d">
                    <i class="fas fa-arrow-right"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="boxes">
                <div class="container1">
                  <div class="icon-container">
                    <i class="fas fa-mobile-alt"></i>
                  </div>
                </div>
                <div class="in-bl heading-container">
                  <h1>Mobile App Development</h1>
                </div>
                <h3>
                  Nextinn., a top-tier mobile app development company, delivers cutting-edge custom
                  solutions. We help ambitious businesses to build scalable, user-focused apps that succeed.
                </h3>
                <div class="view-details-d">
                  <div class="text-d">
                    <span>View Details</span>
                  </div>
                  <div class="icon-d">
                    <i class="fas fa-arrow-right"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="boxes">
                <div class="container1">
                  <div class="icon-container">
                    <i class="fas fa-language"></i>
                  </div>
                </div>
                <div class="in-bl heading-container">
                  <h1>Natural Language Processing</h1>
                </div>
                <h3>
                  From understanding emotions to creating chatbots, our NLP Services cover various applications across
                  industries. We specialize in teaching computers to understand and use human language.
                </h3>
                <div class="view-details-d">
                  <div class="text-d">
                    <span>View Details</span>
                  </div>
                  <div class="icon-d">
                    <i class="fas fa-arrow-right"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="boxes">
                <div class="container1">
                  <div class="icon-container">
                    <i class="fas fa-bullhorn"></i>
                  </div>
                </div>
                <div class="in-bl heading-container">
                  <h1>Digital Marketing</h1>
                </div>
                <h3>
                  Unleash your brand's digital potential with our all-inclusive Digital Marketing Services. We
                  specialize in strategies fueled by data and imaginative campaigns that boost your online presence.
                </h3>
                <div class="view-details-d">
                  <div class="text-d">
                    <span>View Details</span>
                  </div>
                  <div class="icon-d">
                    <i class="fas fa-arrow-right"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="boxes">
                <div class="container1">
                  <div class="icon-container">
                    <i class="fas fa-microchip"></i>
                  </div>
                </div>
                <div class="in-bl heading-container">
                  <h1>Machine Learning</h1>
                </div>
                <h3>
                  Machine Learning (ML) is revolutionizing many industries, with the market expected to reach $204.30
                  billion by 2024. Using our expertise in AI, we harness the power of machine and deep learning to
                  create innovative systems.
                </h3>
                <div class="view-details-d">
                  <div class="text-d">
                    <span>View Details</span>
                  </div>
                  <div class="icon-d">
                    <i class="fas fa-arrow-right"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="boxes">
                <div class="container1">
                  <div class="icon-container">
                    <i class="fas fa-cloud"></i>
                  </div>
                </div>
                <div class="in-bl heading-container">
                  <h1>DevOps</h1>
                </div>
                <h3>
                  Discover the amazing impact of our DevOps Services, where smooth integration, automation, and
                  AI-powered improvements come together to change how you develop software.
                </h3>
                <div class="view-details-d">
                  <div class="text-d">
                    <span>View Details</span>
                  </div>
                  <div class="icon-d">
                    <i class="fas fa-arrow-right"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="boxes">
                <div class="container1">
                  <div class="icon-container">
                    <i class="fas fa-image"></i>
                  </div>
                </div>
                <div class="in-bl heading-container">
                  <h1>Computer Vision</h1>
                </div>
                <h3>
                  Our computer vision solutions offer cutting-edge applications in security systems, autonomous
                  vehicles, medical image analysis, facial identification, and manufacturing quality control.
                </h3>
                <div class="view-details-d">
                  <div class="text-d">
                    <span>View Details</span>
                  </div>
                  <div class="icon-d">
                    <i class="fas fa-arrow-right"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="boxes">
                <div class="container1">
                  <div class="icon-container">
                    <i class="fas fa-users"></i>
                  </div>
                </div>
                <div class="in-bl heading-container">
                  <h1>Staff Augmentation</h1>
                </div>
                <h3>
                  Need skilled software teams to fill talent gaps? Our IT Staff Augmentation offers ready-to-go AI teams
                  for your business needs.
                </h3>
                <div class="view-details-d">
                  <div class="text-d">
                    <span>View Details</span>
                  </div>
                  <div class="icon-d">
                    <i class="fas fa-arrow-right"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row custom-solution-d">
            <!-- <p class="text-center">Need a custom solution? Let's create strategy tailored for your business. <span style="color: var(--clr3);">Get a Free Strategy Call</span></p> -->
          </div>
        </div>
      </div>
    </div>
    <!-- Section 7 -->

    <?php
    include "footer.php";
    ?>
    <div class="row" style="margin-top:20px;">
      <div class="col-lg-12"></div>
    </div>

  </div>

</body>

</html>