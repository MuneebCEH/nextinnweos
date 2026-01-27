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
      .detail-page-sec1 {
        margin-top: 61px;
      }

      .detail-page-sec1 .info p {
        color: var(--clr3);
        margin-top: 21px;
      }

      .detail-page-sec1 .info p i {
        color: var(--clr3);
      }

      .detail-page-sec1 .info p span {
        color: var(--clr1);
      }

      .detail-page-sec1 .info .heading-container {
        margin-bottom: 41px;
      }

      .detail-page-sec1 .info h1 {
        background: linear-gradient(to right, #ffffff, #988b8b, black);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-size: 51px;
      }

      .detail-page-sec1 .boxes {
        background: linear-gradient(to bottom right, #0E0E0E, #1F1F1F);
        padding: 17px;
        border-radius: 15px;
        padding-bottom: 26px;
        margin-top: 20px;
      }

      .detail-page-sec1 .boxes .icon-container {
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

      .detail-page-sec1 .boxes h1 {
        font-size: 20px;
        color: var(--clr1);
        position: relative;
        top: 17px;
        margin-left: 10px;
      }

      .detail-page-sec1 .boxes .container1 {
        border: 11px solid black;
        display: inline-block;
        border-radius: 18px;
        display: inline-block;
        box-shadow: -1px -1px 1px #c529eb;
      }

      .detail-page-sec1 .boxes .heading-container {
        width: 184px;
      }

      .detail-page-sec1 .boxes .icon-container img {
        max-width: 57px;
      }

      .detail-page-sec1 .view-details-d {
        border-radius: 30px;
        background-color: black;
        padding: 4px 0px;
        max-width: 370px;
        box-shadow: -3px -2px 3px #c82aef;
        margin-top: 41px;
        cursor: pointer;
      }

      .detail-page-sec1 .view-details-d .icon-d {
        background-color: #C82AEF;
        width: 38px;
        padding: 6px 10px;
        border-radius: 23px;
        margin-left: 5px;
        display: inline-block;
        margin-left: 63px;
      }

      .detail-page-sec1 a {
        text-decoration: none;
      }

      .detail-page-sec1 .view-details-d .icon-d i {
        color: white !important;
        font-size: 25px;
      }

      .detail-page-sec1 .view-details-d .text-d {
        display: inline-block;
        margin-left: 93px;
      }

      .detail-page-sec1 .view-details-d .text-d span {
        color: var(--clr1);
      }

      .detail-page-sec1 .view-details-d .text-d span {
        color: var(--clr1);
      }

      .detail-page-sec1 h3 {
        font-size: 18px;
        margin-top: 33px;
        color: var(--clr4);
        line-height: 1.5;
        min-height: 216px;
      }

      .detail-page-sec1 .custom-solution-d p {
        color: var(--clr1);
        margin-top: 33px;
      }

      .detail-page-sec1 .custom-solution-d p span {
        color: var(--clr3);
      }

      .detail-page-sec1 .boxes .icon-container i {
        color: var(--clr3);
        font-size: 41px;
      }
      @media screen and (max-width: 575px) {
        .detail-page-sec1 {
          margin-top: 968px;
        }

        .detail-page-sec1 .view-details-d .text-d {
          margin-left: 123px;
        }

        .detail-page-sec1 .view-details-d .icon-d {
          margin-left: 104px;
        }
      }



      .detail-page-sec1 h4 {
        font-size: 20px;
        color: var(--clr4);
        margin-top: 48px;
      }

      .detail-page-sec1 h2 {
        background: linear-gradient(to right, #ffffff, #988b8b, black);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-top: 96px;
      }

      .detail-page-sec1 h5 {
        font-size: 18px;
        color: var(--clr4);
        margin-top: 48px;
      }
    </style>

    <!-- Section 7 -->
    <div class="row detail-page-sec1">
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
                  <h1>Customized AI Chatbot Development Services</h1>
                  <h4>Boost customer engagement with our customized AI chatbot development services. Converse with
                    customers anytime, anywhere through our AI Chatbots. 24/7 automated support at a fraction of the
                    time and cost.</h4>

                  <a href="ai-chatbot-development.php">
                    <div class="view-details-d">
                      <div class="text-d">
                        <span>Get Free Consultation</span>
                      </div>
                      <div class="icon-d">
                        <i class="fas fa-arrow-right"></i>
                      </div>
                    </div>
                  </a>

                  <h2>AI Models Leveraged by Our Specialists</h2>
                  <h5>As the Chatbot market grows, more businesses are realizing the benefits of using chatbots. The
                    ease of automation and AI-powered customer service solutions has led to a surge in chatbot use
                    across industries. Businesses are integrating AI chatbot solutions into their operations to enhance
                    overall efficiency. Sharp Tech IT Solutions is dedicated to revolutionizing customer interactions
                    with chatbot development services.</h5>
                  <h5>Whether in e-commerce or customer service, our chatbots automate tasks, offer real-time support,
                    and create personalized experiences. Maintain a competitive edge in the digital landscape with our
                    adaptable, smart, and ready-to-deploy conversational chatbot solutions. Trust us as your AI Chatbot
                    Development Company to enhance customer engagement and optimize operational efficiency.</h5>
                  <a href="ai-chatbot-development.php">
                    <div class="view-details-d">
                      <div class="text-d">
                        <span>Schedule a Demo</span>
                      </div>
                      <div class="icon-d">
                        <i class="fas fa-arrow-right"></i>
                      </div>
                    </div>
                  </a>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-10">
          <div class="row">

            <div class="col-lg-12">
              <h2>Customized AI Chatbot Development Services Offered by Sharp Tech IT Solutions</h2>
            </div>

            <div class="col-lg-4">
              <div class="boxes">
                <div class="container1">
                  <div class="icon-container">
                    <i class="fas fa-cloud"></i>
                  </div>
                </div>
                <div class="in-bl heading-container">
                  <h1>AI Chatbot Development Solutions</h1>
                </div>
                <h3>
                  We offer end-to-end AI development services, including design, development, integration, and support.
                  Our intelligent virtual assistants engage users in meaningful conversations 24/7.
                </h3>
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
                  <h1>Chatbot Design and Development</h1>
                </div>
                <h3>
                  We specialize in creating chatbots designed for business needs. Our team collaborates to understand
                  the brand, goals, and challenges. We develop chatbots according to your brand personality alignment.
                </h3>
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
                  <h1>Multi-language Chatbot Development</h1>
                </div>
                <h3>
                  We can develop multilingual chatbots that can converse seamlessly in different languages. We provide
                  localized support and enhance customer satisfaction across diverse markets.
                </h3>
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
                  <h1>Chatbot Integration</h1>
                </div>
                <h3>
                  Our integration experts ensure smooth chatbot integration across websites, apps, and messaging
                  platforms. Our chatbot integration services enhance workflow efficiency, providing a platform for
                  effortless communication.
                </h3>
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
                  <h1>Natural Language Processing Chatbot Development</h1>
                </div>
                <h3>
                  Natural Language Processing Chatbot Development With advanced NLP capabilities, we create AI chatbots
                  that understand users’ complex queries, provide accurate information, provide context-aware
                  interactions, and resolve customer issues effectively.
                </h3>
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
                  <h1>Chatbot Maintenance and Support</h1>
                </div>
                <h3>
                  Post-deployment, we ensure chatbots perform optimally through regular updates, upgrades, and issue
                  resolution support. Our dedicated engineers perform monitoring and troubleshooting to optimize
                  performance.
                </h3>
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